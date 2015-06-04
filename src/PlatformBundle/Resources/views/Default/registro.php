<?php

// Configurcion de los datos
$dbhost='localhost';
$dbname_User='root';
$dbname='plataforma_virtual';

// Conexion a la base de datos
$conectar_db=mysqli_connect($dbhost, $dbname_User) or die (mysqli_error("Conexión denegada, el Servidor que solicitas No Existe"));
mysqli_select_db($conectar_db,"$dbname") or die(mysqli_error("La Base de Datos <b>$dbname</b> No Existe"));

if (isset($_POST["nombreUsuario"] ) ) {
	$nombreCompleto = $_POST["nombreCompleto"];
	$nombreUsuario = $_POST["nombreUsuario"];
	$password = $_POST["password"];	
	$email = $_POST["email"];
	$tipo = $_POST["tipo"];

	// if que cmuestra mensaje si los campos estan vacios
	if ($nombreCompleto==NULL|$nombreUsuario==NULL|$password==NULL|$email==NULL|$tipo==NULL) {
		//echo "Hay Campos Vacios";
		header('Location: formularioCrearUsuario.html');
	}else{

		//Todo parece correcto procedemos con la inserccion
		$query = "INSERT INTO usuarios (nombreCompleto,nombreUsuario, password, email, tipo) VALUES ('$nombreCompleto','$nombreUsuario','$password','$email','$tipo')";
		mysqli_query($conectar_db,$query) or die(mysqli_error($conectar_db));
		echo "El Usuario $nombreUsuario ha Sido Registrado de Manera Satisfactoria en el sistema.";
	}
}
?>