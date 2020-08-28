<?php 

//Array POST
$nombre=$_POST['nombre'];
$apellido=$_POST['email'];
$email=$_POST['telefono'];

//funcion mail()
$dest="paualaluf@gmail.com";
$subject="Contacto pagina";
$mensaje="<h2>Probando envio</h2><p>Nombre:".$nombre."</p>";
$envio=mail($dest,$subject,$mensaje);

//verificar el envio
if($envio){
echo "<h2>Gracias ".$nombre." por comunicarse</h2>";
}else{
    echo "error en el envio :(";
}

?>