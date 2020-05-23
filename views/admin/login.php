<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/style.css">
    <title>Oscar Martos Blog Admin Panel</title>
</head>
<body>
  <?php
  //Dashboard::nav();
   ?>
    <!-- LOGIN-->
    <section id="login">
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Account Login</h4>
                        </div>
                        <div class="card-body bg-primary text-white">
                          <form class="datos" method="post" action="/login/login">
                            <div class="form-group">
                        			<label>Usuario o email</label>
                        			<input type="text" name="usuario" required class="form-control">
                            </div>
                            <div class="form-group">
                        			<label>Clave</label>
                        			<input type="password" name="clave" required class="form-control">
                            </div>
                      			<input type="submit" name="identificar" value="Identificarse" class="btn btn-dark btn-block">
                      		</form>
                      		<br>
                      		<div class="form-group">
                      			<a href="/forgotpassword"><button class="btn btn-dark btn-block mb-4">Olvidé mi clave</button></a>
                      			<a href="/"><button class="btn btn-dark btn-block">Volver a la portada</button></a>
                      		</div>
                      		<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
      //Dashboard::footer();
     ?>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>-->
</body>
</html>
