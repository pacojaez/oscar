<!--
<!DOCTYPE html>
<html>
  <head>
    <title>Oscar Sánchez Martos Photography</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Oscar Sanchez Martos, fotógrafo."/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="\views\css\animations.css">
    <link rel="stylesheet" type="text/css" href="\views\css\blog.css">
		<link rel="stylesheet" type="text/css" href="\views\css\bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="" type="image/png">
  </head>
-->
<?php (TEMPLATE)::headerBlog();?>
    <body>
      <div id="mySidenav" class="sidenav animatedParent">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <p class="animated bounceInRight delay-250"><a href="/">HOME</a></p>
         <p class="animated bounceInRight delay-500"><a href="/#photos">Mis preferidas</a></p>
         <p class="animated bounceInRight delay-750"><a href="/#about">Sobre mi</a></p>
         <p class="animated bounceInRight delay-1000"><a href="/#galerias">Otras Galerias</a></p>
         <p class="animated bounceInRight delay-1000"><a href="/blog/list">BLOG</a></p>
         <div id="social-media-icons">
           <a href="https://www.facebook.com/oscar.sanchezmartos" target="_blank"><i class="fa fa-facebook-square"></i></a>
           <a href="https://www.instagram.com/oscar_sanchez_photo/" target="_blank"><i class="fa fa-instagram"></i></a>
         </div>
         <p class='copy animated bounceInRight delay-1000'>&copy 2020 Oscarmartos.com</p>
        </div>

        <!-- Use any element to open the sidenav -->
        <div class="opennav" id='opennav'>
          <span  onclick="openNav()">&#9776;</span>
        </div>


        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">
          <div class="header">
              <h2 class="blogtitle">My life. My Pictures</h2>
          </div>
        <!-- CONTENT -->
        <div class="row">
           <div class="leftcolumn">
             <div class='cardleft'>
               <div class="blog-post animatedParent" data-sequence='250'>
               <h2 class='blog-post-title animated bounceInDown delay-250' data-id='1'><?=$entrada->title?></h2>
                  <h5>published_at <?=$entrada->published_at?></h5>
                  <div class='post-img' style='height:100%;'>
                    <img src='/<?=$entrada->imagen?>' alt='<?=$entrada->title?>' class='animated bounceInUp delay-500' data-id='1'/>
                    <h4 class="blog-post-subtitle"><?=$entrada->subtitle?></h4>
                  </div>
                  <p class='blog-post-text' data-id='2'><?=$entrada->entrada?></p>
                </div>
              </div>
              <div class='cardleft'>
                <div class="blog-post">
                <h4 class='blog-post-title'>COMENTARIOS</h4>

                   <div class='post-img animatedParent' style='height:100%;'>
                     <?php if(empty($comments)){
                           echo "<p class='commentTitle'>NO HAY COMENTARIOS</p>";
                         }else {
                         foreach($comments as $comment){
                         echo "<p class='commentTitle animated bounceInLeft delay-500'>$comment->comment</p>
                               <p class='commentUser animated bounceInLeft delay-1000'>$comment->usuario</p>
                               <hr>";
                     }}?>
                     <div class="commentform row animatedParent">
                       <form method="post" action="/comment/store" id='comment-form'>
                         <legend class="commentlabel animated bounceInDown delay-500">Deja tus comentarios</legend>
                         <input type="hidden" value="<?= $entrada->id?>" name="id_entrada">
                         <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                         <p><?php $entrada->id ?></p>
                         <textarea class='commentinput' type="text" required name="comment" cols="40" rows="3" placeholder="Deja tu comentario"></textarea><br>
                         <input class='commentimput' type="text" name='usuario' required placeholder="Usuario"/><br>
                         <div class="g-recaptcha mb-2" data-sitekey="6LerG30UAAAAAIjT0fVGkXlPWDKUbPV-R1RKJzZn" data-callback='onSubmit' 
                              data-action='submit'></div>
                         <input type="submit" name="guardar" value="Enviar" class="btn btn-primary btn-user btn-block">
                       </form>
                     </div>

                   </div>
                 </div>
              </div>
            </div>
   <!-- COLUMNA DERECHA -->
    <div class="rightcolumn">
       <div class="cardright animatedParent">
       <h2>Search</h2>
       <form class="form-block my-2 my-lg-0 ml-3 animated bounceInRight delay-250" action='/blog/filtered' method='post'>
         <input class="form-control mr-sm-2" type="text" name='valor' placeholder="Search" aria-label="Search">
         <label class="ml-2">Campo:</label>
         <select name='campo' class="ml-2 form-control">
            <option value='title'
            <?php echo !empty($campo) && $campo=='title'? 'selected':'';?>
            >TITULO</option>
            <option value='subtitle'
            <?php echo !empty($campo) && $campo=='subtitle'? 'selected':'';?>
            >SUBTITULO</option>
            <option value='entrada'
            <?php echo !empty($campo) && $campo=='entrada'? 'selected':'';?>
            >ENTRADA</option>
        </select>
        <label class="ml-2">ORDENADO POR:</label>
        <select name='orden' class="ml-2 form-control">
           <option value='title'
           <?php echo !empty($orden) && $orden=='title'? 'selected':'';?>
           >TITULO</option>
           <option value='subtitle'
           <?php echo !empty($orden) && $orden=='subtitle'? 'selected':'';?>
           >SUBTITULO</option>
           <option value='entrada'
           <?php echo !empty($orden) && $orden=='entrada'? 'selected':'';?>
           >ENTRADA</option>
           <option value='created_at'
           <?php echo !empty($orden) && $orden=='created_at'? 'selected':'';?>
           >FECHA CREACIÓN</option>
         </select>
         <input type='radio' name='sentido' value='ASC' class="ml-2 form-control"
         <?php echo empty($sentido) || $sentido=='ASC'? 'checked':'';?>>
         <label class="ml-2 form-control">Ascendente</label>
         <input type='radio' name='sentido' value='DESC' class="ml-2 form-control"
         <?php echo !empty($sentido) && $sentido=='DESC'? 'checked':'';?>>
         <label class="ml-2 form-control">Descendente</label>
         <input class="btn btn-outline-primary ml-2 my-sm-0" type="submit" name="filtrar" value='SEARCH'/>
         <a href='/blog/show/<?=$entrada->id?>'><button type="button" class="btn btn-secondary ml-2 my-sm-0">QUITAR FILTROS</button></a>
       </form>
     <div class="card">
       <h3>CATEGORIAS</h3>
       <?php foreach($categories as $category) {
         echo "<a href='/blog/categoryList/$category->id'><h3 class='fakeimg category'>$category->category</h3></a><br>";
       }?>
     </div>
     <div class="card">
      <h3>Follow Me</h3>
      <div class="fakeimg">
        <a href="https://www.facebook.com/oscar.sanchezmartos" target="_blank"><i class="fa fa-facebook-square rrssicon"></i></a>
        <a href="https://www.instagram.com/oscar_sanchez_photo/" target="_blank"><i class="fa fa-instagram rrssicon"></i></a>
      </div>
    </div>
  </div>
  </div>
  <!-- COOKIES -->
  <div id="cajacookies">
    <p><button onclick="aceptarCookies();" class="pull-right"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</button>
    Éste sitio web usa cookies, si permanece aquí acepta su uso.
    Puede leer más sobre el uso de cookies en nuestra <a href="politica.html">política de privacidad</a>.
    </p>
  </div>
  </div><!-- CIERRE DE MAIN -->
  
  <script src="\views\js\script2.js"></script>
  <script src="\views\js\css3-animate-it.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</body>
</html>
