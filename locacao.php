<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

 <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <script src="https://use.fontawesome.com/bc520d82be.js"></script>
    <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<title>Locadora de Veículos</title>


    <script type="text/javascript">
	
    var num1 = 0;
    var num2 = 0;
    var num3 = 0;
    var num4 = 0;
    var num5 = 0;
    
    function Reset(){
        calc.visor.value = "";
        num5 = 0;num1 = 0;num2 = 0;num3 = 0;num4 = 0;
    }
    
    function Btn(num){
        if(num4==0){
            calc.visor.value +=num;
        } else if (num4==1){
            calc.visor.value = "";
            calc.visor.value +=num;
            num4=0;
        }
    }
    
    function Op(op){
        if(num5 == 0){
            num1 = calc.visor.value;
            calc.visor.value = "";
            num5 = parseInt(op);
        }else{
            num2 = calc.visor.value;
            if(num5==1){
                num3 = parseFloat(num1) + parseFloat(num2);
            }else if(num5==2){
                num3 = parseFloat(num1) - parseFloat(num2);
            }else if(num5==3){
                num3 = parseFloat(num1) / parseFloat(num2);
            }else if(num5==4){
                num3 = parseFloat(num1) * parseFloat(num2);
            }
            calc.visor.value = ""+num3;
            num5 = 0;num1 = 0;num2 = 0;num3 = 0;num4=1;
        }
    }
    
    function Igual(){
        num2 = calc.visor.value;
        if(num5==1){
            num3 = parseFloat(num1) + parseFloat(num2);
        }else if(num5==2){
            num3 = parseFloat(num1) - parseFloat(num2);
        }else if(num5==3){
            num3 = parseFloat(num1) / parseFloat(num2);
        }else if(num5==4){
            num3 = parseFloat(num1) * parseFloat(num2);
        }
        calc.visor.value = ""+num3;
        num5 = 0;num1 = 0;num2 = 0;num3 = 0;num4 = 1;
    }
        
</script>
<style type="text/css">
	fieldset{
		width: 126px;
	
        background-color: rgb(200, 200, 200);
        border: solid black;
        margin-left: 50%;
    }
	#visor{
        width: 120px; height: 40px; color:rgb(200, 200, 200); font: 13px Arial; font-weight: bold;text-align: right;
        
	}
    input{
        width: 26px; height: 26px; font: 13px Arial; font-weight: bold;
    }
    #reset{
        width: 100%; height: 26px; font: 13px Arial; font-weight: bold; background:rgb(200,200,200); color: black;
        text-align: center;
    }
    h4{margin-left: 40%}
    
</style>
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

<div class="container" style="margin: center;">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/neggocio.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/sw4.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/Hilux.jpg" alt="New york" style="width:100%;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 


<h3>Escolha seu Ve&iacute;culo</h3>


