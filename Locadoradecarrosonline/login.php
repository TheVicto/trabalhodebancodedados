
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administração</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
</head>
  <body>

    <div class="row">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body ">

          <form action="vlogin.php" method="POST">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email"  id="email" placeholder="Email">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
            </div>

            <div class="form-group">
              <div class="form-check">
                  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">  Lembrar-me  </label>
              </div>
            </div>

              <input class="btn btn-primary" value="Enviar" type="submit"> 
            
        
          </form>


          <div class="text-center">
            <a class="d-block small mt-3" href="cadrasto.php">Cadraste-se</a>
            <a class="d-block small" href="admin/Alogin.php">Administrador</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
