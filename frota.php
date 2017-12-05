<?php
session_start();
if(isset($_SESSION['nome'])){
    
}else{
    header("location:login.php"); 
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet"  href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="bootstrap.reboot.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <script src="https://use.fontawesome.com/bc520d82be.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<title>Locadora de Veículos</title>

</head>
<body class="container">
<header>
      <nav class="navbar navbar-default" role="navigation">
       <ul class="nav navbar-nav navbar-right">
                    <li>
                    <img src="img/autocad.png" style="height: 50px; width: 130px; margin-left:-23%">
                  </li>
                    <li class="active" style="margin-left: -3%">
                      <a href="index.php"><span>Principal<span class="border"></span></span>
                      </a>
                    </li>

                    <li>
                      <a href="index.php#empresa">
                        <span>A Empresa <span class="border"></span></span>
                      </a>
                    </li>

                    <li>
                      <a href="servico.php">
                        <span>Serviços<span class="border"></span></span>
                      </a>
                    </li>
                    <li>
                      <a href="index.php#frota">
                        <span>Frota<span class="border"></span></span>
                      </a>
                    </li>


                    <li>
                      <a href="duvida.php">
                        <span>Dúvidas<span class="border"></span></span>
                      </a>
                    </li>

                    <li>
                      <a href="contato.php">
                        <span>Contato<span class="border"></span></span>
                      </a>
                    </li>

                    <li>
                      <a href="#"><span style="color: #ff9900">
                        <i class="glyphicon glyphicon-earphone"></i>
                         </span> (88) 9940-7250   (21) 7819-0645</a>
                    </li>

                   
<?php
                  if($_SESSION['nome']){

                       
if(isset($_GET['Sair'])){
    
    if($_GET['Sair'] == 'sair'){

  unset($_SESSION['nome']);
  header('location:index.php');
}}
                    echo ' <li>
                       <a href="conta.php"><span class="glyphicon glyphicon-user"></span>'.$_SESSION['nome'].'</a>
                    </li>
                      <li>
                       <a href="?Sair=sair"><span class="glyphicon glyphicon-log-in"></span> Sair</a>
                     </li>';
                  }else{

                    echo ' <li>
                       <a href="cadrasto.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>
                      <li>
                       <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                     </li>';

                  }
                  ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<form method="get">
  <input type="text" name="busca" id="busca" placeholder="Pesquisar por veiculo:">
  <input type="submit" name="" value="buscar">
</form>
    <?php
require("conexao.php");
$registros = 9;

$sql = "SELECT * FROM tbcarro";
$query = mysqli_query($con, $sql);

if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}else{
	$pagina = 1;
}

$resultados = mysqli_num_rows($query);

$inicial = ($registros*$pagina)-$registros;
$numPaginas = ceil($resultados/$registros);

$sql = "SELECT * FROM tbcarro LIMIT $inicial, $registros";
$query = mysqli_query($con, $sql);

echo "<div class='row'>";

while($dados = mysqli_fetch_assoc($query)){
	echo "<div class='col-md-4'>";
		echo "<div id='produtos'>";
			echo "<h4>".$dados['modelodocarro']."</h4>";
			echo "<img class='img-responsive' src='img/carros/".$dados['fotocarro']."' style='width:48%; height:48%' />";
			echo "<h4>".$dados['marcacarro']."</h4>";
			echo "<a  class='btn' href='detalhes.php?id=".$dados['idcarro']."'>+ Detalhes</a>";
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

  
<div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-4">
             <div class="fh5co-footer-widget">
                
                    <p>Empresa de transporte que oferece serviços executivos de transporte, locação de veículos de todas as categorias (compactos, executivo e de grupos).</p>
                </div>

                <div class="fh5co-footer-widget">
                    <p><i class="glyphicon glyphicon-earphone"></i> (88) 0800-0000</p>
                    <p><i class="fa fa-whatsapp"></i> (88) 9.99407250</p>
                    <p><i class=" glyphicon glyphicon-envelope"></i> amandardg32@gmail.com</p>
                    <p><i class="fa fa-map"></i> R. Projeta, 01 - Vila Cruz, Pereiro - CE, 63460-000</p>
                </div>
        <div class="fh5co-footer-widget">
          <ul class="fh5co-social">
            <li><a href="#" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>

            <div class="col-md-2 col-sm-6">
                <div class="fh5co-footer-widget top-level">
                    <h4 class="fh5co-footer-lead ">Navegação</h4>
                    <ul>
                        <li><a href="index.php">Página principal</a></li>
                        <li><a href="index.php#empresa">Empresa</a></li>
                        <li><a href="index.php#servico">Serviços</a></li>
                        <li><a href="index.php#frota">Frota</a></li>
                        <li><a href="duvida.php">Principais Dúvidas</a></li>
                        <li><a href="contato.php">Fale Conosco</a></li>
                    </ul>
                </div>
            </div>

            <div class="visible-sm-block clearfix"></div>

            <div class="col-md-4 col-sm-6">
                <div class="fh5co-footer-widget top-level">
                    <h4 class="fh5co-footer-lead">Serviços</h4>
                    <ul class="fh5co-list-check">
                       <li class="fa fa-check-circle-o"><a href="#servico">Transporte viagens / eventos / city tour</a></li>
                        <li class="fa fa-check-circle-o"><a href="#servico">Transporte de funcionários</a></li>
                        <li class="fa fa-check-circle-o"><a href="#servico">Transporte Executivo, Serviço à Disposição e Translado</a></li>
                        <li class="fa fa-check-circle-o"><a href="#servico">Terceirização (Compra x Locação)</a></li>
                     </ul>
                </div>
            </div>
        </div>

        <div class="row fh5co-row-padded fh5co-copyright">
            <div class="col-md-5">
              <p><small>&copy;  Todos os direitos reservados 2005-2016.</small></p>
                
            </div>
        </div>
    </div>     
</footer>
</body>
</html>