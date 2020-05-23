<?php (TEMPLATE)::headerBlog();?>

	<body>
		<?php
		  (TEMPLATE)::header("Borrar entrada");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>
		<h2>Confirmar borrado</h2>
		<p><?="$usuario->usuario ($usuario->email)"?></p>

		<form class="datos" method="post" action="/usuario/destroy">
			<p>Confirmar el borrado del usuario <?=$usuario->usuario?>.</p>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="submit" name="borrar" value="Borrar">
		</form>
		<br>
		<div class="centrado">
    		<a href="/usuario/show/<?=$usuario->id?>">Detalles</a>

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
