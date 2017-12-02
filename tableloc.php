
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
<nav class="navbar navbar-default" role="navigation" style="width: 850px; height: 800px; margin-left: 20%">   
	<div class="box_s_reg">
    	<h2 class="line_title marginTop0">Faça sua Locação</h2>
    <p></p>
</div>
    <div>
      

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h4>Preencha os Dados</h4>
      </div>
    </div>

    <form id="formCadastro" name="formCadastro" class="formulario validate nice custom" method="post">

    <div class="row">
     <div class="col-xs-5 elVal">
        <div class="form-group">
          <label for="Nome"><span class="req">*</span> Nome:</label>
            <input type="text" name="nome" placeholder="Nome" id="nomecliente" class="input-text expand form-control"/>
        </div>
     </div>

    <div class="col-xs-5 elVal">
      <div class="form-group">
		  <label for="Sobrenome"><span class="req">*</span> Sobrenome:</label>
             <input type="text" name="sobrenome" placeholder="Sobrenome" id="sobrenome" class="input-text expand form-control"/>
       </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-5 elVal">
        <div class="form-group">
          <label><span class="req">*</span>Cidade: </label>
            <input type="text" name="cidade" id="cidade" class="input-text expand form-control" maxlength="30" placeholder="Fortaleza" />
         </div>
    </div> 
<div class="col-xs-5 elVal">
    <div class="form-group">
      <label for="Documento"><span class="req">*</span> CPF:</label>
         <input type="text" name="cpf" id="cpf" class="input-text expand form-control" maxlength="14" placeholder="000.000.000-00" />
    </div>
</div>
</div>

     <div class="row">
        <div class="col-xs-5 elVal form-group">
              <label for="DataNascimento"><span class="req">*</span> Data de Nascimento:</label>
              <input type="date"  style="background-color: #fff;" name="datanascimento" id="datanascimento" class="input-text expand form-control" placeholder="AAAA/MM/DD"/>
            </div>
        <div class="col-xs-5 elVal form-group">
               
                   <label for="Celular" class="cursor-help" rel="tooltip" title="Certifique-se de preencher corretamente seu número de celular: Digite apenas números, sem pontos ou traços e não se esqueça de incluir seu DDD. Caso ocorra algum imprevisto com sua reserva, entraremos em contato."><span class="req">*</span> Telefone: <span class="fa fa-info-circle"></span></label>
                      <input type="tel" class="form-control intl-phone custom-placeholder" placeholder="" name="telefone" id="telefone" maxlength="24" placeholder="(88)9.9999-9999">
        </div>
</div>
      
      <div class="row">
        <div class="col-xs-5 form-group-celular-advice">
            <span class="advice-form"><em id="CelularCustomPlaceHolder"></em></span>
        </div>
      </div>
            <div class="col-xs-5 elVal">
                <div class="form-group">
                    <label for="email"><span class="req">*</span> E-mail:</label>
                    <input name="email" type="text" id="email" class="input-text expand form-control" placeholder="seuemail@gmail.com" />
                <div id="hint"></div>
            </div>
        </div>


    <div class="row">
      <div class="col-xs-5 elVal">
         <div class="form-group">
            <span class="req">*</span> Senha: <span class="fa fa-info-circle"></span></label>
                <input autocomplete="off" name="senha" type="password" id="senha" class="input-text expand form-control" placeholder="********">
       </div>
     </div>
   </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group-celular-advice">
          <span class="advice-form"><em id="CelularCustomPlaceHolder"></em></span>
        </div>
      </div>

<div class="row">
      <div class="col-xs-5 elVal">
         <div class="form-group">
            <span class="req">*</span> Data da Locação <span class="fa fa-info-circle"></span></label>
         <input autocomplete="off" maxlength="8" name="datalocacao" type="date" id="datalocacao" class="input-text expand form-control" placeholder="28/11/2017">
         </div>
      </div>

<div class="col-xs-5 elVal">
    <div class="form-group">
       <span class="req">*</span> Data da Devolução <span class="fa fa-info-circle"></span></label>
    <input autocomplete="off" name="datadevolucao" maxlength="8"type="date" id="datadevolucao" class="input-text expand form-control" placeholder="28/11/2017">
         </div>
      </div>
  </div>


<div class="row">
      <div class="col-xs-5 elVal">
         <div class="form-group">
            <span class="req">*</span> Modelo do Veículo <span class="fa fa-info-circle"></span></label>
                <input autocomplete="off" name="veiculo" type="text" id="modeloveiculo" class="input-text expand form-control" placeholder="Veículo">
         </div>
      </div>

      <div class="col-xs-5 elVal">
         <div class="form-group">
            <span class="req">*</span> Placa <span class="fa fa-info-circle"></span></label>
                <input autocomplete="off" name="placa" type="text" id="placa" class=" input-text expand form-control" placeholder="WWW-0000">
         </div>
      </div>
  </div>
  </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 row">
            <div class="form-group">
                <input type="submit" name="Cadastrar" class="btn btn-primary large radius btn-block"><a href="reserva.php"></a>
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
</form>


</boby>
</html>  

<?php 

require("conexao.php");

if(isset($_POST['Cadastrar'])){

$$fristname = $_POST['nome'];
$leftname = $_POST['sobrenome'];
$nome = $fristname." ".$leftname;

$cpf = $_POST['cpf'];
$datanascimento = $_POST['datanascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];
$cpf = $_POST['cpf'];
$datalocacao = $_POST['datalocacao'];
$datadevolucao = $_POST['datadevolucao'];
$placa = $_POST['placa']; 
$veiculo = $_POST['veiculo'];


$sql = "INSERT INTO tblocacao (nomecliente, datanascimento, cpf, telefone, cidade, email, senha, datalocacao, datadevolucao, modeloveiculo, placa ) VALUES ('".$nome.", '".$datanascimento."', '".$cpf."', '".$telefone."', '".$cidade."', '".$email."', '".$senha."', '".$datalocacao."', '".$datadevolucao."', '".$veiculo."', '".$placa."')";

$query = mysqli_query($con, $sql);
if($query){
  echo "<script>alert('Locação Feita!')</script>";
  header("location:reserva.php");
}else{
  echo "<script>alert('Locação Mal Realizada!')</script>";
}
}
?>
