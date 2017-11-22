-<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
   <link rel="stylesheet"  href="css/style.css"/>
 <link rel="stylesheet" type="text/css" href="bootstrap.reboot.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<style type="text/css">
		* { margin: 0 auto; padding: 0 }
		#tela{
			margin-top: -100px;
			width: 99,05%;
			height: 115%;
			position: absolute;
			z-index: 0;
		}
		input { margin-top: 5px; }
	</style>
</head>

<body> 
  <header id="fh5co-header" role="banner" >      
   <nav class="navbar navbar-default" style="z-index: 1;" role="navigation">
    <div class="container-fluid">             
     <div id="fh5co-navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">              

        <li>
          <img src="img/autocad.png" style="height: 60px; width: 130px; position: left;">
        </li>

        <li class="active">
          <a href="index.php"><span>Principal<span class="border"></span></span></a>
        </li>

        <li>
        <a href="index.php#empresa"><span>A Empresa <span class="border"></span></span></a>
        </li>

        <li>
          <a href="index.php#servico"><span>Serviços<span class="border"></span></span></a>
        </li>
        
        <li>
          <a href="index.php#frota"><span>Frota<span class="border"></span></span></a>
        </li>

        <li>
          <a href="locacao.php"><span>Locação<span class="border"></span></span></a>
        </li>

        <li>
          <a href="duvida.php"><span>Dúvidas<span class="border"></span></span></a>
        </li>

        <li>
          <a href="contato.php"><span>Contato<span class="border"></span></span></a>
        </li>

        <li>
          <a href="#"><span style="color: #ff9900">
            <i class="glyphicon glyphicon-earphone"></i></span>(88) 9940-7250   (21) 7819-0645</a>
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
	<img id="tela" src="img/autocad.png">
<div style="border:1px solid #000000; width: 440px; height: 350px; padding: 20px; position: absolute; top: 25%; left: 37%;">

  <form>
    <fieldset >
      <div class="col-md-12">
        <div class="form-group">
          <label for="name" style="font-size:35px; font-family: Varanda;"> Login </label>
          <label for="email" class="sr-only">E-mail</label>
          <input placeholder="Informe seu e-mail" id="email" name="email" type="email" class="form-control input-lg" required>
        </div>
        <div class="form-group">
          <label for="pass" class="sr-only">Senha</label>
          <input placeholder="Informe seu senha" id="pass" name="password" type="password" class="form-control input-lg" required>
        </div> 
        <div>
          <button type="button" class="btn btn-primary" style="height: 40px; width: 150px;"> Entra </button>
        </div>
      </div>

    </fieldset>
  </form>
</div>
</body>
</html>

