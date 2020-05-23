<!DOCTYPE html>
<html>
  <head>
    <title>Oscar Sánchez Martos Photography</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="main2.css">
    <link rel="stylesheet" type="text/css" href="animations.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <body>
      <div id="mySidenav" class="sidenav animatedParent">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <p class="animated bounceInRight delay-250"><a href="index.html">HOME</a></p>
         <p class="animated bounceInRight delay-250"><a href="index.html#galerias">VOLVER A GALERIAS</a></p>
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
              <h1 class="phototitle">MONTAÑA</h1>
              <h3 class="phototitle">Un subtitulo tu que escribes bien iría bien aqui</h3>
            </div>
              <div class="row">
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-250" src="images/fulls/montaña01.jpg" alt="montaña" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-1500" src="images/fulls/montaña05.jpg" alt="This Is Irma"onclick="ver(this);"/>
                </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-500" src="images/fulls/montaña02.jpg" alt="Mrs Stranger" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-1000" src="images/fulls/montaña06.jpg" alt="People. Chaos. City" onclick="ver(this);"/>
                </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-1000"src="images/fulls/montaña03.jpg" alt="Mrs Stranger" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-250" src="images/fulls/montaña07.jpg" alt="People. Chaos. City" onclick="ver(this);"/>
                </div>
                <div class="column animatedParent">
                  <img class="animated bounceIn delay-1500" src="images/fulls/montaña04.jpg" alt="Mrs Stranger" onclick="ver(this);"/>
                  <img class="animated bounceIn delay-500" src="images/fulls/montaña08.jpg" alt="People. Chaos. City" onclick="ver(this);"/>
                </div>
              </div>
            </section>
        </div><!-- CIERRE DE MAIN -->
  </body>
  <script src="script2.js"></script>
  <script src="css3-animate-it.js"></script>
</html>
