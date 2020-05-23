<<?php (TEMPLATE)::headerBlog();?>
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
          <div class="header animatedParent">
              <h2 class="animated fadeIn delay-1000 blogtitle">My life. My Pictures</h2>
          </div>

          <div class="row">
             <div class="leftcolumn animatedParent">
               <?php if(empty($entradas)){
                 echo "<div class='cardleft animated bounceInUp delay-500'>
                   <h2 class='blog-post-alert'>Sorry, aun no tengo una entrada en el blog sobre lo que me pides</h2>
                   <a href='/blog/list'><h3 blog-post-alert>Volver al índice del Blog</h3></a>
                   </div>";
                  }else {
                 	 foreach ($entradas as $entrada) {
                    echo "<div class='cardleft animated bounceInUp delay-500'>
                    <h2 class='blog-post-title'>$entrada->title</h2>
                    <h5>published_at $entrada->published_at</h5>
                    <div class='blog-post-img' style='height:200px;'/>
                      <img src='/$entrada->imagen' alt='$entrada->title'/>
                      <p class='titleimg'>$entrada->subtitle</p>
                    </div>

                    <p class='elipsis'>$entrada->entrada ....<a href='/blog/show/$entrada->id'>leer más</a></p>
                    </div>
                  ";
                }}?>
            </div>
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
                 <a href='/blog/list'><button type="button" class="btn btn-secondary ml-2 my-sm-0">QUITAR FILTROS</button></a>
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
  </body>
  <script src="\views\js\script2.js"></script>
  <script src="\views\js\css3-animate-it.js"></script>
</html>
