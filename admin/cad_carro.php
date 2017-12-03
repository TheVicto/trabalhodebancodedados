<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADMIM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">ADMIM</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li  class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
               painel de controle</span>
            </a>
          </li>          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a style="display: block;" class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Ferramentas</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                  <a href="carros.php">Carros</a>
              </li>
              <li>
                  <a href="index.php">Clientes</a>
              </li>
              <li>
                  <a href="locados.php">Locação</a>
              </li>
              <li>
                  <a href="cad_carro.php">Cadastrar Carro</a>
              </li>
            </ul>
          </li>>
          
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Sair</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">painel de controle</a>
          </li>
          <li class="breadcrumb-item active">Cadastrar Carro</li>
        </ol>
   <!-- FORMULÁRIO DO CADASTRO DE CARRO -->
   <form method="post" enctype="multipart/form-data">
<?php
// verificação sucesso em cadastrar carro
if (isset($_GET['id'])){$id = $_GET['id'];}	

if (isset($id)) {
    if ($id == "cad") 
    {
         echo "<div class='alert alert-success'>
                    Carro cadastrado com sucesso !
               </div>";
         
echo'<script>  setTimeout(function(){
window.location = "carros.php";
}, 3000);
</script>';    
         
    }
}
// fim da verificação sucesso em cadastrar carro


// verificação tamanho da imagem
if (isset($_GET['id'])){$id = $_GET['id'];}	

if (isset($id)) {
    if ($id == "tam") 
    {
         echo "<div class='alert alert-warning'>
                    Tamanho utrapassou 2MB!
               </div>";
         
echo'<script>  setTimeout(function(){
window.location = "cad_carro.php";
}, 3000);
</script>';
         
    }
        
}
// fim da verificação tamanho da imagem

// verificação formato da imagem
if (isset($_GET['id'])){$id = $_GET['id'];}	

if (isset($id)) {
    if ($id == "for") 
    {
         echo "<div class='alert alert-warning'>
                   Formato não aceito (formatos aceitos: jpg, png, bmp e gif)!
               </div>";
         
         
echo'<script>  setTimeout(function(){
window.location = "cad_carro.php";
}, 3000);
</script>';
    }
        
}
// fim da verificação formato da imagem

// verificação placa do carro
if (isset($_GET['id'])){$id = $_GET['id'];}	

if (isset($id)) {
    if ($id == "placa") 
    {
         echo "<div class='alert alert-warning'>
                   Há carro com essa placa !
               </div>";
         
         
echo'<script>  setTimeout(function(){
window.location = "cad_carro.php";
}, 3000);
</script>';
    }
        
}
// fim da verificação placa do carro

// verificação placa do carro
if (isset($_GET['id'])){$id = $_GET['id'];}	

if (isset($id)) {
    if ($id == "dow") 
    {
         echo "<div class='alert alert-warning'>
                   Erro no download!
               </div>";
         
         
echo'<script>  setTimeout(function(){
window.location = "cad_carro.php";
}, 3000);
</script>';
    }
        
}
// fim da verificação placa do carro


        
        ?>
       <label>Modelo</label>
       <input type="text" name="modelo" class="form-control" placeholder="Modelo">
       <label>Marca</label>
       <input type="text" name="marca" class="form-control" placeholder="Marca">
       <label>Placa</label>
       <input type="texte" maxlength="7" class="form-control" name="placa" placeholder="Placa">
       <label>Ano de Lançamento</label>
       <input type="date" name="ano_lanc" class="form-control" placeholder="Ano de Laçamento">
       <label>Classe</label>
       <select class="form-control" name="classe" >
           <option value="A">A</option>
           <option value="B">B</option>
           <option value="C">C</option>
           <option value="D">D</option>
       </select>
       <label>Foto</label><br>
	<input class="form-control" type="file" name="file">
       <br>
       <input type="submit" name="enviar" value="Cadastrar" class="btn btn-primary">
   </form>



        
        
    </div>

        <footer class="sticky-footer" >
      <div class="container">
        <div class="text-center">
          <small>direito autoral &copy; AUTOCAD 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Selecione "Logout" abaixo se você estiver pronto para terminar sua sessão atual.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="../index.php">Sair</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>

<?php

require("../conexao.php");
if(isset($_POST['enviar'])){
    $modelo = $_POST['modelo'];
    $ano_lanc = $_POST['ano_lanc'];
    $marca = $_POST['marca'];
    $placa = $_POST['placa'];
    $classe = $_POST['classe'];
    $dir = "../img/carros/";
    $ext = strtolower(substr($_FILES['file']['name'], -4));
    $nome = md5(microtime()).$ext;
    $tam = $_FILES['file']['size'];
    $tam =ceil(($tam / 1024) / 1024);

    
    
    if($tam < 2){
	if($ext == ".jpg" || $ext == ".png" || $ext == ".bmp" || $ext == ".gif"){
		if(move_uploaded_file($_FILES['file']['tmp_name'], $dir.$nome)){
			
			$sql = "INSERT  INTO tbcarro(modelodocarro,datadelancamento,placa,classcarro,marcacarro,fotocarro) VALUES ('$modelo','$ano_lanc','$placa','$classe','$marca','$nome')";

			$query = mysqli_query($con, $sql);

			if($query){
				echo "<script> window.location='cad_carro.php?id=cad' </script>";
                                
			}else{
				
		echo "<script> window.location='cad_carro.php?id=placa' </script>";
			}
		}else{
                    
		echo "<script> window.location='cad_carro.php?id=dow' </script>";
		}
	}else{
		echo "<script> window.location='cad_carro.php?id=for' </script>";
	}
}else{
        echo "<script> window.location='cad_carro.php?id=tam' </script>";
}

}
?>

