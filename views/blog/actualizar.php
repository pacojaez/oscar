<?php (TEMPLATE)::headerBlog();?>

	<body>
		<?php
		  (TEMPLATE)::header("Actualizar entrada del blog");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>

		<h2>Formulario de edición</h2>

		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>

		<form class="datos" method="post" action="/blog/update" enctype="multipart/form-data">

		    <!-- id de la entrada a modificar -->
			<input type="hidden" name="id" value="<?=$entrada->id?>">
			<input type="hidden" name="id_usuario" value="<?=$entrada->id_usuario?>">

			<!-- resto del formulario... -->
			<label>Titulo</label>
			<input type="text" name="title" value="<?=$entrada->title?>">
			<br>
			<label>Subtitulo</label>
			<input type="text" name="subtitle" value="<?=$entrada->subtitle?>">
			<br>
			<label>tags</label>
			<input type="text" name="tags" value="<?=$entrada->tags?>">
			<br>
			<label>Meta Descripción</label>
			<input type="text" name="meta_description" value="<?=$entrada->meta_description?>">
			<br>
			<label>Entrada</label>
			<textarea name="entrada"><?=$entrada->entrada?></textarea>
			<br>
			<label>Imagen</label>
			<input type="text" name="imagen" value="<?=$entrada->imagen?>">
			<br>
			<label>Publicado:</label>
			<input type="date" name="published_at" value="<?=$entrada->published_at?>">
			<br>


			<input type="submit" name="actualizar" value="Actualizar">
		</form>
		<br>

		<div class="centrado">
    		<a href="/blog/show/<?=$entrada->id?>">Detalles</a>

    		<?php if(Login::isAdmin()){?>
    			- <a href="/usuario/list">Lista de usuarios</a>
    		<?php }?>
		</div>
		<br>

		<?php
		  (TEMPLATE)::footer();
		?>

	</body>
</html>
