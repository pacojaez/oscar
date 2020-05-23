<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    <title>Blogen UI</title>

</head>
<body>
  <?php
  Dashboard::nav();
   ?>
    <!-- USERS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>New User</h4>
                        </div>
                        <form method="post" enctype="multipart/form-data" action="/usuario/store">
                          <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="usuario" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Clave</label>
                            <input type="password" name="clave" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Primer Apellido</label>
                            <input type="text" name="apellido1" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Segundo Apellido</label>
                            <input type="text" name="apellido2" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                          </div>

                          <?php
                    			 // dar privilegios al nuevo usuario (solamente para el admin)
                    			 if(Login::isAdmin()){
                    			 ?>
                        			<h4>Operaciones solo para el admin</h4>
                        			<label>Privilegio</label>
                        			<input type="number" value="0" min="0" max="9999" name="privilegio">
                        			<br>
                        			<input type="checkbox" name="administrador" value="1">
                        			<label>Conceder privilegio de administrador</label>
                        			<br>
                                 <?php } ?>
                              <div class="row mb-5">
                                 <div class="col-md-6">
                                     <input type="submit" name="guardar" value="Save" class="btn btn-success btn-block">
                                 </div>
                                 <div class="col-md-6">
                                     <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-block">
                                 </div>
                              </div>
                    		</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php Dashboard::footer();?>



<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>-->
</body>
</html>
