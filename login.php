<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<style type="text/css">
		* { margin: 0 auto; padding: 0 }
		#tela{
			margin-top: -100px;
			width: 83.4%;
			height: 100%;
			position: absolute;
			z-index: 0;

		}
		input { margin-top: 5px; }
	</style>
</head>


<body class="container">
<header>
      <nav class="navbar navbar-default" style="z-index: 1;" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li class="active">
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
                         </span> (88) 9940-7250   (21) 7819-0645</a>
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

	<img id="tela" class="img-responsive" src="img/autocad.png">
<div class="row" style="height: 200px">
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<form action="logando.php" method="post" class="form form-control">
	<fieldset>
	<legend>Login</legend>
		<input class="form-control" type="text" name="user" placeholder="Usuário">
		<input class="form-control" type="password" name="pass" placeholder="Senha" minlength="6">
		<input class="form-control btn-primary" id="btn" type="submit" value="Login">	
	</fieldset>

</form>
	</div>
	<div class="col-md-4"></div>
</div>

</body>
</html>