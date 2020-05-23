<?php

// CONTROLADOR CategoryController
class CategoryController{

// operación por defecto
public function index(){
    $this->list(); // listado de categorias
}

// lista los categories
public function list(){
    $categories = Category::get();
    include 'views/admin/categories.php';
}

// muestra una categoria
public function show(int $id = 0){
  // esta operación solamente la puede hacer el administrador
  if(!Login::isAdmin())
      throw new Exception('No tienes los permisos necesarios');
    //Variables para generar la vista
    $entrada = Category::getById($id);
    $id_entrada = Comments::getIdEntrada($id);

    include 'views/admin/details.php';
}

// hacemos en un único paso la creación de una nueva categoria
//guarda la nueva categoria
public function store(){
  // esta operación solamente la puede hacer el administrador
  if(!Login::isAdmin())
      throw new Exception('No tienes los permisos necesarios');
    // comprueba que llegue el formulario con los datos
    if(empty($_POST['guardar']))
        throw new Exception('No se recibieron datos');
  //crea la nueva categoria
    $category = new Category();

    $category->category = DB::escape($_POST['category']);
  //si no se puede guardar lanza excepcion
    if(!$category->guardar())
        throw new Exception("No se pudo guardar $category->category");
  //Variables para generar la vista
    $mensaje="Guardado correctamente categoria: $category->category.";
    $categories = Category::get();

    include 'views/admin/categories.php'; //mostrar éxito
}


//ACTUALIZAR

// muestra el formulario de edición de una categoria
public function edit(int $id = 0){
    // esta operación solamente la puede hacer el administrador
    // o bien el usuario propietario de los datos que se muestran
    if(! (Login::isAdmin() || Login::get()->id == $id))
        throw new Exception('No tienes los permisos necesarios');

    // recuperar la categorias
    if(!$category = Category::getById($id))
        throw new Exception("No se indicó la categoria.");
    //le pasamos a la vista la categorias
    $category = Category::getById($id);
    // mostrar el formulario de edición
    include "views/admin/categoryactualizar.php";
}

// aplica los cambios una categoria
public function update(){
    // esta operación solamente la puede hacer el administrador
    if(!Login::isAdmin())
        throw new Exception('No tienes los permisos necesarios');

    // comprueba que llegue el formulario con los datos
    if(empty($_POST['actualizar']))
        throw new Exception('No se recibieron datos');

    $id = intval($_POST['id']); // recuperar el id vía POST

    // recuperar la categoria
    if(!$category =Category::getById($id))
        throw new Exception("No existe la categoria $id.");

    $category->category = DB::escape($_POST['category']);

    // intenta realizar la actualización de datos
    if($category->actualizar()===false)
        throw new Exception("No se pudo actualizar la categoria: $category->category");

    // prepara un mensaje para la vista
    $GLOBALS['mensaje'] = "Actualización de la categoria: $category->category correcta.";
    $mensaje = 'Actualización correcta';
    $categories = Category::get();
    
    include 'views/admin/categories.php'; //mostrar éxito
}

// muestra el formulario de confirmación de eliminación
public function delete(int $id = 0){
     // esta operación solamente la puede hacer el administrador
    if(!Login::isAdmin())
        throw new Exception('No tienes los permisos necesarios');

    // recupera la categoria para mostrar sus datos en la vista
    if(!$category = Category::getById($id))
        throw new Exception("No existe la categoria $id.");

    // carga la vista de confirmación de borrado
    include 'views/admin/categorydelete.php';
}

//elimina la categoria
public function destroy(){
    //recuperar el identificador vía POST
    $id = empty($_POST['id'])? 0 : intval($_POST['id']);

    // esta operación solamente la puede hacer el administrador
    if(!Login::isAdmin())
        throw new Exception('No tienes los permisos necesarios');

    // borra la categoria de la BDD
    if(!Category::borrar($id))
        throw new Exception("No se pudo eliminar la categoria $id");

    // si es el administrador el que da de baja un usuario cualquiera, se muestra éxito
        $mensaje = "LA categoria ha sido borrada correctamente.";
        $categories = Category::get();

        include 'views/admin/categories.php'; //mostrar éxito
  }
}