<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td>Tarifas sujeitas a altera&ccedil;&otilde;es sem aviso pr&eacute;vio.</td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" style="width:99%">
				<tbody>
					<tr>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
				<tbody>
					<tr>
						<td>&nbsp;</td>
						<td>
						<form  id="form1" method="post" name="form1">
						<table border="1" cellpadding="0" cellspacing="0" style="width:100%">
							<tbody>
								<tr>
									<td rowspan="2">
									<p style="text-align:center"><span style="color:#000000"><strong><span style="font-size:16px">Grupo</span></strong></span></p>
									</td>
									<td rowspan="2" style="text-align:center"><span style="color:#000000"><strong><span style="font-size:16px">Modelo</span></strong></span></td>
									<td style="text-align:center"><span style="color:#000000"><strong><span style="font-size:16px">Di&aacute;rias</span></strong></span></td>
									<td style="text-align:center"><span style="color:#000000"><strong><span style="font-size:16px">Di&aacute;rias</span></strong></span></td>
									<td style="text-align:center"><span style="color:#000000"><strong><span style="font-size:16px">Di&aacute;rias</span></strong></span></td>
									<td style="text-align:center"><span style="color:#000000"><strong><span style="font-size:16px">Di&aacute;rias</span></strong></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="color:#000000"><span style="font-size:16px"><strong>1 a 6</strong></span></span></td>
									<td style="text-align:center"><span style="color:#000000"><span style="font-size:16px"><strong>7 a 14</strong></span></span></td>
									<td style="text-align:center"><span style="color:#000000"><span style="font-size:16px"><strong>15 a 29</strong></span></span></td>
									<td style="text-align:center"><span style="color:#000000"><span style="font-size:16px"><strong>30 ou +</strong></span></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>A&nbsp;</strong></span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">P&aacute;lio/celta / Gol 1.0 (sem ar condic. 2 portas)</span></strong></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 40,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 52,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 55,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 65,00</span></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>B</strong>&nbsp;</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">P&aacute;lio/Celta/Gol 1.0(sem ar condic.4portas)</span></strong></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 46,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 54,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 59,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 72,00</span></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>C</strong>&nbsp;</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">P&aacute;lio/celta/Gol 1.0( ar condicionado 2 portas)</span></strong></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 49,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 59,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 69,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 79,00</span></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>D&nbsp;</strong></span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">P&aacute;lio/celta/Gol 1.0/4 portas com ar condic.</span></strong></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 56,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 64,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 72,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 83,00</span></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>E&nbsp;</strong></span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">P&aacute;lio 1.0 ar condic.4portas,dir.hidr,vidr.trav.eletr.</span></strong></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 60,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 65,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 72,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 95,00</span></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>F</strong>&nbsp;</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">Prisma 1.4 ar condic.4portas,dir hidr.trio el&eacute;trico</span></strong></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 72,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 80,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 113,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 130,00</span></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>G</strong>&nbsp;</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">Doblo 1.8 ar condic.07passageiros</span></strong></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 100,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 150,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 200,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 246,00</span></span></td>
								</tr>
								<tr>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>H</strong>&nbsp;</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">Zafira Elegance Automatic</span></strong></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 200,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 245,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 255,00</span></span></td>
									<td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">R$ 275,00</span></span></td>
								</tr>
							</tbody>
						</table>
						</form>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
			<td>
		  <!-- <fieldset >
				<form name="calc">
				<input type="text" name="visor" maxlength="16" id="visor" value="" readonly>
        
				<input type="button" id="reset" onclick="Reset()" name="" value="CE">
				<p></p>
				<input type="button" name="" value="7" onclick="Btn(7)">
				<input type="button" name="" value="8" onclick="Btn(8)">
				<input type="button" name="" value="9" onclick="Btn(9)">
				<input type="button" name="" value="+" onclick="Op(1)">
				<p></p>
				<input type="button" name="" value="4" onclick="Btn(4)">
				<input type="button" name="" value="5" onclick="Btn(5)">
				<input type="button" name="" value="6" onclick="Btn(6)">
				<input type="button" name="" value="-" onclick="Op(2)">
				<p></p>
				<input type="button" name="" value="1" onclick="Btn(1)">
				<input type="button" name="" value="2" onclick="Btn(2)">
				<input type="button" name="" value="3" onclick="Btn(3)">
				<input type="button" name="" value="/" onclick="Op(3)">
				<p></p>
				<input type="button" name="" value="." onclick="calc.visor.value +='.'">
				<input type="button" name="" value="0" onclick="Btn(0)">
				<input type="button" name="" value="=" onclick="Igual()">
				<input type="button" name="" value="X" onclick="Op(4)">
				<p></p>
            
			</form>
		</fieldset>         -->
    
			</td>
			
		</tr>

	</tbody>
</table>

<!--     <?php 
//require("conexao.php");
 ////////////////////////////////////////////////////////////////////////////////////////  a// = $_GET[//'modelocar'];14:38 24/11/2017

//if(isset($_GET['$busca'])){
  $sql// = "SELECT * FROM tbcarro WHERE modelodocarro LIKE '%".$busca."%'";
}//else{
  $sql// = "SELECT * FROM tbcarro WHERE modelodocarro LIKE '%".$busca."%'";
}

$query// = mysqli_query($con, $sql);
// $resul = mysqli_num($query);

?>

    <input type="text" name="busca" value="<?php echo $busca?>">
 <footer id="fh5co-footer">
  <?php

while($dados = mysqli_fetch_assoc($query)){
  echo "<h4>".$dados['modelodocarro']."</h4>";
 //echo "<img src='images/".$dados['imagem']."'/>";
 echo "<h5>classe: ".$busca['classedocarro']."</h5>";
 //echo "<a  class='btn' href='detalhes.php?id=".$dados['idcarro']."'>+ Detalhes</a>";
 //echo "</div>";
}
?> -->

