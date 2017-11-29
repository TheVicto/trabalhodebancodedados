<?php
error_reporting(0);
session_start();

if($_GET['Sair'] == 'sair'){

  unset($_SESSION['nome']);
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <link rel="stylesheet"  href="css/style.css"/>
 <link rel="stylesheet" type="text/css" href="bootstrap.reboot.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/glyphocons-halfliengs-regular.ttf">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <script type="text/javascript" src="js/bootstrap.min.js.map" > </script>
  <script type="text/javascript" src="js/bootstrap.popup.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<title>Locadora de Veículos</title>

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
                      <a href="servico.php">
                        <span>Serviços<span class="border"></span></span>
                      </a>
                    </li>
                    <li>
                      <a href="frota.php">
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

                  <?php
                  if($_SESSION['nome']){

                    echo ' <li>
                       <a href="cadrasto.php"><span class="glyphicon glyphicon-user"></span>'.$_SESSION['nome'].'</a>
                    </li>
                      <li>
                       <a href="?Sair=sair"><span class="glyphicon glyphicon-log-in"></span> Sair</a>
                     </li>';
                  }else{

                    echo ' <li>
                       <a href="cadrasto.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>
                      <li>
                       <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                     </li>';

                  }
                  ?>
                      
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
<hr>
 <a name="empresa"></a>
 <div class="row text-center">
  <div class="col-md-8 col-md-offset-2">

     <h2 class="fh5co-section-lead">A Empresa</h2>
       <h3 class="fh5co-section-sub-lead">
          <p style="text-align:justify;">

            <p>A Empresa no presta serviços de locação de veículo em todo estado do Ceara e na Cidades do estado Rio Grande do Norte. Atua no seguimento,locação de veículo,transporte, vans, carro executivo e motoristas
            </p>

       </p>
   </h3>
  <hr>
<p>
          <iframe width="843" height="480" src="https://www.youtube.com/embed/cL9hr8caD9Y" frameborder="0" allowfullscreen></iframe>
        </p>
        </div>
<hr>

<div class="fh5co-spacer fh5co-spacer-md"></div>
  
  <a name="servico"></a>
   <div class="row text-center">
      <div class="col-md-8 col-md-offset-2">
        <hr>
        <h2 class="fh5co-section-lead">Nossos Serviços</h2>
      </div>

         <div class="fh5co-spacer fh5co-spacer-md"></div>
   </div>
      
       <div class="row">
           <div class="col-md-6 col-sm-6">
             <div class="fh5co-feature no-border">
                 <div class="fh5co-feature-icon to-animate">

                    <i class="icon-clock2"></i>
       </div>
                 <div class="access_time" id="glyphicon-time">
                    <h4>Transporte viagens / eventos / city tour</h4>
                       <p><p><span style="font-size:14px"><span style="color:#000000">“Viajar é sempre bom, mas tão importante quanto o lugar é como chegar lá...”. Nada melhor ...</p>
                           <p><a href="#">Saiba mais</a></p>
               </div>
          </div>
                      <div class="fh5co-feature no-border">
                        <div class="fh5co-feature-icon to-animate">
                           <i class="icon-bag"></i>
                       </div>

                      <div class="fh5co-feature-text">
                         <h4>Transporte Executivo, Serviço à Disposição e Translado</h4>
                          <p><p><span style="color:#000000"><span style="font-size:14px">Tranquilidade - Você não precisa se preocupar com as condições do trânsito e do tempo</p>
                         <p><a href="#">Saiba mais</a></p>
                      </div>
                    </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                    <div class="fh5co-feature no-border">
                    <div class="fh5co-feature-icon to-animate">
                    <i class="icon-user"></i>
                    </div>

                    <div class="fa fa-user">
                              <h4>Transporte de funcionários</h4>
                                <p><div><span style="color:#000000"><span style="font-size:14px">Quando o assunto é Transporte de Funcionários a solução mais inteligente é o fretamento</p>
                              <p><a href="#">Saiba mais</a></p>
                    </div>
                 </div>
                  <div class="fh5co-feature no-border">
                   <div class="fh5co-feature-icon to-animate">
                     <i class="icon-users"></i>
                   </div>

               <div class="fa fa-users">
                    <h4>Terceirização (Compra x Locação)</h4>
                         <p><p><span style="color:#000000"><span style="font-size:14px">Seu enfoque é exclusivamente financeiro e totalmente compreensível, comparando objetivamente o fluxo de caixa </p>
                         <p><a href="#">Saiba mais</a></p>
               </div>
         </div>
    </div>
</div>

           <div class="row">
               <div class="col-md-8 col-md-offset-2 text-center">
                  <a href="servico.php" class="btn btn-outline">Veja todos os serviços</a>
                </div>
              </div>
            </div>
          </div>

    <div class="fh5co-bg-section" style="background-image: url(images/slide_2.jpg); background-attachment: fixed;">
        <div class="fh5co-overlay"></div>
        <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="fh5co-hero-wrap">
        <div class="fh5co-hero-intro text-center">

              <a href="locacao.php" class="btn btn-danger">Tabela de preços de Locação de Veículos</a>
                <a href="duvida.php" class="btn btn-primary">Dúvidas Frequentes</a>
           </div>
         </div>
       </div>
    </div>
  </div>
</div>


<div class="container" id="frota">
                    <div class="row text-left">
                        <div class="col-md-8">
                            <h2 class="fh5co-section-lead">Nossa Frota</h2>
                            <h3 class="fh5co-section-sub-lead"><p>Segue alguns dos ve&iacute;culos que temos em nossa frota de carros e vans.</p>
</h3>
                        </div>
                        <div class="fh5co-spacer fh5co-spacer-md"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 col-sm-12 col-xs-12 col-xxs-12 fh5co-mb30">
                                <div class="fh5co-product">
                                    <img src="img/20160803070831.jpg" alt="Carro executivo - Civic" class="img-responsive img-rounded to-animate" style="width: 250px; height: 180px;">
                                    <h4><a class='fancybox' href='img/20160803070831.jpg' data-fancybox-group='gallery'>Carro executivo - Civic</a></h4>
                                </div>
                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12 col-xxs-12 fh5co-mb30">
                                <div class="fh5co-product">
                                    <img src="img/20160803070843.jpg" alt="Carro executivo - Corolla" class="img-responsive img-rounded to-animate" style="width: 250px; height: 180px;">
                                    <h4><a class='fancybox' href='img/20160803070843.jpg' data-fancybox-group='gallery'>Carro executivo - Corolla</a></h4>
                                </div>
                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12 col-xxs-12 fh5co-mb30">
                                <div class="fh5co-product">
                                    <img src="img/20160803071202.jpg" alt="Carro executivo - Fusion" class="img-responsive img-rounded to-animate" style="width: 250px; height: 180px;">
                                    <h4><a class='fancybox' href='img/20160803071202.jpg' data-fancybox-group='gallery'>Carro executivo - Fusion</a></h4>
                                </div>
                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12 col-xxs-12 fh5co-mb30">
                                <div class="fh5co-product">
                                    <img src="img/20160804063522.jpg" alt="Van" class="img-responsive img-rounded to-animate" style="width: 250px; height: 180px;">
                                    <h4><a class='fancybox' href='img/20160804063522.jpg' data-fancybox-group='gallery'>Van</a></h4>
                                </div>
                            </div>
                                    </div>
                </div>

        </div>
        
        <div class="col-md12">
        <h3>Maps</h3>
        
        <div id='gmap_canvas' style='height:440px;width:100%;'></div>
       
        </div>
        <!-- mapa -->
        <footer id="fh5co-footer">

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

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Main JS -->
        <script src="js/main.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <script type='text/javascript'>
        	function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(-6.0478442,-38.4645557),
        		mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), 
    myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-6.045418923532541,-38.46295419790039)});
    infowindow = new google.maps.InfoWindow({content:'<strong>Locadora de Carros Online</strong><br>Pereiro, CE<br>'});
    google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}
    google.maps.event.addDomListener(window, 'load', init_map);
  </script>
</body>	
</html>