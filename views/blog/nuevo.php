<?php (TEMPLATE)::headerBlog();?>
	<body>
		<?php
		  (TEMPLATE)::header("Registro de usuarios");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>

		<h2>Nueva Entrada</h2>

		<form class="datos" method="post" action="/blog/store" enctype="multipart/form-data">
			<label>Usuario</label>
			<input type="text" name="title">
			<br>
			<label>Palabras clave</label>
			<input type="text" name="keywords">
			<br>
			<label>Entrada</label>
			<textarea cols="10" rows="10">
			<br>

			 <?php
			 // dar privilegios al nuevo usuario (solamente para el admin)
			 if(Login::isAdmin()){
			 ?>
    			<h4>Operaciones solo para el admin</h4>
    			<label>Privilegio</label>
    			<input type="number" value="0" min="0" max="9999" name="privilegio">
    			<br>
    			<input type="checkbox" name="administrador" value="1">
    			<label>Conceder privilegio de administrador</label>
    			<br>
             <?php } ?>

			<input type="submit" name="guardar" value="Guardar">
		</form>
		<br>

		<div class="centrado">
			<a href="/">Volver a la portada</a>
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
