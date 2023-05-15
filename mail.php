<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index.html" );
}

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
/*$asunto = $_POST['asunto'];*/
$mensaje = $_POST['mensaje'];

var_dump($nombre);
$rta = mail('salinasjom@hotmail.com',"Mensaje desde la web : ",$mensaje);
var_dump($rta);
/*$rta = mail('salinasjom@hotmail.com',"Mensaje desde la web : $asunto",$mensaje);*/