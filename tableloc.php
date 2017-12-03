<?php
session_start();
require 'conexao.php';
if(isset($_SESSION['nome'])){
    
}else{
    header("location:login.php"); 
}

?>
<!DOCTYPE>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/csss.css">
  <link rel="stylesheet" type="text/css" href="css/cs.css">
  <script src="https://use.fontawesome.com/bc520d82be.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <title>Cadrasto de Locação</title>
</head>

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
                      <a href="index.php#frota">
                        <span>Frota<span class="border"></span></span>
                      </a>
                    </li>

                    <li>
                      <a href="locacao.php">
                        <span>Locação<span class="border"></span></span>
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
                         </span> (88) 9940-7250   (88) 0800-000</a>
                    </li>

                    <li>
                       <a href="cadrasto.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>

                    <li>
                       <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                     </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<boby class="row">
    
<nav class="navbar navbar-default" role="navigation" style="width: 850px; padding: 30px; height: 400px; margin-left: 20%">   
    
      

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2>Preencha os Dados</h2>
      </div>
    </div>
    
<!-- formulario de locacão -->
<form id="formCadastro" name="formCadastro" class="formulario validate nice custom" method="post">
<?php
// verificação sucesso em cadastrar carro
if (isset($_GET['var'])){
$id = $_GET['var'];
}	if (isset($id)) {
if ($id == "certo") {
        echo "<div class='alert alert-success'>
<a class='close' data-dismiss='alert' href='#'>×</a>Carro Alugado com sucesso!
</div>";
        echo'<script>  setTimeout(function(){
window.location = "index.php";
}, 3500);
</script>';
}}
// fim da verificação sucesso em cadastrar carro

//verificação erro em cadastrar carro
if (isset($_GET['er'])){

    $er = $_GET['er'];
}	if (isset($er)) {
if ($er == "erro") {
        echo "<div class='alert alert-danger'>
<a class='close' data-dismiss='alert' href='frota.php'.$id.''>×</a>Carro já Alugado!
</div>";
         echo'<script>  setTimeout(function(){
window.location = "frota.php";
}, 3500);
</script>';         
}}
// fim a verificação sucesso em cadastrar carro

// verificação incorrespondencia de data
if (isset($_GET['data'])){

    $data = $_GET['data'];
}	
if (isset($data)) {
if ($data == "erro") {
    if (isset($_GET['id'])){
$carro = $_GET['id'];}
        echo "<div class='alert alert-danger'>
<a class='close' data-dismiss='alert' href='tableloc.php?id=".$carro."'>×</a>Incorrespondencia de data!
</div>";
         echo'
             <script>
window.location = tableloc.php?id='.$carro.';

</script>';         
}}
// fim da verificação incorrespondencia de data
?>
<!-- primeiro rom -->
    <div class="row">
        
        
        <div class="col-xs-5 elVal" >
            <div class="form-group">
                <span class="req">*</span> Data da Locação <span class="fa fa-info-circle"></span></label>
            <input autocomplete="off" maxlength="8" required name="data_loc" type="date" id="datalocacao" class="input-text expand form-control" placeholder="28/11/2017">
            </div>
        </div>

        <div class="col-xs-5 elVal">
            <div class="form-group">
                <span class="req">*</span> Data da Devolução <span class="fa fa-info-circle"></span></label>
                <input autocomplete="off"  required name="data_dev" maxlength="8"type="date" id="datadevolucao" class="input-text expand form-control" placeholder="28/11/2017">
            </div>
        </div>
    <!-- fim do primeiro rom -->
    </div>
<!-- segundo rom -->
    <div class="row">
            <div class="col-xs-5 elVal">
                    <div class="form-group">
                            <span class="req">*</span> Modelo do Veículo <span class="fa fa-info-circle"></span></label>
                         
                             <?php
                             if (isset($_GET['id'])){
$carro = $_GET['id'];}
                                $sql = "SELECT * FROM tbcarro WHERE idcarro = ".$carro."";
                                $query = mysqli_query($con, $sql);
                                while($dados = mysqli_fetch_assoc($query)){
                                    echo "<input  name='modelo' disabled  value='".$dados['modelodocarro']."'>";
                               }
                               
                             ?>
                         
                    </div>
            </div>

            <div class="col-xs-5 elVal">
                   
                <span class="req" style="margin-top: 5px;">*</span> Placa <span class="fa fa-info-circle"></span><br>
                                
                               <?php
                               if (isset($_GET['id'])){
$carro = $_GET['id'];}
                                $sql = "SELECT placa FROM tbcarro WHERE idcarro = ".$carro."";
                                $query = mysqli_query($con, $sql);
                                while($dados = mysqli_fetch_assoc($query)){
                                    echo "<input name='placa' disabled   value='".$dados['placa']."'>";
                               }
                               ?>
                               
                     
            </div>
        <!-- fim do segundo rom-->
    </div>


          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 row">
                <div class="form-group">
                    <input type="submit" name="Enviar" class="btn btn-primary large radius btn-block"><a href="reserva.php"></a>
                </div>
            </div>


           <div class="row" style="margin-bottom:0;">
                <div class="col-xs-5">
                    <div class="form-group">
                        <div class="checkbox-inline">

                    <input type="checkbox" name="notifi" id="notifi" value="1" checked/>
                    <label style="display:inline-block" for="Newsletter">Aceito receber todas as ofertas e promoções da AutorCard.com</label>
                        </div>
                    </div>
                </div>
              </div>
<!-- ***** FIM DO FORMULÁRIO DA LOCACÃO -->
</form>

</nav>
</boby>
</html>  

<?php 
$sql = "SELECT * FROM tbcarro WHERE idcarro = ".$carro."";
                                $query = mysqli_query($con, $sql);
                                while($dados = mysqli_fetch_assoc($query)){
                           
                                    
if(isset($_POST['Enviar']))
{   

                                    
    // variaveis do formulario
    $nome = $_SESSION['nome'];
    $data_loc = $_POST['data_loc'];
    $data_dev = $_POST['data_dev'];
    // end
    if($data_loc < $data_dev){
         $data = date_diff(date_create($data_dev), date_create($data_loc))->format('%d');
                                      $dias = date_diff(date_create($data_dev), date_create($data_loc))->format('%d');
                                 if($dados['classcarro'] == "A"){
                                        $preco = 100+($dias*2);
                                    }
                                    elseif($dados['classcarro'] == "B"){
                                        $preco = 100+($dias*1.80);
                                    }elseif($dados['classcarro'] == "C"){
                                        $preco = 100+($dias*1.60);
                                    }else{
                                        $preco = 100+($dias*1.40);
                                    }
         
         
         

      $sql = "INSERT INTO locacao (nome,modelo,data_loc,data_dev,placa,preco) VALUES ('".$nome."','".$dados['modelodocarro']."','".$data_loc."','".$data_dev."','".$dados['placa']."','".$preco."')";

        $query = mysqli_query($con, $sql);
        if($query){
if (isset($_GET['id'])){
$carro = $_GET['id'];}

        echo '
                <script>

                                window.location = "tableloc.php?var=certo&&id='.$carro.'";

                </script>';
        }else{
            if (isset($_GET['id'])){
$carro = $_GET['id'];}
        echo '
                <script>
                        
                                window.location = "tableloc.php?er=erro&&id='.$carro.'";
                        
                </script>';
        }


                                }else{
                                    
                    if (isset($_GET['id'])){
                    $carro = $_GET['id'];}
                          echo '
                               
                <script>
                        
                                window.location = "tableloc.php?data=erro&&id='.$carro.'";
                        
                </script>';
                                }
                                
            }}
?>
