<?php
	if(isset($_POST['nome']) && isset($_POST['senha'])) {
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$con = mysqli_connect("localhost", "amandam@gmail.com", "6209804952225ab3d14348307b5a4a27", "locadora");
		if(!$con){
			echo "Erro com a conexão";
		}
		
		$query = "SELECT tipo FROM tbcliente WHERE usuario = '$nome' AND senha = '$senha'";
		$result = mysqli_query($con, $query);
		if($result){
			$resultado = mysqli_fetch_assoc($result);
			$tipo = $resultado['tipo'];
			if($tipo == 1){
				echo "O usuário é um ADMINISTRADOR!";
			}else{
		
				echo "É um usuário comum!";
			}

		}else{
			echo "Erro";
		}
	}
?>

