<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="css/style.css">
<link rel="icon" type="img/jpg" href="imagens/ming.jpg">
<title>Pagina Principal</title>

<style type="text/css">

#slide{
  
  animation-name: muda;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  animation-delay: 1s

}

@keyframes muda {
  
    1%{background-image: url(imagens/car1.jpg);background-image: no-repeat;}
   12.5%{background-image: url(imagens/car2.jpg);background-image: no-repeat;}
   25%{background-image: url(imagens/car3.jpg);background-image: no-repeat;}
   37.5%{background-image: url(imagens/car4.jpg);background-image: no-repeat;}
   50%{background-image: url(imagens/car1.jpg);background-image: no-repeat;}
   72.5%{background-image: url(imagens/car2.jpg);background-image: no-repeat;}
   85%{background-image: url(imagens/car3.jpg);background-image: no-repeat;}
   97.5%{background-image: url(imagens/car4.jpg);background-image: no-repeat;}
}

#cabecalho {
  float: right;
  width: 100%;
  position: relative;
  position: absolute;
  z-index: 99;
  top: 0; 
}

#cabecalho > .menu {
  
  display: block;
  
  margin-bottom: 0;
  background: #fff;
  box-shadow: 0 0 5pt 0 rgba(0, 0, 0, 0.1);
  font-size: 8pt;
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
    left: 57%;
}

 #cabecalho > .menu li  {
    display: inline-block;
    background-color: rgba(215, 215, 215, 1 );
    padding: 8pt;
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


#slide {
  width: 450pt;
  height: 400pt;
  position: absolute; 
  border: 8px solid white;
  box-shadow: 1px 1px 4px;  
  z-index: 1;
  margin-top: 5%;
  margin-left: 34%
}
</style>

</head>
<script type="text/javascript">
  function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;

    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_:KEY";

    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
</script>
<body >
<header id="cabecalho">
    <nav  class="menu">
    	<ul>
            <li><a href="https://www.adventurelog.com.br/index.php"><span>Principal <span class="border"></span></span></a></li>
            <li><a href="https://www.adventurelog.com.br/index.php#empresa"><span>A Empresa <span class="border"></span></span></a></li>
            <li><a href="https://www.adventurelog.com.br/index.php#servico"><span>Serviços<span class="border"></span></span></a></li>
            <li><a href="https://www.adventurelog.com.br/index.php#frota"><span>Frota<span class="border"></span></span></a></li>
            <li><a href="https://www.adventurelog.com.br/locacao.php"><span>Locação<span class="border"></span></span></a></li>
            <li><a href="https://www.adventurelog.com.br/duvida.php"><span>Dúvidas<span class="border"></span></span></a></li>
            <li><a href="https://www.adventurelog.com.br/contato.php"><span>Contato<span class="border"></span></span></a></li>
        </ul>	
    </nav>
</header>
<div id="slide">
  
</div>

</body>	
</html>