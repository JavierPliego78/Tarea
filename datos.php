<?php
$nombre = $_POST ['txtNombre'];
$email = $_POST ['txtEmail'];
$telefono = $_POST ['txtTelefono'];
$sitioweb = $_POST ['txtSitioWeb'];
$asunto = $_POST ['txtAsunto'];
$mensaje = $_POST ['txtMensaje'];

/*$nombre = $_GET ['txtNombre'];
$email = $_GET ['txtEmail'];
$telefono = $_GET ['txtTelefono'];
$sitioweb = $_GET ['txtSitioWeb'];
$asunto = $_GET ['txtAsunto'];
$mensaje = $_GET ['txtMensaje'];*/
echo $nombre. "/" . $email. "/" . $telefono. "/" . $sitioweb. "/" . $asunto. "/" . $mensaje;
?>