<hr>
<br>
<form method="get">
     <input type="button" name="" value="Palio 2 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Palio 4 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Palio 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Palio 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Palio 2 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Palio 4 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <br>
     <input type="button" name="" value="Celta 2 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Celta 4 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Celta 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Celta 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Celta 2 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Celta 4 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <br>
     <input type="button" name="" value="Gol 2 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Gol 4 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Gol 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Gol 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Gol 2 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Gol4 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">    
     <br>
     <input type="button" name="" value="Prisma 2 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Prisma 4 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Prisma 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Prisma 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Prisma 2 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Prisma 4 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <br>
     <input type="button" name="" value="Doblo 2 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Doblo 4 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Doblo 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Doblo 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Doblo 2 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Doblo 4 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <br>
     <input type="button" name="" value="Zafira 2 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Zafira 4 portas sem ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Zafira 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Zafira 2 portas com ar" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Zafira 2 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <input type="button" name="" value="Zafira 4 portas com ar.dir.hidr,vidr.trav.eletr" style="width: auto; font-size: 11px">
     <br>
</form>


<img id="icone" src="img/logo.jpg" style="width: 160px; height: 100px">
<form method="get">
  <input type="text" id="modelocar" name="modelocar" placeholder="modelo de carro desejado" style="width: 12.2%">
  <input type="text" id="classcar" name="classcar" placeholder="classe do veiculo" style="width: 12.2%">
  <input type="" id="valordiaria" name="valordiaria" placeholder="valor a pagar por sua locaçao" style="width: 14%">
  <input type="submit" value="enviar" style="width: 5%">
  
</form>

    <div class="container">
        <div class="row">
           <footer id="fh5co-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-4">
                <div class="fh5co-footer-widget">
                    
                    <p>Empresa de transporte que oferece serviços executivos de transporte, locação de veículos de todas as categorias (compactos, executivo e de grupos).</p>
                </div>

              <div class="fh5co-footer-widget">
                  <p><i class="glyphicon glyphicon-earphone"></i> (88) 0800-0000</p>
                  <p><i class="fa fa-whatsapp"></i> (88) 9.99407250</p>
                  <p><i class=" glyphicon glyphicon-envelope"></i> amandardg32@gmail.com</p>
                   <p><i class="fa fa-map"></i> R. Projeta, 01 - Vila Cruz, Pereiro - CE, 63460-000</p>
              </div>
              <div class="fh5co-footer-widget">
                <ul class="fh5co-social">
                  <li><a href="#" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-6">
                <div class="fh5co-footer-widget top-level">
                    <h4 class="fh5co-footer-lead ">Navegação</h4>
                    <ul>
                        <li><a href="index.php">Página principal</a></li>
                        <li><a href="index.php#empresa">Empresa</a></li>
                        <li><a href="index.php#servico">Serviços</a></li>
                        <li><a href="index.php#frota">Frota</a></li>
                        <li><a href="locacao.php">Locação</a></li>
                        <li><a href="duvida.php">Principais Dúvidas</a></li>
                        <li><a href="contato.php">Fale Conosco</a></li>
                    </ul>
                </div>
            </div>

            <div class="visible-sm-block clearfix"></div>

            <div class="col-md-4 col-sm-6">
                <div class="fh5co-footer-widget top-level">
                    <h4 class="fh5co-footer-lead">Serviços</h4>
                    <ul class="fh5co-list-check">
                       <li class="fa fa-check-circle-o"><a href="#servico">Transporte viagens / eventos / city tour</a></li>
                        <li class="fa fa-check-circle-o"><a href="#servico">Transporte de funcionários</a></li>
                        <li class="fa fa-check-circle-o"><a href="#servico">Transporte Executivo, Serviço à Disposição e Translado</a></li>
                        <li class="fa fa-check-circle-o"><a href="#servico">Terceirização (Compra x Locação)</a></li>
                     </ul>
                </div>
            </div>
        </div>

        <div class="row fh5co-row-padded fh5co-copyright">
            <div class="col-md-5">
              <p><small>&copy;  Todos os direitos reservados 2005-2016.</small></p>
                
            </div>
        </div>
    </div>

</footer>
        
</body>	
</html>
<script type="text/javascript">
  var campo = document.getElementById('modelocar');

function mudaFoto (foto)
  {
    document.getElementById("icone").src = foto;
if (campo = palio) {
  foto = ('img/palio2.jpg');
}
  }

</script>