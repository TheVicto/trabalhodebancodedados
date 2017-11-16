-<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<style type="text/css">
		* { margin: 0 auto; padding: 0 }
		body {background: #EEE}
		input { margin-top: 5px; }
	</style>
</head>
<body>
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