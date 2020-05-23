<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles de la entrada # <?php "$entrada->id --- $entrada->title"?></title>
		<link rel="stylesheet" type="text/css" href="<?=CSS_FILE?>">
		<!-- Stylesheet -->
    <link rel="stylesheet" href="/css/blog.css">
	</head>
	<body>

		<?php
		  (TEMPLATE)::header("Detalles");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>
		<div class="post">
			<div class="featuredImage">
				<img src="<?=$entrada->imagen?>" alt="<?=$entrada->subtitle?>" />
		 </div>
			<h1 class="postTitle"><?=$entrada->title?></h1>
			<p class="meta">Created: <?=$entrada->created_at?></p>
			<h3 class="postTitle"><?=$entrada->subtitle?></h3>
			<image src='/<?=$entrada->imagen?>'/>
			<p><?=$entrada->entrada?></p>
		</div>
		<div class="post">
			<h3 class="postTitle">COMENTARIOS</h3>
			<?php if(empty($comments)){
						echo "<p class='commentTitle'>NO HAY COMENTARIOS</p>";
					}else {
					foreach($comments as $comment) {
					echo "<p class='commentTitle'>$comment->comment</p>
								<p class='commentUser'>$comment->usuario</p>
								<hr>";
			}}?>
		</div>

		<div class="centrado row">
			<form method="post" action="/comment/store">
				<input type="hidden" value="<?= $entrada->id?>" name="id_entrada">
				<p><?php $entrada->id ?></p>
    		<label class='meta'>Nuevo Comentario</label>
    		<textarea type="text" required name="comment" cols="10" rows="10">Deja tu comentario</textarea>
				<label class='meta'>Usuario</label>
				<input type="text" name='usuario' required placeholder="Usuario"/>
				<input type="submit" name='guardar' value='GUARDAR'>
			</form>
		</div>

		<br>
		<div class="centrado">
    		<a href="/blog/show/<?=$entrada->id?>">Siguiente</a> -
    		<a href="/blog/show/<?=$entrada->id?>">Anterior</a>
		</div>
		<br>

		<?php
		  (TEMPLATE)::footer();
		?>
	</body>
</html>
