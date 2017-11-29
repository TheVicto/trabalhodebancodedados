<?php

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("BD", "locadora");

$con = mysqli_connect(HOST, USER, PASS, BD) or die ("Não foi possível Conectar!");
$banco = mysqli_select_db($con, BD);

?>