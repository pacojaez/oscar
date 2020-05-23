<?php (TEMPLATE)::header();?>
    <body>
      <div id="mySidenav" class="sidenav animatedParent">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <p class="animated bounceInRight delay-250"><a href="#">HOME</a></p>
         <p class="animated bounceInRight delay-500"><a href="#photos">Mis preferidas</a></p>
         <p class="animated bounceInRight delay-750"><a href="#about">Sobre mi</a></p>
         <p class="animated bounceInRight delay-1000"><a href="#galerias">Otras Galerias</a></p>
         <p class="animated bounceInRight delay-1000"><a href="/blog/list">BLOG</a></p>
         <div id="social-media-icons" class="animatedParent">
           <a href="https://www.facebook.com/oscar.sanchezmartos" target="_blank"><i class="fa fa-facebook-square animated bounceInRight delay-250"></i></a>
           <a href="https://www.instagram.com/oscar_sanchez_photo/" target="_blank"><i class="fa fa-instagram animated bounceInRight delay-250"></i></a>
         </div>
         <div class="animatedParent">
         <p class='copy animated fadeIn delay-1500'>&copy 2020 Oscarmartos.com</p>
         </div>
      </div>

        <!-- Use any element to open the sidenav -->
        <div class="opennav" id='opennav'>
          <span  onclick="openNav()">&#9776;</span>
        </div>


        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">
          <!-- IMAGEN DE FONDO-->
          <div class="portada" style="background-image: url(/img/fulls/om<?=rand(1,12);?>.jpg);">
            <div class="home-title" id='home'>
              <div class="logo animatedParent">
                <img class='animated fadeIn delay-1000' src="img/logo.png" alt=""/>
              </div>
            </div>
          </div>
          <!-- PHOTO GALLERY -->
          <section class="photo-gallery animatedParent" id='photos'>
            <div class="row text-center">
              <h1 class="phototitle">Mis fotos preferidas</h1>
            </div>
              <div class="row favorites">
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-250" src="img/fulls/om2.jpg" alt="imagen01" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-1500" src="img/fulls/om3.jpg" alt="imagen01"onclick="ver(this);"/>
                  <img class="animated bounceIn delay-1000" src="img/fulls/om4.jpg" alt="imagen01" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-500" src="img/fulls/om5.jpg" alt="imagen01" onclick="ver(this);"/>
                </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-500" src="img/fulls/om6.jpg" alt="imagen01" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-1000" src="img/fulls/om7.jpg" alt="imagen01" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-250" src="img/fulls/om8.jpg" alt="imagen01" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-1500" src="img/fulls/om9.jpg" alt="imagen01" onclick="ver(this);"/>
                </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-1000"src="img/fulls/om2.jpg" alt="" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-250" src="img/fulls/om3.jpg" alt="" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-500" src="img/fulls/om8.jpg" alt="" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-1000" src="img/fulls/om4.jpg" alt="" onclick="ver(this);"/>
                </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-1500" src="img/fulls/om1.jpg" alt="" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-500" src="img/fulls/om5.jpg" alt="" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-1000" src="img/fulls/om3.jpg" alt="" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-250" src="img/fulls/om9.jpg" alt="" onclick="ver(this);"/>
                </div>
              </div>
              <hr>
            </section>
            <!-- GALLERIAS -->
            <!-- PHOTO GALLERY -->
            <section class="photo-gallery animatedParent" id='galerias'>
              <div class="row text-center animatedParent">
                <h1 class="phototitle animated bounceInUp">Galerias</h1>
              </div>
              <div class="row">
                <div class="column animatedParent">
                  <div class="containergaleria animated bounceInDown">
                    <a href="/blog/montana">
                    <img src="img/fulls/om4.jpg" alt="MONTAÑA" class="imagegaleria">
                    <div class="overlay">
                      <div class="titulogaleria">MONTAÑA</div></a>
                    </div>
                  </div>
                  <div class="containergaleria animated bounceInDown">
                    <a href="/blog/noche">
                      <img src="img/fulls/om11.jpg" alt="SUBACUATICA" class="imagegaleria">
                      <div class="overlay">
                        <div class="titulogaleria">SUBACUATICA</div></a>
                      </div>
                  </div>
                </div>
                <div class="column animatedParent">
                  <div class="containergaleria animated bounceInDown" data-id='3'>
                    <a href="/blog/agua">
                    <img src="img/fulls/om3.jpg" alt="AGUA" class="imagegaleria">
                    <div class="overlay">
                    <div class="titulogaleria">AGUA</div></a>
                    </div>
                  </div>
                </div>
                <div class="column animatedParent">
                  <div class="containergaleria animated bounceInDown" data-id='3'>
                    <a href="/blog/tormentas">
                    <img src="img/fulls/tormenta03.jpg" alt="TORMENTAS" class="imagegaleria">
                    <div class="overlay">
                      <div class="titulogaleria">TORMENTAS</div></a>
                    </div>
                  </div>
                </div>
                <div class="column animatedParent">
                  <div class="containergaleria animated bounceInDown" data-id='3'>
                    <a href="/blog/subacuatica">
                    <img src="img/fulls/om13.jpg" alt="NOCHE Y ESTRELLAS" class="imagegaleria">
                    <div class="overlay">
                      <div class="titulogaleria"> NOCHE Y ESTRELLAS</div></a>
                    </div>
                  </div>
                </div>
              </div>
              </section>
          <!-- ABOUT SECTION  -->
          <div class="about animatedParent" id='about'>
            <figure class="aboutimage">
            <img src="img/perfil.jpg" class="animated fadeIn delay-500"/>
            </figure>
            <h1 class="animated fadeIn delay-500">MI MANIFIESTO</h1>
            <p class="animated fadeIn delay-1000">La dificultad de una foto, es tal vez, lo que me hace adicto a la fotografía. Hay que saber crecer y evolucionar en todo
            momento y seguir avanzando para conseguir imágenes únicas, y a ser posible, asombrosas.
            Ser fotógrafo de Naturaleza es el estilo de vida que me gusta y disfruto, quizás sea una mezcla de pasión y obsesión.
            Dentro de mí, siento un deseo insaciable de explorar lugares con mi cámara, para tratar de captar ese momento,
            ese instante que encierra el alma de cada lugar.
            Cuando estoy fotografiando, no suelo pensar en nada simplemente lo hago, en definitiva,
            todo pasa por concentrarse y vivir ese instante.
            La fotografía ha cambiado mi percepción del mundo, mis ojos siempre se ven atraídos por la luz cambiante.</p><br>
            <p class="animated fadeIn delay-1500">Mi punto de vista se basa en profundidades, en capas y dimensiones. En mi búsqueda de nuevas aventuras,
            me veo descolgándome por precipicios, nadando por  ríos, avanzando bajo la lluvia,
            caminando sobre la nieve y el hielo, recorriendo desiertos y gozando de las montañas y el mar,
            y todo con la esperanza y el deseo de captar algo que sea único.</p><br>
            <p class="animated fadeIn delay-2000">      Con esos sueños, viajes y aventuras, sigo dando forma a mi vida y a mi persona.
            Lo que me gusta de la fotografía es la oportunidad que me da debexponerme al mundo y a las situaciones,
            sacar una foto y poder expresarla de una forma propia, de una manera que quizá nadie haya pensado antes,
            creo que es la euforia y la emoción de crear una imagen que no solo me inspire a mí, sino con la que confió
            y deseo inspirar a otras personas. Quiero ver que soy capaz de no solo crear una foto sino también una
            interpretación de lo que veo. En la fotografía de paisajes, todo gira en torno a la luz, y una buena luz acentúa el paisaje
            y le dará ese aspecto tridimensional. Por eso intento aprovechar la mejor luz que pueda obtener de la naturaleza.
            No creo que sea totalmente importante lo que estés fotografiando,
            porque la fotografía se basa en composición y en comunicar,
            el hecho de que sea fotografía de Naturaleza no impide que puedas crear una obra de arte al mismo
             tiempo que captas lo que nos ofrece el mundo.
            </p>
          </div>
          <!-- COOKIES -->
          <div id="cajacookies">
            <p><button onclick="aceptarCookies();" class="pull-right"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</button>
            Éste sitio web usa cookies, si permanece aquí acepta su uso.
            Puede leer más sobre el uso de cookies en nuestra <a href="/blog/politicaPrivacidad">política de privacidad</a>.
            </p>
          </div>
        </div><!-- CIERRE DE MAIN -->
  </body>
  <script src="\views\js\script2.js"></script>
  <script src="\views\js\css3-animate-it.js"></script>
</html>
