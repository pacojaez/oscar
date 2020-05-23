<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulario de contacto</title>
		<link rel="stylesheet" type="text/css" href="<?=CSS_FILE?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">
    <!--<link rel="stylesheet" href="../../css/ddpp.css" type="text/css"/>-->
    <style type="text/css" media="all">@import "css/ddpp.css";</style>
    <style type="text/css" media="all">@import "/css/semantic.mini.css";</style>
		<script src="https://www.google.com/recaptcha/api.js"></script>
	</head>
	<body>
		<?php
		  (TEMPLATE)::header("Galleria de prueba");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>
    <div id="sampleWorksModal" class="ui large image modal">
       <i class="ui close icon"></i>
       <img id="sampleWorkModalImg" src="" alt="David Diaz Sample Works">
     </div>

     <div id="mySampleWorks"></div>
     <div id="sampleWorksSection" class="ui stackable grid">
       <div class="ui one column row">
         <div class="ui center aligned column">
           <p id="aboutMeTitle" class="ui dividing header">My Sample Works</p>
         </div>
       </div>

       <div class="ui four column row sampleWorksCols">
         <div class="ui column sampleWorksCols">
           <img class="ui large image" id="resize" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work17.jpg" alt="David Diaz Sample Works" height="100">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work2.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work3.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work5.jpg" alt="David Diaz Sample Works">
         </div>
       </div>

       <div class="ui four column row sampleWorksCols">
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work4.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work7.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work8.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work9.jpg" alt="David Diaz Sample Works">
         </div>
       </div>

       <div class="ui four column row sampleWorksCols">
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work13.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work15.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work14.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work16.jpg" alt="David Diaz Sample Works">
         </div>
       </div>

       <div class="ui four column row sampleWorksCols">
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work6.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work10.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work11.jpg" alt="David Diaz Sample Works">
         </div>
         <div class="ui column sampleWorksCols">
           <img class="ui large image" onclick="showSampleWorkImg(this)" src="/img/gallery/prueba/sample-work12.jpg" alt="David Diaz Sample Works">
         </div>
       </div>
     </div>

     <?php
       (TEMPLATE)::footer();
     ?>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script src="../js/ddpp.js"></script>

</html>
