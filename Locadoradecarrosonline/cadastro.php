<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<style type="text/css" media="screen">
		body, html {
		height: 100%;
		
		}
		.card-container.card {
		width: 350px;
		padding: 40px 40px;
		z-index:99;
		margin-top:30px;
		}
		.btn {
		font-weight: 700;
		height: 36px;
		-moz-user-select: none;
		-webkit-user-select: none;
		user-select: none;
		cursor: default;
		z-index:99;
		}
		.card {
		
		padding: 20px 25px 30px;
		margin: 0 auto 25px;
		margin-top: 50px;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		z-index:99;
		}
		.profile-img-card {
		width: 96px;
		height: 96px;
		margin: 0 auto 10px;
		display: block;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		border-radius: 50%;
		z-index:99;
		}
		.profile-name-card {
		font-size: 16px;
		font-weight: bold;
		text-align: center;
		margin: 10px 0 0;
		min-height: 1em;
		z-index:99;
		}
		.reauth-email {
		display: block;
		color: #404040;
		line-height: 2;
		margin-bottom: 10px;
		font-size: 14px;
		text-align: center;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		z-index:99;
		}
		.form-signin #inputEmail,
		.form-signin #inputPassword {
		direction: ltr;
		height: 44px;
		font-size: 16px;
		z-index:99;
		}
		.form-signin input[type=email],
		.form-signin input[type=password],
		.form-signin input[type=text],
		.form-signin button {
		width: 100%;
		display: block;
		margin-bottom: 10px;
		z-index: 1;
		position: relative;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		z-index:99;
		}
		.form-signin .form-control:focus {
		border-color: rgb(104, 145, 162);
		outline: 0;
		-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		z-index:99;
		}
		.btn.btn-signin {
		background-color: rgb(104, 145, 162);
		padding: 0px;
		font-weight: 700;
		font-size: 14px;
		height: 36px;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		border: none;
		-o-transition: all 0.218s;
		-moz-transition: all 0.218s;
		-webkit-transition: all 0.218s;
		transition: all 0.218s;
		z-index:99;
		}
		.btn.btn-signin:hover,
		.btn.btn-signin:active,
		.btn.btn-signin:focus {
		background-color: rgb(12, 97, 33);
		z-index:99;
		}
		.forgot-password {
		color: rgb(104, 145, 162);
		z-index:99;
		}
		.forgot-password:hover,
		.forgot-password:active,
		.forgot-password:focus{
		color: rgb(12, 97, 33);
		z-index:99;
		}
		
		#logo{
	margin-left: 10px
}

#cabecalho > .menu {
  
  display: block;
  
  margin-bottom: 0;
  background: #fff;
  box-shadow: 0 0 5pt 0 rgba(0, 0, 0, 0.1);
  font-size: 13pt;
  border: transparent;
  width: auto;
  height: auto;
   }
 #cabecalho > .menu ul  {
    list-style: none; 
    text-transform: uppercase;
    position: absolute; 
    z-index: 2;
    top: 0pt; 
    left: 40%;
}
 #cabecalho > .menu li  {
    display: inline-block;
    padding: 4pt;
}
#cabecalho > .menu li:hover  {
    background-color:rgba(215, 215, 215, 0.5);
    transition: 1s;
}
#cabecalho > .menu a  {
    color: black; 
    text-decoration: none;
}
#cabecalho > .menu li a {
  text-transform: uppercase;
  color: #000;
  font-weight: normal;
  font-family: "Montserrat", arial, sans-serif; 
}
#cabecalho > .menu li a > span .border {
  display: block;
  height: 3pt;
  vertical-align: middle;
  transform: translateZ(0);
  box-shadow: 0 0 1pt transparent;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  transition-property: color;
  transition-duration: 0.3s;
  transition-duration: 0.3s; 
}
#cabecalho > .menu li a > span .border:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #FBB040;
  transform: scaleX(0);
  transform-origin: 0 50%;
  transition-property: transform;
  transition-duration: 0.3s;
  transition-timing-function: ease-out; 
}
#cabecalho > .menu li a:hover, #cabecalho > .menu li a:focus {
  outline: none; 
}
#cabecalho > .menu li a:hover > span, #cabecalho > .menu li a:focus > span {
  outline: none; 
}
#cabecalho > .menu li a:hover > span .border:before, #cabecalho > .menu li a:focus > span .border:before {
  transform: scaleX(1); 
}
#cabecalho > .menu li.active a {
  background: transparent; 
}
#cabecalho > .menu li.active a > span .border {
  background: #FBB040; 
}
 
.container{
	margin-top: 60px
}
		</style>
	</head>
	<body>
	<header id="cabecalho">
	<img id="logo" src="img/logo.jpg" width="60" height="60">
    <hr><nav  class="menu">
      <ul>
            <li><a href="index.php"><span>Principal <span class="border"></span></span></a></li>
            <li><a href="#"><span>A Empresa <span class="border"></span></span></a></li>
            <li><a href="#"><span>Serviços<span class="border"></span></span></a></li>
            <li><a href="#"><span>Frota<span class="border"></span></span></a></li>
            <li><a href="locacao.php"><span>Locação<span class="border"></span></span></a></li>
            <li><a href="#"><span>Dúvidas<span class="border"></span></span></a></li>
            <li><a href="#"><span>Contato<span class="border"></span></span></a></li>
        </ul> 
    </nav>
</header>


		                          	<div class="card card-container">
				<img id="profile-img" class="profile-img-card" src="img/usuario.jpg" />
				<p id="profile-name" class="profile-name-card"></p>
				<form class="form-signin">
					<input type="text" id="inputName" class="form-control" placeholder="Nome" required autofocus>
					<input type="text" id="inputTelefone" class="form-control" placeholder="Telefone" required>
					<input type="text" id="inputName" class="form-control" placeholder="Endereço" required>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
					<input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
					<div id="remember" class="checkbox">
						<label>
							<input type="checkbox" value="termos"> Aceito os termos de contrato
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastrar</button>
				</form>
			</div>
		

		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>