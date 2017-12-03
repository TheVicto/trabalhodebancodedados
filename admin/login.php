<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administração</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-login mx-auto mt-5">
        <div class="card-header"> Login </div>
        <div class="card-body">
          <form method="get">
            <div class="form-group">
<?php
//verificação Email e senha
if (isset($_GET['login'])){

    $login = $_GET['login'];
}	if (isset($login)) {
if ($login == "erro") {
        echo "<div class='alert alert-danger'>
<a class='close' data-dismiss='alert' '>×</a> Email ou Senha Incorreto
</div>";
}}
// fim a verificação Email e senha
?>
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                    Remember Password
                  </label>
              </div>
            </div>
              <input name="entar" class="btn btn-primary btn-block" type="submit" value="Login">
          </form>
         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>

<?php
require '../conexao.php';
if(isset($_GET['entar'])){
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    
    
$sql = "SELECT * FROM  admin WHERE nome = '".$email."' AND senha = '".$senha."'";
$query = mysqli_query($con, $sql);


if($dados = mysqli_num_rows($query) > 0)
{
	session_start();
	header('location:index.php');

}
else{
	header('location:login.php');
}
}
?>