<?php
session_start();
include('inc/mensaje.php');
include('inc/conexion.php');

$usuario=$_REQUEST['usuario'];
$clave=$_REQUEST['clave'];

$sql="SELECT * FROM `login`, usuario WHERE login.email=usuario.login_email and login.email='$usuario' AND login.clave='$clave' and usuario.habilitado='Si'";

$consulta=$conexion->query($sql);

if($result=mysqli_fetch_array($consulta)){

	$_SESSION['tipoUsuario']=$result[2];

	switch ($result[2]){ 

		case 'Administrador': 
			header('Location:administrador.php'); 
			break; 
		case 'Bibliotecario': 
			header('Location:bibliotecario.php'); 
			break; 
		case "Usuario": 
			header('Location:listadoPrestamo.php'); 
			break; 
				
		default: 
			mensaje( "Revisa usuario contraseña", 'login.php', 'error.png'); 

		}//fin del switch
	}//fin del if
?>