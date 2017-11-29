<?php
session_start();

error_reporting(0);

if(isset($_GET['acao'])){

$id = $_GET['id'];

if(!isset($_SESSION['locadora'])){
	$_SESSION['locadora'] = array();
}

if($_GET['acao'] == "add"){
	if(!isset($_SESSION['locadora'][$id])){
		$_SESSION['locadora'][$id] = 1;
	}else{
		$_SESSION['locadora'][$id] += 1;
	}
}

if($_GET['acao'] == "del"){
	if(isset($_SESSION['locadora'][$id])){
		unset($_SESSION['locadora'][$id]);
	}
}

if($_GET['acao'] == "up"){
	foreach ($_POST['locadora'] as $id => $qnt) {

		if(!(empty($_POST['locadora'])) || $_POST['loadora'] == 0) {
			$_SESSION['locadora'][$id] = $qnt;
}
}	
}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		td a {
			color: red;
			 text-align: center; font: 18px Arial; font-weight: bold; text-decoration: none;}
		th {color:white;}
	    input { text-align: center }
	</style>
</head>
<body>
<div class="container">
<form action="?acao=up" method="post">
<table align='center' cellpadding="10" class="table table-striped">
	<thead bgcolor="red">
		<th>Veículo</th>
		<th>Locação</th>
		<th>Preço da Locação</th>
	</thead>
	<tbody>
		<?php
		if(count($_SESSION['locadora']) == 0){
			echo "
			<tbody>
			<tr><td colspan='5' align='center'><span class='text text-danger'>Não há veículos locado!</span></td></center></tr>
			</tbody>
			";
		}else{
		require("conexao.php");
		$ttotal = 0;
		foreach ($_SESSION['locadora'] as $id => $qnt) {

			$sql = "SELECT * FROM locadora WHERE id = '$id'";
			$query = mysqli_query($con, $sql);
			$dados = mysqli_fetch_assoc($query);

			$nome = $dados['nome'];
			$preco = $dados['preco'];
			$total = $preco * $qnt;
			echo "<tr>
			<td>$nome</td>
			<td><input name='produtos[".$id."]' type='text' size='2' value='".$qnt."'></td>
			<td>R$ ".number_format($preco,2,',','.')."</td>
			<td>R$ ".number_format($total,2,',','.')."</td>
			<td align='center'><a href='?acao=del&id=".$id."'>
			<button type='button' class='btn btn-default'>
				<span class='glyphicon glyphicon-trash'> Excluir</span>
			</button> 
			</a></td>
			</tr>";
			$ttotal += $total;

		}		
		}

		?>
	</tbody>
	<tfoot>
		<tr>
			<td bgcolor="#ccc" colspan="2"><input style="width: 100%; font-weight: bold" type="submit" value="Atualizar Locação"/></td>
			<td>Total: </td>
			<td>
			R$ <?php echo number_format($ttotal,2,',','.');?>
			</td>
		</tr>
		<tr>
		<td><a href="frota.php">Continuar Locando</a></td>
		</tr>
	</tfoot>
</table>
</form>
</div>
</body>
</html>




