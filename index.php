<?php
session_start();
require './scripts/database.php';
$username = $motDePasse = $usernameError = $motDePasseError = "";

function inputVerify($var){

    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);

    return $var;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = inputVerify($_POST['username']);
    $motDePasse = inputVerify($_POST['password']);

    if (empty($username)) {
        $usernameError = "Vous n'avez pas entré de nom d'utilisateur";
    }

    if (empty($motDePasse)) {
        $motDePasseError = "Vérifiez que vous avez saisi un mot de passe";
    }

    if(!empty($_POST['username']) and !empty($_POST['password']) )
    {
        $db = Database::connect();
        $req=$db->prepare("SELECT * from users where username=? AND  password=?");
        $req->execute(array($username,$motDePasse));


        $userHasBeenFound = $req->rowCount();
        if ($userHasBeenFound) {
            $user = $req->fetch(PDO::FETCH_OBJ);
            $_SESSION['id'] = $user->id;
            $id=$_SESSION['id'];

            $_SESSION['username'] = $user->username;
            $username = $_SESSION['username'];

            $_SESSION['isAdmin'] = $user->isAdmin;
            $isadmin = $_SESSION['isAdmin'];

            $_SESSION['NIV0'] = 1 ;
        }
        if ($userHasBeenFound) {
            header('Location: ./accueil.php');


        }
    }

}
?>
<!DOCTYPE html>
<html>
<?php include('scripts/head.php'); ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b> Agent CIE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Connectez-vous pour demarrer votre session</p>

    <form action="index.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="id agent">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <p style="color: red"> <?php echo $usernameError; ?></p>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="mot de passe">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <p style="color: red"> <?php echo $motDePasseError; ?></p>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">j'ai oublié mon id et/ou mon mot de passe</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
