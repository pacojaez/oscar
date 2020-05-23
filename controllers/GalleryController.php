<?php

// CONTROLADOR BlogController
class GalleryController{

// operación por defecto
public function index(){

    $this->list(); // listado de entradas
}

// lista los entradas
public function prueba(){
    // solamente el administrador
    //if(!Login::isAdmin())
    //    throw new Exception('No tienes permiso para hacer esto');
    //$entradas = Blog::get();
    include 'views/gallery/prueba.php';
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
    $entrada = Blog::getById($id);
    include 'views/blog/detalles.php';
}

// muestra el formulario de nueva entrada
public function create(){
    include 'views/blog/nuevo.php';
}

// guarda el nuevo usuario
public function store(){

    // comprueba que llegue el formulario con los datos
    if(empty($_POST['guardar']))
        throw new Exception('No se recibieron datos');

    $usuario = new Usuario(); //crear el nuevo usuario

    $usuario->usuario = DB::escape($_POST['usuario']);
    $usuario->clave = md5($_POST['clave']); // encriptar la clave
    $usuario->nombre = DB::escape($_POST['nombre']);
    $usuario->apellido1 = DB::escape($_POST['apellido1']);
    $usuario->apellido2 = DB::escape($_POST['apellido2']);
    $usuario->privilegio = empty($_POST['privilegio'])? 0 : intval($_POST['privilegio']);
    $usuario->administrador = empty($_POST['administrador'])? 0 : 1;
    $usuario->email = DB::escape($_POST['email']);

    if(!$usuario->guardar())
        throw new Exception("No se pudo guardar $usuario->usuario");

    $mensaje="Guardado del usuario $usuario->usuario correcto.";
    include 'views/exito.php'; //mostrar éxito
}


//ACTUALIZAR SE HACE EN DOS PASOS

// muestra el formulario de edición de un usuario
public function edit(int $id = 0){

    // esta operación solamente la puede hacer el administrador
    // o bien el usuario propietario de los datos que se muestran
    if(! (Login::isAdmin() || Login::get()->id == $id))
        throw new Exception('No tienes los permisos necesarios');

    // recuperar el usuario
    if(!$entrada = Blog::getById($id))
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
    if(!$entrada =Blog::getById($id))
        throw new Exception("No existe la entrada $id.");

    $entrada->entrada = DB::escape($_POST['entrada']);
    $entrada->title = DB::escape($_POST['title']);
    $entrada->subtitle = DB::escape($_POST['subtitle']);
    $entrada->meta_description = DB::escape($_POST['meta_description']);
    $entrada->tags = DB::escape($_POST['tags']);
    $entrada->imagen = DB::escape($_POST['imagen']);
    $entrada->is_draft = empty($_POST['is_draft'])? 0 : 1;
    $entrada->id_usuario = intval($_POST['id_usuario']);
    $entrada->updated_at = date('Y-m-d h:i:s');

    // intenta realizar la actualización de datos
    if($entrada->actualizar()===false)
        throw new Exception("No se pudo actualizar la entrada: $entrada->title");

    // prepara un mensaje
    $GLOBALS['mensaje'] = "Actualización de la entrada: $entrada->title correcta.";
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
    if(!$usuario = Usuario::getById($id))
        throw new Exception("No existe el usuario $id.");

    // carga la vista de confirmación de borrado
    include 'views/usuario/borrar.php';
}

//elimina el usuario
public function destroy(){

    //recuperar el identificador vía POST
    $id = empty($_POST['id'])? 0 : intval($_POST['id']);

    // esta operación solamente la puede hacer el administrador
    // o bien el usuario propietario de los datos que se muestran
    if(! (Login::isAdmin() || Login::get()->id == $id))
        throw new Exception('No tienes los permisos necesarios');

    // borra el usuario de la BDD
    if(!Usuario::borrar($id))
        throw new Exception("No se pudo dar de baja el usuario $id");



    // hace logout (solamente si es el mismo usuario el que se está dando de baja)
    // y no cuando es el administrador el que da de baja un usuario cualquiera
        if(!Login::isAdmin() || Login::isAdmin() && Login::get()->id == $id){
        (new LoginController())->logout();

    // si es el administrador el que da de baja un usuario cualquiera, se muestra éxito
    }else{
        $mensaje = "El usuario ha sido dado de baja correctamente.";
        include 'views/exito.php'; //mostrar éxito
    }
}
}
