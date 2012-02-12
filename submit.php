<?
include 'conexion.php';


$sql = "INSERT INTO registro_user (name, email, cedula, nacimiento, telefono, actividad, genero) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[cedula]', '$_POST[nacimiento]', '$_POST[telefono]', '$_POST[actividad]', '$_POST[genero]')";


//echo $sql;

mysql_query($sql) or die ("no inserto");
?>

<!DOCTYPE HTML>
<html lang="en-us" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta property="og:title" content="Altagracia.co | Regístrese para recibir premios y tragos GRATIS!" />
  <meta property="og:type" content="bar" />
  <meta property="og:url" content="http://altagracia.co" />
  <meta property="og:image" content="http://altagracia.co/img/logo.png" />
  <meta property="og:site_name" content="Altagracia.co" />
  <meta property="fb:admins" content="741061761" />
  <meta http-equiv="keywords" content="Altagracia bar shots parque lleras medellin colombia">
  <meta http-equiv="description" content="Salud, Vida & Altagracia | Altagracia.co">
  <link rel="shortcut icon" href="http://altagracia.co/img/favicon.ico">
  <link rel="apple-touch-icon" href="http://altagracia.co/img/apple-touch-icon.png">


    <title>Salud, Vida & Altagracia | Altagracia.co</title>
    
    <link href="js/alta-form.css" media="screen" rel="stylesheet"/>
    <link href="js/alta.uni-form.css" title="Default Style" media="screen" rel="stylesheet"/>
    <link href="js/altagracia.css" media="screen" rel="stylesheet"/>
    
    <!-- Scripts & CSS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.altagracia.co/js/uni-form-validation.jquery.js" charset="utf-8"></script>
    <script src="js/modernizr-1.7.min.js"></script>
    <script src="http://cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js"></script>
    
    
<script>
      $(function(){
        $('form.uniForm').uniform({
          prevent_submit : true
        });
      });
    </script>

  </head>

  <body>
  <div class="wraper">
  <div id="logotipo"> <a href="http://altagracia.co"><img src="img/logo.png" alt="Salud, Vida & Altagracia"/></a>    </div>
  
  <form action="#" class="uniForm" id="contact-form" name="contact-form">
      
      <fieldset>
      	<div align="right"><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://altagracia.co" data-text="Altagracia.co | Regístrese para recibir premios y tragos GRATIS!" data-count="none" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://altagracia.co" layout="button_count" show_faces="true" width="50" font="trebuchet ms"></fb:like></div>
        <h3 style="padding-left:100px;">Gracias por Registrase en <a href="http://altagracia.co">Altagracia.co</a><br><br>
        	Para reclamar <a class="shots" border="none" href="http://www.facebook.com/altagraciamedellin">SHOTS GRATIS</a> es indispensable presentar tu Cedula el Viernes 11 de Marzo<br>
        	Altagracia - Cra 35 A # 8A -73 / Medellin<br><br>
        	Salud, Vida & AltaGracia!</h3>
        	</fieldset>
        	
    	</form>
        	
    	<div id="footer">
    		<p><img src="img/banner.png" width="500" height="76"><br>
        <br>
        <a href="http://altagracia.co">Altagracia.co</a>  |  info@altagracia.co</p>
      </div>
  </div>
  </body>
	
        	
        	