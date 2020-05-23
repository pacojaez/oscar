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
                        <i class="fas fa-lock"></i> Change Password
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="index.html" class="btn btn-danger btn-block">
                        <i class="fas fa-trash"></i> Delete Account
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROFILE-->
    <section id="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-gruop">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" value="Refaat Bitar">
                                </div>
                                <div class="form-gruop">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="rsv.gho@gmail.com">
                                </div>
                                <div class="form-gruop">
                                    <label for="bio">Bio</label>
                                    <textarea class="form-control" name="editor1">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, eligendi accusantium fugit ducimus consectetur optio, veritatis recusandae omnis quod hic provident ipsa, ullam distinctio sint est voluptatum? At, reprehenderit! Voluptate.
                                    </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Your Avatar</h3>
                    <img src='https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairDreads01&accessoriesType=Prescription02&hairColor=BrownDark&facialHairType=BeardMedium&facialHairColor=Black&clotheType=Hoodie&clotheColor=Blue02&eyeType=Happy&eyebrowType=Default&mouthType=Smile&skinColor=Pale'alt="" class="d-block img-fluid mb-3">
                    <button class="btn btn-primary btn-block">Edit Image</button>
                    <button class="btn btn-danger btn-block">Delete Image</button>
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
<!--<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>-->
</body>
</html>
