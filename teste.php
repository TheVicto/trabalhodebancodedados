<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
				$("a[rel=modal]").click( function(ev){
					ev.preventDefault();

					var id = $(this).attr("href");

					var alturaTela = $(document).height();
					var larguraTela = $(window).width();
	
					//colocando o fundo preto
					$('#mascara').css({'width':larguraTela,'height':alturaTela});
					$('#mascara').fadeIn(1000);	
					$('#mascara').fadeTo("slow",0.8);

					var left = ($(window).width() /2) - ( $(id).width() / 2 );
					var top = ($(window).height() / 2) - ( $(id).height() / 2 );
					
					$(id).css({'top':top,'left':left});
					$(id).show();	
 				});

 				$("#mascara").click( function(){
 					$(this).hide();
 					$(".window").hide();
 				});

 				$('.fechar').click(function(ev){
 					ev.preventDefault();
 					$("#mascara").hide();
 					$(".window").hide();
 				});
			});
		</script>

	<style type="text/css">
		* {margin:0 auto; padding:0px}
		#produtos { height:200px; float: left; margin: 50px 15px; text-align: center; background: #fff;}
		#produtos:hover { opacity: 0.8; transition: 0.5s; cursor: pointer;}
		#produtos a {position:  relative; top: 15px; background: red; color: white; padding: 5px 45px; text-decoration: none; cursor: pointer;}
		img { width: 150px; height: 150px; }
		#pag {clear: both; color: red}
		#pag a{color: red; font:55px arial;}
		#space { height: 100px;}
		.row a {padding: 0 10px;}
		.row a:active{background: #069; cor: white;}
		.window{
			display:none;
			width:300px;
			height:250px;
			position:absolute;
			left:0;
			top:0;
			background:#FFF;
			z-index:9900;
			padding:10px;
			border-radius:10px;
		}

		#mascara{
			position:absolute;
  			left:0;
  			top:0;
  			z-index:9000;
  			background-color:#000;
  			display:none;
		}

		.fechar{display:block; text-align:right;}
		#lo:hover{background:#069; border: none;}
	</style>

</head>
<body>
<div class="container">
<div class="row">
	<div class="col-md-11">
		<h2>Produtos</h2>
	</div>
	<div id="lo" style="position: relative; left:600px;" class="col-md-2 btn btn-danger">
		<a style="text-decoration: none;color: white; cursor: pointer;" href="#janela2" rel="modal">Login</a>
	</div>
</div>

<div id="busca">

	<?php include("pcarrinho.php");?>	
	<form action="busca.php" method="get">
	<input class="form-control col-md-3" type="text" name="busca" placeholder="Faça sua busca aqui...">
	<input class="form-control btn-primary col-md-2" type="submit" value="Buscar">
	</form>
	</div>
<hr/>
<div class="container">

<?php
require("conexao.php");
$registros = 10;

$sql = "SELECT * FROM produtos";
$query = mysqli_query($con, $sql);

if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}else{
	$pagina = 1;
}

$resultados = mysqli_num_rows($query);

$inicial = ($registros*$pagina)-$registros;
$numPaginas = ceil($resultados/$registros);

$sql = "SELECT * FROM produtos LIMIT $inicial, $registros";
$query = mysqli_query($con, $sql);

echo "<div class='row'>";

while($dados = mysqli_fetch_assoc($query)){
	echo "<div class='col-md-4'>";
		echo "<div id='produtos'>";
			echo "<h4>".$dados['nome']."</h4>";
			echo "<img class='img-responsive' src='images/".$dados['imagem']."'/>";
			echo "<h5>Preço: ".number_format($dados['preco'],2,",",".")."</h5>";
			echo "<a  class='btn' href='detalhes.php?id=".$dados['id']."'>+ Detalhes</a>";
		echo "</div>";
	echo "</div>";
}
echo "</div>";
echo "<div class='row' id='space'>";
	echo "<div class='col-md-12'>";

	echo "</div>";
echo "</div>";

echo "<div class='row'>";
	echo "<div class='col-md-12'><center><ul>";
	for($i = 1; $i < $numPaginas + 1; $i++){
		echo "<a href='index.php?pagina=".$i."'>$i</a>";
	}
	echo "</center></ul></div>";
echo "</div>";
?>

</div>
</div>

<div class="window" id="janela2">
<div class="row" style="height: 30px">
	<div class="col-md-12"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-12">
	<form action="vlogin.php" method="post" class="form form-control">
	<fieldset>
	<legend>Login</legend>
		<input class="form-control" type="text" name="user" placeholder="Usuário">
		<div class="row" style="height: 5px">
			<div class="col-md-12"></div>
		</div>
		<input class="form-control" type="password" name="pass" placeholder="Senha" minlength="6">
		<div class="row" style="height: 10px">
			<div class="col-md-12"></div>
		</div>
		<input class="form-control btn-primary" id="btn" type="submit" value="Login">
		<input type="checkbox" name="conetado">Manter conectado!	
		<center><a href="Cadastre.php">Cadastre-se</a></center>	
	</fieldset>

</form>
	</div>
	<div class="col-md-4"></div>
</div>
		</div>
		<div id="mascara"></div>
		</div>		
</body>
</html>