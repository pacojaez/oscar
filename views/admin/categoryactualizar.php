<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/style.css">
    <title>Dashboard Blog</title>
</head>
<body>
  <?php
  Dashboard::nav();
   ?>
	 <!-- HEADER -->
	 <header id="main-header" class="py-2 bg-primary text-white">
			 <div class="container">
					 <div class="row">
							 <div class="col-md-12">
									 <h1>EDITAR CATEGORIA</h1>
							 </div>
					 </div>
			 </div>
	 </header>

		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>
		<!-- DETAILS-->
    <section id="details">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                          <h4>Update Category</h4>
                        </div>
                        <div class="card-body">
                          <form class="datos" method="post" action="/category/update/">
                      			<p>Confirmar la actualización de la categoria <?=$category->id?>.</p>
                      			<input type="hidden" name="id" value="<?=$category->id?>">
														<label>Info actual:</label>
														<input type="text" name="category" placeholder="<?=$category->category?>">
                            <input type="submit" name="actualizar" value="ACTUALIZAR" class="btn btn-info btn-block">
                      	 </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

		<?php
		  Dashboard::footer();
		?>

	</body>
</html>
