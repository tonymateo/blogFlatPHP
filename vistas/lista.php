<?php $titulo = 'Cosas que les pasa a los superheroes' ?>

<?php ob_start() ?>
	<h1>Cosas de superheroes</h1>
	<ul>
		<?php //muestro de cada entrada el titulo
			foreach($entradas as $entrada): ?>
			<li>
				<a href="/archivos_php/blogFlatPHP/detalle.php?id=<?= $entrada['id'] ?>">
					<?= $entrada['titulo'] ?>
				</a>
			</li>
			<?php endforeach ?>	
		</ul>
	<?php //ob_get_clean -> Obtener contenido del  búfer actual y eliminar el búfer de salida actual
	$contenido = ob_get_clean() ?>

<?php include 'plantilla.php' ?>