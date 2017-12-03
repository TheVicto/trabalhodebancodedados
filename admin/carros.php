
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
          </li>
          
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
          <li class="breadcrumb-item active">Carros </li>
        </ol>

       



        
        <div class="row">
               <?php

 if (isset($_GET['id'])){$id = $_GET['id'];}	

if (isset($id)) {
    if ($id == "del") 
    {
         echo "<div class='alert alert-danger' style='width:1200px;'>
                    Carro removido !
               </div>";
         
echo'<script>  setTimeout(function(){
window.location = "carros.php";
}, 3000);
</script>';    
         
    }
}

    
//  fim da verificação sucesso em cadastrar carro
  ?>

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Carros 
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <style>
                    table{
                        font: 15px Arial;
                        
                    }
                    
                    #btn{
                        color:white;
                        width:90px;
                    }
                </style>
                

                <?php
        require("../conexao.php");
        $registros = 7;

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

        echo "<div class='row'>
        <table class='table table-striped'>";
        ?>
<?php
  echo "
        <thead>
        <tr>
        <td width='10%'>Modelo</td>
        <td width='10%'>Lancçamento</td>
        <td width='10%'>Placa</td>
        <td width='10%'>Classe</td>
        <td width='10%'>Marca</td>
        <td width='10%'>Foto</td>
        <td width='10%'>Ação</td>
        </tr>
        </thead>
        <tbody>
        ";
        while($dados = mysqli_fetch_assoc($query)){

                        echo "<tr>
                                  <td>";
                        echo "".$dados['modelodocarro']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['datadelancamento']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['placa']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['classcarro']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['marcacarro']."";
                        echo "</td>";
                        echo "<td>";
                        echo "<img class='img-responsive' width='100px' height='80px' src='../img/carros/".$dados['fotocarro']."'/>";
                        echo "</td>";
                        echo "<td>
                        <a class='btn btn-danger glyphicon glyphicon-trash'  href='carros.php?del=".$dados['idcarro']."'> Remover</a>
                        </td>
                        </tr>";

        }
        echo "</tbody>";
        echo "</div>";
        echo "<div class='row' id='space'>";
                echo "<div class='col-md-12'>";

                echo "</div>";
        echo "</div>";
        echo "</table>";
        echo "<div class='row'>";
                echo "<div class='col-md-12'><center><ul>";
                for($i = 1; $i < $numPaginas + 1; $i++){
                        echo "<a href='?pagina=".$i."'><button style='width:30px;' class='form-control btn btn-primary' >$i</button></a>";
                }
                echo "</center></ul></div>";
        echo "</div>";
        
        if(isset($_GET['del'])){
            $carro = $_GET['del'];
            
$sql = "DELETE FROM tbcarro WHERE idcarro = '$carro'";

$query =  mysqli_query($con, $sql);
if($query){
echo '
	<script>
		setTimeout(function(){
			window.location = "carros.php?id=del";
		}, 110);
 	</script>';
}
        }
        ?>

                
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <footer class="sticky-footer">
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


