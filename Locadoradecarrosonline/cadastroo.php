<?php 

require("conexao.php");

if(isset($_POST['Enviar'])){

$nome = $_POST['nome'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$end1 = $_POST['rua'];
$end2 = $_POST['bairro'];
$end3 = $_POST['cep1'];
$end4 = $_POST['cep2'];

$end = $end1."-".$end2."-".$end3.".".$end4;

$passC = md5(base64_encode($pass));

$sql = "INSERT INTO clientes (nome,email, senha, endereco) VALUES ('$nome', '$email', '$passC', '$end')";

$query = mysqli_query($con, $sql);
if($query){
	echo "<script>alert('Usuário Cadastrado!')</script>";
}else{
	echo "<script>alert('Usuário não Cadastrado!')</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>
</head>
<body class="container">
<h4>Cadastro de Clientes</h4>
<form action="" method="post">
	<label>Nome Completo</label>
	<input class="form-control" type="text" name="nome" placeholder="Nome Completo" required>
	<label>Password</label>
	<input class="form-control" type="password" name="pass" placeholder="Password" minlength="8" maxlength="16" required>
	<label>E-mail</label>
	<input class="form-control" type="email" name="email" placeholder="seuemail@seudominio.com" required>
	<label>Endereço</label>
	<input class="form-control" type="text" name="rua" placeholder="Rua ou Avenida" required>
	<div class="row">
		<div class="col-md-4">
			<label>Bairro</label>
			<input class="form-control" type="text" name="bairro" placeholder="Bairro" required>	
		</div>
		<div class="col-md-4">
			<label>CEP</label>
			<input class="form-control" maxlength="5" type="text" name="cep1" placeholder="xxxxx" required>	
		</div>
		<div class="col-md-2">
			<label style="color:white">CEP</label>
			<input class="form-control" type="text" maxlength="3" name="cep2" placeholder="xxx" required>	
		</div>
	</div>
	<div class="row" style="height: 20px"></div>
	<input style="margin-top: 5px" class="btn btn-primary form-control" type="submit" name="Enviar">
</form>
</body>
</html>