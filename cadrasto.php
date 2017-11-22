<?php 

require("conexao.php");

if(isset($_POST['Enviar'])){

$nome = $_POST['nome'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$end1 = $_POST['rua'];
$end2 = $_POST['bairro'];
$end3 = $_POST['cep1'];
$end4 = $_POST['cep2'];

$end = $end1."-".$end2."-".$end3.".".$end4;

$passC = md5(base64_encode($pass));

$sql = "INSERT INTO clientes (nome,email, senha, endereco) VALUES ('$nome', '$email', '$passC', '$end')";

$query = mysqli_query($con, $sql);
if($query){
	echo "<script>alert('Usuário Cadastrado!')</script>";
}else{
	echo "<script>alert('Usuário não Cadastrado!')</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/csss.css">
  <link rel="stylesheet" type="text/css" href="css/cs.css>
  <script src="https://use.fontawesome.com/bc520d82be.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <title>Cadrasto</title>
</head>
<header>

  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
     	<div class="navbar-header"> 
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        </div>
   <nav>
     <div id="fh5co-navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
			<li class="active">
              <a href="index.php"><span>Principal<span class="border"></span></span></a>
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
   </nav>
</header>

<boby>
<nav class="navbar navbar-default" role="navigation" style="width: 850px; height: 800px; position: center;">   
	<div class="box_s_reg">
    	<h2 class="line_title marginTop0">Crie sua Conta</h2>
    <p></p>

    <div>
      <form id="formCadastro" name="formCadastro" class="formulario validate nice custom" method="post" action="https://www.rentcars.com/pt-br/cliente/cadastro">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h4>Dados pessoais</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
        <div class="form-group">
           <div class="form-inline form-group-gender">

                <label class="radio-inline radio-first-label" for="Tratamento"><span class="req">*</span> Tratamento:</label><br>
                <label class="radio-inline radio-gender-label"><input type="radio" name="Tratamento" value="M"> Sr.</label>
                <label class="radio-inline radio-gender-label"><input type="radio" name="Tratamento" value="F"> Sra.</label>
                <label for="Tratamento" class="error" style="display:none;">Please choose one.</label>
            </div>
        </div>
      </div>

     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 elVal">
        <div class="form-group">

          <label for="Nome"><span class="req">*</span> Nome:</label>
            <input type="text" name="Nome" placeholder="Nome" id="Nome" class="input-text expand form-control"/>
        </div>
     </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 elVal">
      <div class="form-group">

		  <label for="Sobrenome"><span class="req">*</span> Sobrenome:</label>
             <input type="text" name="Sobrenome" placeholder="Sobrenome" id="Sobrenome" class="input-text expand form-control"/>
       </div>
    </div>
</div>

    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 elVal">
         <div class="form-group">

            <label for="PaisResidencia"><span class="req">*</span> Pais de Residência:</label>

    <div class="control-value" id="raw-CodigoPaisNacionalidade">
      <div class="hide-field">

            <select disabled="true" name="PaisResidencia" id="PaisResidencia" class="form-control">
                <option value="">Selecione...</option>
                <option value="brasil" selected="selected">Brasil</option>     
            </select>
        </div>
     </div>
  </div>
</div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 elVal">
        <div class="form-group">

          <label for="CodigoPaisNacionalidade"><span class="req">*</span> Nacionalidade:</label>
            <select name="CodigoPais" id="CodigoPaisNacionalidade" class="input-text medium form-control"/>
                <option value="">Selecione</option>
	            <option>Ceara- Ce</option>
	            <option>Rio Grande do Norte - RN</option>
            </select>
         </div>
    </div>
</div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 elVal">
          <div class="form-group">
              <label for="TipoDocumento"><span class="req">*</span> Tipo do Documento:</label>
                  <select name="TipoDocumento" id="TipoDocumento" class="form-control">
                     <option value="">Selecione...</option>
                     <option value="CPF">CPF</option>
                     <option value="Identidade">Identidade</option>
                     <option value="CNH">CNH</option>
                  </select>
           </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 elVal">
          <div class="form-group">
            <label for="Documento"><span class="req">*</span> Número do Documento:</label>
                <input type="text" name="Documento" id="Documento" class="input-text expand form-control" maxlength="14"/>
          </div>
        </div>
    </div>

     <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 elVal">
           <div class="form-group">
              <label for="DataNascimento"><span class="req">*</span> Data de Nascimento:</label>
                <input type="text" style="background-color: #fff;" name="DataNascimento" id="DataNascimento" class="input-text expand form-control" placeholder="DD/MM/AAAA"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 elVal">
          <div class="form-group">
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 form-group-celular">

                   <label for="Celular" class="cursor-help" rel="tooltip" title="Certifique-se de preencher corretamente seu número de celular: Digite apenas números, sem pontos ou traços e não se esqueça de incluir seu DDD. Caso ocorra algum imprevisto com sua reserva, entraremos em contato."><span class="req">*</span> Celular: <span class="fa fa-info-circle"></span></label>

                      <input type="tel" class="form-control intl-phone custom-placeholder" placeholder="" name="Celular" id="Celular" maxlength="24">
                </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group-celular-advice">
            <span class="advice-form"><em id="CelularCustomPlaceHolder"></em></span>
             </div>
        </div>
      </div>
  </div>
</div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group-celular-advice">
          <span class="advice-form"><em id="CelularCustomPlaceHolder"></em></span>
        </div>
      </div>
    </div>
</div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <h4>Dados de acesso à AutorCard.com</h4>
        </div>
    </div>

    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 elVal">
                <div class="form-group">
                    <label for="Email"><span class="req">*</span> E-mail:</label>
                    <input name="Email" type="text" id="Email" class="input-text expand form-control" value=""/>
                <div id="hint"></div>
            </div>
        </div>

     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 elVal">
       <div class="form-group">
         <label for="ConfirmarEmail"><span class="req">*</span> Confirme seu E-mail:</label>
           <input name="ConfirmarEmail" type="text" id="ConfirmarEmail" class="input-text expand form-control"/>
       </div>
     </div>
 </div>

    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 elVal">
         <div class="form-group">
            <label for="Senha" rel="tooltip" class="cursor-help" title="Crie uma senha individual para acessar o site Rentcars.com e conferir suas reservas. A nova senha deve conter 6 a 8 caracteres."><span class="req">*</span> Crie uma Senha de Acesso: <span class="fa fa-info-circle"></span></label>
                <input autocomplete="off" name="Senha" type="password" id="Senha" class="input-text expand form-control " maxlength="8" />
         </div>
      </div>

    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 elVal">
      <div class="form-group">
          <label for="ConfirmarSenha"><span class="req">*</span> Confirme sua Senha de Acesso:</label>
            <input autocomplete="off" name="ConfirmarSenha" type="password" id="ConfirmarSenha" class="input-text expand form-control" maxlength="8"/>
      </div>
    </div>
  </div>

       <div class="row" style="margin-bottom:0;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <div class="checkbox-inline">

                <input type="checkbox" name="Newsletter" id="Newsletter" value="1" checked/>
                <label style="display:inline-block" for="Newsletter">Aceito receber todas as ofertas e promoções da AutorCard.com</label>
                    </div>
                </div>
            </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group" style="margin-bottom:0;">
                <input type="submit" name="Salvar" id="submitCadastro" class="button fa-info-circle large radius btn-block" value="Criar Conta"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <ul class="client-login-advantages">
                <li><i class="fa fa-check"></i> Rápido e fácil reservar</li>
                <li><i class="fa fa-check"></i> Descontos de até 60%</li>
                <li><i class="fa fa-check"></i> Acesso a ofertas exclusivas</li>
            </ul>
        </div>
    </div>
</form>
</nav>

    <div id="loadingCadastro" class="mini-loading" style="display:none;">
        <h3>Validando cadastro, aguarde...</h3>
    </div>
  </boby>          
</html>