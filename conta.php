<head>
    <meta charset="utf-8">
    <title>AutoCad - Locação de Veículos</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/bc520d82be.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

    <body class="container">

<header>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse">
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
                      <a href="index.php#servico">
                        <span>Serviços<span class="border"></span></span>
                      </a>
                    </li>
                    <li>
                        <a href="frota.php">
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
session_start();
                  if($_SESSION['nome']){

                    echo ' <li>
                       <a href="cadrasto.php"><span class="glyphicon glyphicon-user"></span>'.$_SESSION['nome'].'</a>
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
<!-- conta -->

<label><strong><h3 style="color:brown;">MINHA CONTA</h3></strong></label>
       <?php
        require("conexao.php");
        
        if(isset($_GET['Sair'])){
    
    if($_GET['Sair'] == 'sair'){

  unset($_SESSION['nome']);
  header('location:index.php');
}}
        
        $sql = "SELECT * FROM tbcliente  WHERE nome = '".$_SESSION['nome']."'";
        $query = mysqli_query($con, $sql);

        
        echo "<div class='row'>
        <table class='table table-striped'>
        <thead>
        <tr>
        <td width='10%'>Nome</td>
        <td width='10%'>Sobrenome</td>
        <td width='10%'>Email</td>
        <td width='10%'>Cidade</td>
        <td width='10%'>Bairro</td>
        <td width='10%'>Cpf</td>
        <td width='10%'>Telefone</td>
        <td width='10%'>Data de Nacimento</td>
        <td width='10%'>Pais</td>
        </tr>
        </thead>
        <tbody>
        ";
        while($dados = mysqli_fetch_assoc($query)){

                        echo "<tr>
                                  <td>";
                        echo "".$dados['nome']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['sobrenome']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['email']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['cidade']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['bairro']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['cpf']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['telefone']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['datanascimento']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['pais']."";
                        echo "</td>";
                        
                        "</tr>";

        }
        echo "</tbody>";
        echo "</div>";
        echo "<div class='row' id='space'>";
                echo "<div class='col-md-12'>";

                echo "</div>";
        echo "</div>";
        echo "</table>";
        
        ?>
<label><strong><h3 style="color:brown;">CARROS LOCADOS</h3></strong></label>
<br>
  <?php
        

        $sql = "SELECT * FROM locacao WHERE nome = '".$_SESSION['nome']."'";
        $query = mysqli_query($con, $sql);

 
        echo "<div class='row' style='margin-left:8px;'>
        <table class='table table-striped'>
        <thead>
        <tr>
        <td width='10%'>Modelo</td>
        <td width='10%'>Data da Locação</td>
        <td width='10%'>Data de Devolução</td>
        <td width='10%'>Placa</td>
        <td width='10%'>Preço</td>
        <td width='10%'>Ação</td> 
        </tr>
        </thead>
        <tbody>
        ";
        while($dados = mysqli_fetch_assoc($query)){

                        echo "<tr>";
                        echo "<td>";
                        echo "".$dados['modelo']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['data_loc']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['data_dev']."";
                        echo "</td>";
                        echo "<td>";
                        echo "".$dados['placa']."";
                        echo "</td>";
                        echo "<td>";
                        echo "R$".$dados['preco'].".00";
                        echo "</td>";
                        echo "<td>
                        <a class='btn btn-danger glyphicon glyphicon-trash'  href='conta.php?del=".$dados['id']."'> CANCELAR</a>
                        </td>
                        </tr>";

        }
        echo "</tbody>";
       
        
        
        
        if(isset($_GET['del'])){
            $carro = $_GET['del'];
            
$sql = "DELETE FROM locacao WHERE id = '$carro'";

$query =  mysqli_query($con, $sql);
if($query){
echo '
	<script>
		alert("Locação cancelada!!");
		setTimeout(function(){
			window.location = "conta.php";
		}, 110);
 	</script>';
}
        }
        ?>


