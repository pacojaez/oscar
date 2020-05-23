<?php

// CONTROLADOR CommentController
class CommentController{


// ******************     TODOS LOS USUARIOS    ***********//////////
// operación por defecto
public function index(){
    $this->list(); // listado de entradas
}

// lista los comentarios
public function list(){

    //if(!Login::isAdmin())
    //    throw new Exception('No tienes permiso para hacer esto');
    $comments = Comment::get();
    include 'views/admin/categories.php';
}

// muestra una entrada
public function show(int $id = 0){

    // esta operación solamente la puede hacer el administrador
    // o bien el usuario propietario de los datos que se muestran
    //if(! (Login::isAdmin() || Login::get()->id == $id))
    //    throw new Exception('No tienes los permisos necesarios.');

    // recuperar el usuario
    //if(!$usuario = Usuario::getById($id))
    //    throw new Exception("No se pudo recuperar el usuario.");
    $entrada = Comment::getById($id);
    include 'views/admin/details.php';
}

// muestra el formulario de nueva entrada
public function create(){
  // solamente el administrador
  if(!Login::isAdmin())
      throw new Exception('No tienes permiso para hacer esto');

    include 'views/blog/nuevo.php';
}

// guarda el nuevo usuario
public function store(){
    // comprueba que llegue el formulario con los datos
    if(empty($_POST['guardar']))
        throw new Exception('No se recibieron datos');

        // comprobar el reCaptcha
           $reCaptcha = new ReCaptcha('6Ld6RugUAAAAAMWHA5ifR8gLH2P2CQYbpoBoGk37');                 //

           $response = $reCaptcha->verifyResponse(
                   $_SERVER['REMOTE_ADDR'], $_POST['g-recaptcha-response']);

           if(!$response || !$response->success)
               throw new Exception('Error al validar reCaptcha.');

    $comment = new Comment(); //crear el nuevo comentario

    $comment->comment = DB::escape($_POST['comment']);
    $comment->usuario = DB::escape($_POST['usuario']);
    $comment->id_entrada= intval($_POST['id_entrada']);

    //gestion de errores
    if(!$comment->guardar())
        throw new Exception("$comment->usuario, no se pudo guardar $comment->comment");

    //le pasamos a la vista las variables:
    $id=intval($_POST['id_entrada']);
    $mensaje="Guardado correctamente el comentario: $comment->comment.";
    $categories = Category::get();
    $comments = Comment::getByIdEntrada($id);
    $entrada = Blog::getById($id);

    include "views/blog/detalles.php";
}


//ACTUALIZAR SE HACE EN DOS PASOS

// muestra el formulario de edición de un usuario
public function edit(int $id = 0){

    // esta operación solamente la puede hacer el administrador
    // o bien el usuario propietario de los datos que se muestran
    if(! (Login::isAdmin() || Login::get()->id == $id))
        throw new Exception('No tienes los permisos necesarios');

    // recuperar el usuario
    if(!$entrada = Category::getById($id))
        throw new Exception("No se indicó la entrada.");
    // mostrar el formulario de edición
    include "views/blog/actualizar.php";
}


// aplica los cambios de un usuario
public function update(){

    // esta operación solamente la puede hacer el administrador
    // o bien el usuario propietario de los datos que se muestran
    if(! (Login::isAdmin() || Login::get()->id == $id))
        throw new Exception('No tienes los permisos necesarios');

    // comprueba que llegue el formulario con los datos
    if(empty($_POST['actualizar']))
        throw new Exception('No se recibieron datos');

    $id = intval($_POST['id']); // recuperar el id vía POST

    // recuperar la entrada
    // recuperar el usuario
    if(!$category =Category::getById($id))
        throw new Exception("No existe la categoria $id.");

    $category->category = DB::escape($_POST['category']);

    // intenta realizar la actualización de datos
    if($category->actualizar()===false)
        throw new Exception("No se pudo actualizar la categoria: $category->category");

    // prepara un mensaje
    $GLOBALS['mensaje'] = "Actualización de la categoria: $category->category correcta.";
    $mensaje = 'Actualización correcta';
    // repite la operación edit, así mantiene la vista de edición.
    //$this->edit($entrada->id);
    include 'views/exito.php'; //mostrar éxito
}

// muestra el formulario de confirmación de eliminación
public function delete(int $id = 0){

     // esta operación solamente la puede hacer el administrador
    // o bien el usuario propietario de los datos que se muestran
    if(! (Login::isAdmin() || Login::get()->id == $id))
        throw new Exception('No tienes los permisos necesarios');

    // recupera el usuario para mostrar sus datos en la vista
    if(!$comment = Comment::getById($id))
        throw new Exception("No existe el comentario $id.");

    // carga la vista de confirmación de borrado
    include 'views/admin/commentdelete.php';
}

//elimina la categoria
public function destroy(){

    //recuperar el identificador vía POST
    $id = empty($_POST['id'])? 0 : intval($_POST['id']);

    // esta operación solamente la puede hacer el administrador
    // o bien el usuario propietario de los datos que se muestran
    if(! (Login::isAdmin() || Login::get()->id == $id))
        throw new Exception('No tienes los permisos necesarios');

    // borra la categoria de la BDD
    if(!Comment::borrar($id))
        throw new Exception("No se pudo eliminar el comentario $id");

    // hace logout (solamente si es el mismo usuario el que se está dando de baja)
    // y no cuando es el administrador el que da de baja un usuario cualquiera
        if(!Login::isAdmin() || Login::isAdmin() && Login::get()->id == $id){
        (new LoginController())->logout();

    // si es el administrador el que da de baja un usuario cualquiera, se muestra éxito
    }else{
        $mensaje = "El comentario ha sido dado de baja correctamente.";
        $categories = Category::get();
        $entradas = Blog::get();
        include 'views/admin/posts.php'; //mostrar éxito
    }
}
}
