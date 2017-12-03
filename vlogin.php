<?php

require("conexao.php");

$user = $_POST['email'];
$pass = $_POST['pass'];


$sql = "SELECT * FROM  tbcliente WHERE email = '".$user."' AND senha = '".$pass."'";
$query = mysqli_query($con, $sql);

while($d = mysqli_fetch_assoc($query)){
	$nome = $d['nome'];
}

if(mysqli_num_rows($query) > 0)
{
	session_start();
	$_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        
	header('location:index.php');

}
else{
	unset($_SESSION['nome']);
	header('location:login.php');
}
?>