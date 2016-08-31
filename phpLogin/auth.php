dd<?php

	$usuario = "braga528@gmail.com";
	$pass = "fulanito";
	if ($_POST["nNombre"]==$usuario && $_POST["nPassword"]==$pass)
	{
		session_start();
		$_SESSION["autenticado"]="SI";
		header ("Location: ../profile.html");
	}
	
		else 
		{
			header("Location: ../login.php");
	}
?>