<?php

// CONTROLADOR BlogController
class BlogController{

//************        OPERACIONES PUBLICAS      *****////////////////
//OPERACION POR DEFECTO
public function index(){
    $this->list(); // listado de entradas
}
//LISTA TODAS LAS ENTRADAS
public function list(){
    // OPERACION QUE PUEDEN HACER TODOS LOS USUARIOS
    // La vista recibe todas las entradas y categorias para generar el contenido
    $entradas = Blog::get();
    $categories = Category::get();
    //vita de entradas
    include 'views/blog/lista.php';
}
//LISTAR TODAS LAS ENTRADAS DE UNA CATEGORIA
public function categoryList($id){
  // OPERACION QUE PUEDEN HACER TODOS LOS USUARIOS
  // La vista recibe entradas de una categoria concreta
    $entradas = Blog::getEntradasCategory($id);
    $categories = Category::get();
    //vita de entradas
    include 'views/blog/lista.php';
}

// MUESTRA UNA ENTRADA CONCRETA
public function show (int $id = 0){
    // OPERACION QUE PUEDEN HACER TODOS LOS USUARIOS

    //Variables para generar el contenido
    $entrada = Blog::getById($id);
    $comments = Comment::getByIdEntrada($id);
    $categories = Category::get();
    //vista de una entrada concreta
    include 'views/blog/detalles.php';
}

//FILTRADO DE DATOS PARA BUSQUEDA EN LAS ENTRADAS DEL BLOG
public function filtered(){
  //miramos si llegan datos por post
  $f=$_POST['filtrar'];
  if(!$f)
    throw  new Exception ('no hay datos');
    //hacemos la busqueda con los datos de post
    $entradas= Blog::getFiltered($_POST['campo'], $_POST['valor'], $_POST['orden'], $_POST['sentido']);
    $categories = Category::get();
     //recuperamos los comments para pasarselo a la vista
     include 'views/blog/lista.php';
}

//METODOS PARA ACCEDER A CADA UNA DE LAS GALERIAS
public function montana(){
  include 'views/galeriamontaña.php';
}
public function agua(){
  include 'views/galeriaagua.php';
}
public function tormentas(){
  include 'views/galeriatormentas.php';
}
public function subacuatica(){
  include 'views/galeriasubacuatica.php';
}
public function noche(){
  include 'views/galerianocheyestrellas.php';
}
//**accede a la politicaprivacidad
public function politicaPrivacidad(){
  include 'views/politicaprivacidad.php';
}

//***********    METODOS DEL DASHBOARD     ******************************************///////

//MUESTRA EL ACCESO AL PANEL PARA LOGEARSE
public function admin(){
    //solamente el administrador se podrá logear
    //muestra el panel de acceso al dashboard
    include 'views/admin/login.php';
}
//PAGINA PRINCIPAL DEL DASHBOARD
public function dashboard(){
    // solamente el administrador
    if(!Login::isAdmin())
        throw new Exception('No tienes permiso para hacer esto');
    //Variables para generar el contenido en la vista
    $usuario = Login::get();
    $categories = Category::get();
    $entradas = Blog::get();
    $countentradas = Blog::count();
    include 'views/admin/dashboard.php';
}
//metodo para mostrar detalles del admin
public function adminShow(int $id){
  // solamente el administrador
  if(!Login::isAdmin())
      throw new Exception('No tienes permiso para hacer esto');
    //Variables para generar el contenido en la vista
    $usuario = Login::get();
    $categories = Category::get();
    $entrada = Blog::getById($id);
    $comments = Comment::getByIdEntrada($id);

    include 'views/admin/details.php';
}

// MUESTRA FORMUALRIO CREACION DE UNA NUEVA ENTRADA
public function create(){
  // solamente el administrador
  if(!Login::isAdmin())
      throw new Exception('No tienes permiso para hacer esto');
    //Variables para generar el contenido en la vista
    $usuario = Login::get();
    $categories = Category::get();

    include 'views/admin/create.php';
}

// GUARDA LA ENTRADA CREADA
public function store(){
  // solamente el administrador
  if(!Login::isAdmin())
      throw new Exception('No tienes permiso para hacer esto');
    // comprueba que llegue el formulario con los datos
    if(empty($_POST['guardar']))
        throw new Exception('No se recibieron datos');
     $usuario = Login::get();

   //recuperamos la imagen que llega por post
     if(empty($_FILES['imagen']['name'])){
        $ruta='';
     }else{
        $imagen = $_FILES['imagen'];
          //llamamos a uploadfile para que la suba y la guarde en el fichero correspondiente
          if(!$ruta = Upload::procesar($imagen, 'img/blog/',1,3000000, "image/*"))
            throw new Exception('No se pudo guardar la imagen');
          }
    //genera una nueva entrada
    $entrada = new Blog(); //crear la nueva entrada
    //recupera lo datos que llegan por post
    $entrada->entrada = DB::escape($_POST['entrada']);
    $entrada->title = DB::escape($_POST['title']);
    $entrada->subtitle = DB::escape($_POST['subtitle']);
    $entrada->meta_description = DB::escape($_POST['meta_description']);
    $entrada->tags = DB::escape($_POST['tags']);
    $entrada->imagen = $ruta;
    $entrada->is_draft = empty($_POST['is_draft'])? 0 : 1;
    $entrada->id_usuario = intval($_POST['id_usuario']);
    $entrada->id_category = intval($_POST['id_category']);
    //$entrada->updated_at = date('Y-m-d h:i:s');
    //$entrada->published_at = date('Y-m-d h:i:s');
    //$entrada->created_at=date('Y-m-d h:i:s');
    //guarda en la DB o lanza excepcion
    if(!$entrada->guardar())
        throw new Exception("No se pudo guardar $entrada->id");
    //Variables para generar la vista
    $mensaje="Guardado de la entrada $entrada->id correcto.";
    $categories = Category::get();
    $entradas= Blog::get();

    include 'views/admin/dashboard.php'; //mostrar éxito
}


//ACTUALIZAR SE HACE EN DOS PASOS
// muestra el formulario de edición de una entrada
public function edit(int $id = 0){
  // esta operación solamente la puede hacer el administrador
  // o bien el usuario propietario de los datos que se muestran
  if(! (Login::isAdmin() || Login::get()->id == $id))
    throw new Exception('No tienes los permisos necesarios');
  // recuperar la entrada
  if(!$entrada = Blog::getById($id))
        throw new Exception("No se indicó la entrada.");
  // mostrar el formulario de edición
    include "views/blog/actualizar.php";
}

// aplica los cambios a una entrada
public function update(){
  // esta operación solamente la puede hacer el administrador
  if(!(Login::isAdmin() || Login::get()->id == $id))
    throw new Exception('No tienes los permisos necesarios');

  // comprueba que llegue el formulario con los datos
  if(empty($_POST['actualizar']))
    throw new Exception('No se recibieron datos');

    $id = intval($_POST['id']); // recuperar el id vía POST
   
    //guardamos la ruta antigua para borrarla si llega un archivo distinto
    $rutaant= Blog::getById($id)->imagen;
    //recuperamos la imagen que llega por post
    if(empty($_FILES['imagen']['name'])){
            $ruta=$rutaant;
        }else{
          $imagen = $_FILES['imagen'];
        //llamamos a uploadfile para que la suba y la guarde en el fichero correspondiente
        if(!$ruta = Upload::procesar($imagen, 'img/blog/', 1,3000000, "image/*"))
            throw new Exception('No se pudo guardar la imagen');
        }

    // recuperar la entrada
    if(!$entrada =Blog::getById($id))
        throw new Exception("No existe la entrada $id.");

    $entrada->entrada = DB::escape($_POST['entrada']);
    $entrada->title = DB::escape($_POST['title']);
    $entrada->subtitle = DB::escape($_POST['subtitle']);
    $entrada->meta_description = DB::escape($_POST['meta_description']);
    $entrada->tags = DB::escape($_POST['tags']);
    $entrada->imagen = $ruta;
    $entrada->is_draft = empty($_POST['is_draft'])? 0 : 1;
    $entrada->id_usuario = intval($_POST['id_usuario']);
    $entrada->updated_at = date('Y-m-d h:i:s');
    $entrada->id_category = intval($_POST['id_category']);
  
    // intenta realizar la actualización de datos
    if($entrada->actualizar()===false)
        throw new Exception("No se pudo actualizar la entrada: $entrada->title");

    //si la actualización ha sido correcta borramos la foto antigua
   if($rutaant !== $ruta){
      if(unlink($rutaant)){
        $mensaje1 = " La foto anterior ha sido borrada correctamente.";
      }
    }
    // prepara un mensaje
    $GLOBALS['mensaje'] = "Actualización de la entrada: $entrada->title correcta.";
    //  Variables para generar la vista
    $entradas=Blog::get();
    $categories=Category::get();

    include 'views/admin/dashboard.php'; //mostrar éxito
}

// muestra el formulario de confirmación de eliminación
public function delete(int $id = 0){
   // esta operación solamente la puede hacer el administrador
  // o bien el usuario propietario de los datos que se muestran
  if(! (Login::isAdmin() || Login::get()->id == $id))
    throw new Exception('No tienes los permisos necesarios');

  // recupera la entrada para mostrar sus datos en la vista
  if(!$entrada = Blog::getById($id))
        throw new Exception("No existe la entrada $id.");

    // carga la vista de confirmación de borrado
    include 'views/admin/deletepost.php';
}

//elimina la entrada
public function destroy(){
  //recuperar el identificador vía POST
  $id = empty($_POST['id'])? 0 : intval($_POST['id']);

  // esta operación solamente la puede hacer el administrador
  if(! (Login::isAdmin() || Login::get()->id == $id))
    throw new Exception('No tienes los permisos necesarios');
  //recuperamos la ruta de la imagen para borrarla una vez borrada la entrada
  $ruta = Blog::getById($id)->imagen;

  // borra la entrada de la BDD
  if(!Blog::borrar($id))
    throw new Exception("No se pudo borrar  $id");

    //borramos la imagen de la DB
    if(unlink($ruta)){
      $mensaje = " La foto ha sido borrada correctamente.";

    // si es el administrador el que da de baja un usuario cualquiera, se muestra éxito
    }else{
        $mensaje = $mensaje." La entrada ha sido borrada correctamente.";
        include 'views/exito.php'; //mostrar éxito
        }
 }


}
