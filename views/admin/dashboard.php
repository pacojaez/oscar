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
    //Dashboard::login();
     ?>
    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="/blog/create" class="btn btn-primary btn-block">
                        <i class="fas fa-plus"></i> Add Post
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="/usuario/create" class="btn btn-warning btn-block">
                        <i class="fas fa-plus"></i> Add User
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS with VIEWS-->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Últimos Posts</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Entrada</th>
                                    <th>Meta Descripción</th>
                                    <th>Fecha creación</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($entradas as $entrada) {
                                  echo "<tr>
                                  <td>$entrada->id</td>
                                  <td>$entrada->title</td>
                                  <td>$entrada->subtitle</td>
                                  <td>$entrada->entrada</td>
                                  <td>$entrada->meta_description</td>
                                  <td>$entrada->created_at</td>
                                  <td><a href='/blog/adminShow/$entrada->id' class='btn btn-secondary'>DETAILS</a></td>
                                  </tr>
                                  ";
                              }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php Dashboard::footer(); ?>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>-->

</body>
</html>
