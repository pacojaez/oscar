<?php

    class Basic{
        // pone el header
        public static function header(string $pagina = ''){?>
               <!DOCTYPE html>
                <html>
                <head>
                    <title>Oscar Sánchez Martos Photography</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="Pagina de Oscar Sanchez Martos, fotógrafo. Fotografía de paisaje"/>
                    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <link rel="stylesheet" type="text/css" href="\views\css\main2.css">
                    <link rel="stylesheet" type="text/css" href="\views\css\animations.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <link rel="icon" href="<?=favicon?>" type="image/png">
                </head>
        <?php }
        //header para el blog
        public static function headerBlog(string $pagina = ''){?>
        <!DOCTYPE html>
            <html>
            <head>
                <title>Oscar Sánchez Martos Photography <?=$entrada->title?></title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="Oscar Sanchez Martos, fotógrafo. <?=$entrada->meta_description?>"/>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <!--<link rel="stylesheet" type="text/css" href="\views\css\main2.css">-->
                <link rel="stylesheet" type="text/css" href="<?=CSS_FILE2?>">
                <link rel="stylesheet" type="text/css" href="\views\css\animations.css">
                <link rel="stylesheet" type="text/css" href="\views\css\blog.css">
                    <link rel="stylesheet" type="text/css" href="\views\css\bootstrap.min.css">
                    <!--<link rel="stylesheet" type="text/css" href="\views\css\dashboard.css">-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://www.google.com/recaptcha/api.js"></script>
                <script type="text/javascript">
                    var onloadCallback = function() {
                        grecaptcha.render('html_element', {
                        'sitekey' : '6LerG30UAAAAAIjT0fVGkXlPWDKUbPV-R1RKJzZn'
                        });
                    };
                    </script>

                <link rel="icon" href="<?=favicon?>" type="image/png">
            </head>
            <?php }
        // pone el nav
        public static function nav(){?>
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
             <p class='animated bounceInRight delay-1000'>&copy 2020 Oscarmartos.com</p>
            </div>
        <?php }

        // pone el login/logout
        public static function login(){
            // recupera el usuario identificado mediante el modelo Login
            $identificado = Login::get();

            echo "<div id='login'>";

            // el enlace depende de si el usuario está identificado o no
            echo $identificado ?
                "Hola <a href='/usuario/show/$identificado->id'>$identificado->usuario</a>,
                      <a href='/login/logout'>salir</a>" :
                "<a href='/login'>Identificarse</a> - <a href='/usuario/create'>Registro</a>";

            echo "</div>";
        }

        // pone el footer
        public static function footer(){?>
            <footer>
            	<p>Framework 19-20, by Robert Sallent all rights reserved</p>
            	<p>Robert@CIFO</p>
            </footer>
        <?php }
    }
