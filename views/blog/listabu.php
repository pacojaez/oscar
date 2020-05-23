<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="<?=CSS_FILE?>">
		<link rel="stylesheet" type="text/css" href="css/blog.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
		<link rel="stylesheet" type="text/css" href="<?=CSS_FILE?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">
    <!--<link rel="stylesheet" href="../../css/ddpp.css" type="text/css"/>-->
    <style type="text/css" media="all">@import "css/ddpp.css";</style>
    <style type="text/css" media="all">@import "css/semantic.mini.css";</style>

	</head>
	<body>
		<?php
		  (TEMPLATE)::header("Blog");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>
		<h2>Lista de entradas</h2>
		<div class="container">

		 <div class="page-header master">
			 <h1 class="master">Bienvenido a mi blog <small>hecho con Php 7 y Bootstrap <3</small></h1>
		 </div>
		 <div class="row">
			 <div class="col-sm-12 blog-main">
					<?php foreach ($entradas as $entrada) {
						echo 	"<div id='mySampleWorks'></div>
			      <div id='sampleWorksSection' class='ui stackable grid'>
							<div class='ui one column row'>
							<div class='ui center aligned column'>
								<h1 id='aboutMeTitle' class='ui dividing header'> $entrada->title </h1>
								<h2 id='aboutMeTitle' class='ui dividing header'>$entrada->subtitle</h2>
								<h3 id='aboutMeTitle' class='ui dividing header'>$entrada->entrada</h3>
							</div>
							</div>
							<div class='ui four column row sampleWorksCols'>
								<div class='ui column sampleWorksCols'>
					         <img class'ui large image' onclick='showSampleWorkImg(this)' src='/img/gallery/prueba/sample-work12.jpg' alt='David Diaz Sample Works'>
					      </div>
								<div class='ui column sampleWorksCols'>
					         	<image class='ui large image' onclick='showSampleWorkImg(this);' src='$entrada->imagen' alt='David Diaz Sample Works'>
					      </div>
							</div>
							</div>";
								}	?>
			 </div><!-- /.blog-main -->
		 </div><!-- /.row -->
	 	</div><!-- /.container -->

		<table>
			<tr>
				<th>title</th>
				<th>subtitle</th>
				<th>entrada</th>
				<th>Operaciones</th>
			</tr>
    		<?php foreach($entradas as $entrada){
    			   echo "<tr>";
    			   echo "<td>$entrada->title</td>";
    			   echo "<td>$entrada->subtitle</td>";
    			   echo "<td>$entrada->entrada</td>";
    			   echo "<td>";
    			   echo "<a href='/blog/edit/$entrada->id'>Actualizar</a>";
    			   echo "<a href='/blog/delete/$entrada->id'>Borrar</a>";
    			   echo "</td>";
    			   echo "</tr>";
    		}?>
		</table>
		<br>
		<div class="centrado">
			<a href="/">Volver a la portada</a>
		</div>
		<br>

		<?php
		  (TEMPLATE)::footer();
		?>
	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</html>
