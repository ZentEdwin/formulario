<?php 
	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	if(mail('ezenteno@elearning.com.gt', $asunto, $mensaje)){
		echo "mail enviado";
	}else{
		echo "uyuyuyuyuy";
	}
 ?>