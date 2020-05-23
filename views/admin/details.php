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
    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Post # <?= $entrada->id ?>, Titulo: <?= $entrada->title?></h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="/login/dashboard" class="btn btn-light btn-block">
                        <i class="fas fa-arrow-left"></i> Back to Dashboard</a>
                </div>
                <div class="col-md-3">
                    <a href="/blog/show/<?=$entrada->id?>" class="btn btn-light btn-block">
                        <i class="fas fa-arrow-up"></i> Preview </a>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILS-->
    <section id="details">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Post</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="/blog/update">
                              <input type="hidden" name="id" value="<?=$entrada->id?>">
                              <input type="hidden" name="id_usuario" value="<?=$usuario->id?>">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name='title' class="form-control" value="<?= $entrada->title?>">
                                </div>
                                <div class="form-group">
                                    <label for="title">Subtitle</label>
                                    <input type="text" name='subtitle' class="form-control" value="<?= $entrada->subtitle?>">
                                </div>
                                <div class="form-group">
                                    <label for="title">Tags</label>
                                    <input type="text" name='tags' class="form-control" value="<?= $entrada->tags?>">
                                </div>
                                <div class="form-group">
                                    <label for="title">Metadescripción</label>
                                    <input type="text" name='meta_description' class="form-control" value="<?= $entrada->meta_description?>">
                                </div>
                                <div class="form-group">
                                    <label for="title">Publicado</label>
                                    <input type="date" name='published_at' class="form-control" value="<?= $entrada->published_at?>">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name='id_category'>
                                      <?php foreach ($categories as $category) {
                                          echo "<option value='$category->id'> $category->category </option>";
                                      }?>
                                    </select>
                                </div>
                                <div class="form-group text-center">
                                    <label for="title">Imagen Actual:</label><br>
                                    <img src="/<?=$entrada->imagen?>" alt="<?= $entrada->title?>" width='50%' height= '50%'>
                                </div>
                                <div class="form-group text-center">
                                    <h2 for="image">Upload New Image</h2>
                                    <div class="custom-file">
                                        <input type="file" name='imagen' id="image">
                                    </div>
                                    <small class="form-text text-muted">Max Size 3mb</small>
                                </div>
                                <div class="form-group">
                                    <label for="body">ENTRADA</label>
                                    <textarea name="entrada" class="form-control" cols="" rows="20">
                                      <?=$entrada->entrada?>
                                    </textarea>
                                </div>
                                <div class="row text-center">
                                <div class="col-md-12">
                                    <input type="submit" name="actualizar" value="Actualizar" class="btn btn-success btn-block">
                                </div>
                              </div>
                            </form>
                            <div class="card-body">
                              <form class="datos" method="get" action="/blog/show/<?=$entrada->id?>">
                          			<h3 class="text-center">Ver la entrada # <?=$entrada->id?>?</h3>
                          			<input type="hidden" name="id" value="<?=$entrada->$id?>">
                                <input type="submit" name="ver" value="Ver Post" class="btn btn-info btn-block">
                          	 </form>
                            </div>
                            <div class="card-body">
                              <form class="datos" method="post" action="/blog/delete/<?=$entrada->id?>">
                          			<h3 class="text-center">¿Borrar la entrada # <?=$entrada->id?>?</h3>
                          			<input type="hidden" name="id" value="<?=$entrada->$id?>">
                                <input type="submit" name="borrar" value="Delete Post" class="btn btn-danger btn-block">
                          	 </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Comments</h4>
                        </div>
                        <div class="card-body text-center">
                          <?php if(!empty($comments)){
                          foreach ($comments as $comment)
                              echo "<p>$comment->comment</p> <hr>
                              <a href='/comment/delete/$comment->id' class='btn btn-danger'>
                                  <i class='fas fa-angle-double-right'></i> Delete
                              </a>";
                          }else {
                              echo "<p>AUN NO HAY COMENTARIOS</p>";
                          }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?=Dashboard::footer();?>



<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>-->
</body>
</html>
