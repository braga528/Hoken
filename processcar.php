<?php

$connect=mysqli_connect("localhost:3306","root","3a8xNbNo7Ij1frLB","maps");
if ($connect) {

	$vehicle=$_POST['car'];
	$driver=$_POST['id'];
	$marc=$_POST['marca'];
	$model=$_POST['modelo'];
	$numberPlaque=$_POST['placas'];
	$color=$_POST['color'];
	$circulation=$_POST['TC'];
	$secure=$_POST['seguro'];
	$insert="INSERT INTO automovil (marca, modelo, placas, color, TC, seguro) VALUES ('$marc','$model','$numberPlaque','$color','$circulation','$secure')";
	$result=mysqli_query($connect, $insert);

	if ($result) {
		echo "Automovil agregado <br/>";
	}
	else{
		echo "Error en la base de datos<br/>";
	}
	if (mysqli_close($connect)) {
		echo "Base de datos desconectada";
	}
	else{
		echo "Error en la desconexión";
	}
}
	$servername="localhost:3306";
	$ussername="root";
	$password="3a8xNbNo7Ij1frLB";
	$dbname="maps";

	$linking=mysqli_connect($servername,$ussername,$password);
	mysqli_select_db($linking,$dbname);
	$tildes=$linking->query("SET NAMES'utf8'");
	$resultado=mysqli_query($linking,"SELECT * FROM automovil");
	while($fila = mysqli_fetch_array($resultado)){
	//	mostrarDatos($fila);
	}
mysqli_free_result($resultado);
mysqli_close($linking);

?>