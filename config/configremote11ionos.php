<?php

    // Fichero config.php

    // PARA EL AUTOLOAD
    $classmap=['controllers','models','libraries','templates']; // directorios donde buscar clases

    // TEMPLATE A USAR EN LAS VISTAS
    define('TEMPLATE','Basic');
    define('CSS_FILE','/css/estilo.css');
    define('CSS_FILE2','\views\css\main2.css');
    define('CSS_FILE_blog','\views\css\blog.css');
    define('favicon','http://testphotographerportfolio.epizy.com/img/favicon.png');


    // PARAMETROS DE CONFIGURACION BDD
    //localhost:
    define('DB_HOST','db5000384584.hosting-data.io');    // host
    define('DB_USER','dbu660117');       // usuario
    define('DB_PASS','Asiotus1&Tytoalba68$');             // password
    define('DB_NAME','dbs370419');   // base de datos
    define('DB_CHARSET','utf8');      // codificación

    //servidor de prueba:
  /*
    define('DB_HOST','sql106.epizy.com');//servidor
    define('DB_USER','epiz_24714297'); //usuario servidor
    define('DB_PASS','PASSWORD DEL CPANEL'); //server password
    define('DB_NAME','epiz_24714297_framework2020'); //base de datos de prueba en server
    define('DB_CHARSET','utf8');      // codificación
  */
    // conector que debe usar PDO,solamente si hemos visto PDO además de mysqli
    // (dependerá del curso)
    define('SGDB','mysql');

    // CONTROLADOR Y METODO POR DEFECTO
    define('DEFAULT_CONTROLLER', 'Welcome');
    define('DEFAULT_METHOD', 'index');

    // PARA EL ENVIO DE MAIL DE CONTACTO
    define('CONTACT_EMAIL', 'pacojaez@gmail.com');
