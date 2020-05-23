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
    <!-- CATEGORIES-->
    <section id="categories">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="/category/store">
                                <div class="form-group">
                                    <label for="title">Nueva Categoria</label>
                                    <input type="text" class="form-control" name='category'>
                                </div>
                                <div class="modal-footer">
                                  <input type="submit" name="guardar" value="Save" class="btn btn-success btn-block">
                                </div>
                            </form>
                        </div>
                        <div class="card-header">
                            <h4>Last Categories</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Created At</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach($categories as $category){
                          			   echo "<tr>";
                          			   echo "<td>$category->id</td>";
                          			   echo "<td><b>$category->category</b></td>";
                          			   echo "<td>$category->created_at</td>";
                          			   echo "<td>";
                                   echo "<a href='/category/edit/$category->id' class='btn btn-info'>
                                       <i class='fas fa-angle-double-right'></i> ACTUALIZAR</a>";
                                   echo "<td>";
                                   echo "<a href='/category/delete/$category->id' class='btn btn-danger'>
                                       <i class='fas fa-angle-double-right'></i> Delete</a>";

                          		}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php Dashboard::footer() ?>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>-->
</body>
</html>
