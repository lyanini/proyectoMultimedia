<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/ingresar.view.php';
}
else{
	header('Location: login.php');
}


?>