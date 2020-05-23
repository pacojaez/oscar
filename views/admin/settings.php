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
  Dashboard::login();
   ?>
    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html" class="btn btn-light btn-block">
                        <i class="fas fa-arrow-left"></i> Back to Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="index.html" class="btn btn-success btn-block">
                        <i class="fas fa-check"></i> Save Changes
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SETTINGS-->
    <section id="settings">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Settings</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <fieldset class="form-group">
                                    <legend>Allow User Registration</legend>
                                    <div class="form-check">
                                        <label class="form-check-label"></label>
                                        <input type="radio" class="form-check-input" value="Yes" checked> Yes
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label"></label>
                                        <input type="radio" class="form-check-input" value="No"> No
                                    </div>
                                </fieldset>

                                <fieldset class="form-group">
                                    <legend>Homepage Format</legend>
                                    <div class="form-check">
                                        <label class="form-check-label"></label>
                                        <input type="radio" class="form-check-input" value="posts" checked> Blog Page
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label"></label>
                                        <input type="radio" class="form-check-input" value="page"> Homepage
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        Copyright &copy; <span id="year"></span> Blogen UI
                    </p>
                </div>
            </div>
        </div>
    </footer>



<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
