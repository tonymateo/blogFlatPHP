<?php
//$urlActual= $_SERVER["REQUEST_URI"] + "?id=1" = ;
//si me pasan un id muestro el detalle si no, muestro el todo
require_once 'modelo.php';

if(isset($_GET['id'])){	
	if (isset($_GET['id']) == devolver_entrada_id($_GET['id'])) {
		require 'detalle.php';
	}else{//compruebo que el id que ha escrito existe en la base de datos
		echo "<script type='text/javascript'>alert ('El id que has introducido no existe')</script>";
		require 'todo.php';
	}
}else{
	echo "<script type='text/javascript'>alert ('La url introducida no existe')</script>";
}
?>