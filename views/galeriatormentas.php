<?php (TEMPLATE)::header();?>
    <body>
      <div id="mySidenav" class="sidenav animatedParent">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <p class="animated bounceInRight delay-250"><a href="/index">HOME</a></p>
         <p class="animated bounceInRight delay-500"><a href="/index#photos">Mis preferidas</a></p>
         <p class="animated bounceInRight delay-750"><a href="/index#about">Sobre mi</a></p>
         <p class="animated bounceInRight delay-1000"><a href="/index#galerias">Otras Galerias</a></p>
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
          <!-- PHOTO GALLERY -->
          <section class="photo-gallery animatedParent" id='photos'>
            <div class="row text-center">
              <h1 class="phototitle">TORMENTAS</h1>
              <h3 class="phototitle">Un subtitulo tu que escribes bien iría bien aqui</h3>
            </div>
              <div class="row">
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-250" src="/img/fulls/tormenta01.jpg" alt="montaña" onclick="ver(this);"/>
                </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-500" src="/img/fulls/tormenta02.jpg" alt="Mrs Stranger" onclick="ver(this);"/>
              </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-1000"src="/img/fulls/tormenta03.jpg" alt="Mrs Stranger" onclick="ver(this);"/>
              </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-1500" src="/img/fulls/tormenta04.jpg" alt="Mrs Stranger" onclick="ver(this);"/>
              </div>
              </div>
            </section>
            <!-- COOKIES -->
            <div id="cajacookies">
              <p><button onclick="aceptarCookies();" class="pull-right"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</button>
              Éste sitio web usa cookies, si permanece aquí acepta su uso.
              Puede leer más sobre el uso de cookies en nuestra <a href="politica.html">política de privacidad</a>.
              </p>
            </div>
        </div><!-- CIERRE DE MAIN -->
  </body>
  <script src="\views\js\script2.js"></script>
  <script src="\views\js\css3-animate-it.js"></script>
</html>
