<?php
//$urlActual= $_SERVER["REQUEST_URI"] + "?id=1" = ;
//si me pasan un id muestro el detalle si no, muestro el todo
require_once 'modelo.php';
echo "Webhook funcionando ok, fichero log.data con la fecha";
if(isset($_GET['id'])){
		require 'detalle.php';
	}else{//compruebo que el id que ha escrito existe en la base de datos
		require 'todo.php';
	}
?>
