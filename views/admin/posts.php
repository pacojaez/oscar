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
    <!-- SEARCH BAR -->

  <div class="navbar-collapse offcanvas-collapse mt-3 mb-5" id="navbarsExampleDefault">
    <form class="form-inline my-2 my-lg-0 ml-3" action='/blog/filtered' method='post'>
      <input class="form-control mr-sm-2" type="text" name='valor' placeholder="Search" aria-label="Search">
      <label class="ml-2">Campo:</label>
      <select name='campo' class="ml-2 form-control">
         <option value='title'
         <?php echo !empty($campo) && $campo=='title'? 'selected':'';?>
         >TITULO</option>
         <option value='subtitle'
         <?php echo !empty($campo) && $campo=='subtitle'? 'selected':'';?>
         >SUBTITULO</option>
         <option value='entrada'
         <?php echo !empty($campo) && $campo=='entrada'? 'selected':'';?>
         >ENTRADA</option>
     </select>
     <label class="ml-2">ORDENADO POR:</label>
     <select name='orden' class="ml-2 form-control">
        <option value='title'
        <?php echo !empty($orden) && $orden=='title'? 'selected':'';?>
        >TITULO</option>
        <option value='subtitle'
        <?php echo !empty($orden) && $orden=='subtitle'? 'selected':'';?>
        >SUBTITULO</option>
        <option value='entrada'
        <?php echo !empty($orden) && $orden=='entrada'? 'selected':'';?>
        >ENTRADA</option>
        <option value='created_at'
        <?php echo !empty($orden) && $orden=='created_at'? 'selected':'';?>
        >FECHA CREACIÓN</option>
      </select>
      <input type='radio' name='sentido' value='ASC' class="ml-2 form-control"
      <?php echo empty($sentido) || $sentido=='ASC'? 'checked':'';?>>
      <label class="ml-2 form-control">Ascendente</label>
      <input type='radio' name='sentido' value='DESC' class="ml-2 form-control"
      <?php echo !empty($sentido) && $sentido=='DESC'? 'checked':'';?>>
      <label class="ml-2 form-control">Descendente</label>
      <input class="btn btn-outline-primary ml-2 my-sm-0" type="submit" name="filtrar" value='SEARCH'/>
      <a href='/blog/list'><button type="button" class="btn btn-secondary ml-2 my-sm-0">QUITAR FILTROS</button></a>
    </form>
  </div>
    <!-- POSTS-->
    <section id="posts mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Posts</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Entrada</th>
                                    <th>Imagen Destacada</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($entradas as $entrada) {
                                echo 	"<tr>
                                    <td id='aboutMeTitle' class='ui dividing header'> $entrada->title </td>
                                    <td id='aboutMeTitle' class='ui dividing header'>$entrada->subtitle</td>
                                    <td id='aboutMeTitle' class='ui dividing header'>$entrada->entrada</td>
                                    <td id='aboutMeTitle' class='ui dividing header'><img src='/$entrada->imagen' width='200' height='200'/></td>
                                    <td>
                                        <a href='/blog/adminShow/$entrada->id' class='btn btn-primary'>
                                            <i class='fas fa-angle-double-right'></i> Details
                                        </a>
                                    </td>
                                    <td>
                                        <a href='/blog/delete/$entrada->id' class='btn btn-danger'>
                                            <i class='fas fa-angle-double-right'></i> Delete
                                        </a>
                                    </td>
                                  <tr>";
                                    }	?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <?php
      Dashboard::footer();
     ?>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>-->
</body>
</html>
