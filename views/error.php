<?php (TEMPLATE)::header();?>
    <body>
      <div id="mySidenav" class="sidenav animatedParent">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <p class="animated bounceInRight delay-250"><a href="#">HOME</a></p>
         <p class="animated bounceInRight delay-500"><a href="#photos">Mis preferidas</a></p>
         <p class="animated bounceInRight delay-750"><a href="#about">Sobre mi</a></p>
         <p class="animated bounceInRight delay-1000"><a href="#galerias">Otras Galerias</a></p>
         <p class="animated bounceInRight delay-1000"><a href="/blog/list">BLOG</a></p>
         <div id="social-media-icons">
           <a href="https://www.facebook.com/oscar.sanchezmartos" target="_blank"><i class="fa fa-facebook-square"></i></a>
           <a href="https://www.instagram.com/oscar_sanchez_photo/" target="_blank"><i class="fa fa-instagram"></i></a>
         </div>
        </div>

        <!-- Use any element to open the sidenav -->
        <div class="opennav" id='opennav'>
          <span  onclick="openNav()">&#9776;</span>
        </div>


        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">
          <div class="about animatedParent" id='about'>
            <figure class="aboutimage">
             <img src="/img/fulls/om<?=rand(1,12);?>.jpg" class="animated fadeIn" style="width:80%"/>
            </figure>
            <h1 class="animated fadeIn delay-500">Error</h1>
            <p class="animated fadeIn delay-1000" style="color:white">Error en la operación solicitada, pero espero que te guste esta foto</p>
        		<p class='error'><?=$mensaje?></p>
        		<div class="centrado">
        			<a href="/">Volver a la portada</a>
        		</div>
        		<br>
          </div> <!--cierre de main -->

    		<?php
    		  (TEMPLATE)::footer();
    		?>
        <!-- COOKIES -->
        <div id="cajacookies">
          <p><button onclick="aceptarCookies();" class="pull-right"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</button>
          Éste sitio web usa cookies, si permanece aquí acepta su uso.
          Puede leer más sobre el uso de cookies en nuestra <a href="/blog/politicaPrivacidad">política de privacidad</a>.
          </p>
        </div>
      </div> <!--cierre de main -->
    	</body>
      <script src="\views\js\script2.js"></script>
      <script src="\views\js\css3-animate-it.js"></script>

    </html>
