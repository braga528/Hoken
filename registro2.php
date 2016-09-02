<?php 

$connect=mysqli_connect("localhost:3306","root","3a8xNbNo7Ij1frLB","maps");
if ($connect) {
	echo "conexion exitosa.<br>";
	$id=$_POST['id'];
	$name=$_POST['name'];
	$last=$_POST['lastname'];
	$university=$_POST['university'];
	$carrer=$_POST['carrer'];
	$npassword=$_POST['pass'];
	$cpassword=$_POST['cpass'];
	$email=$_POST['mail'];
	$consulta="INSERT INTO usuarios (name, lastname, university, carrer, pass, cpass, mail) VALUES ('$name','$last','$university','$carrer','$npassword','$cpassword','$email')";
	echo $consulta;
	$resultado=mysqli_query($connect, $consulta);

	if ($resultado) {
		echo "perfil almacenado<br/>";
	}
	else{
		echo "error en la base de datos<br/>";
	}
	if (mysqli_close($connect)) {
		echo "desconexion realizada<br/>";
	}
	else{
		echo "error en la desconexion";
	}
}
	$servername="localhost:3306";
	$ussername="root";
	$password="3a8xNbNo7Ij1frLB";
	$dbname="maps";
	// function mostrarDatos($resultados){
	// 	if ($resultados !=NULL) {
	// 		echo "Nombre: ".$resultados;['name']."<br/>";
	// 		echo "Apellido: ".$resultados;['lastname']."<br/>";
	// 		echo "Universidad: ".$resultados;['university']."<br/>";
	// 		echo "Carrera: ".$resultados;['carrer']."<br/>";
	// 		echo "Correo: ".$resultados;['mail']."<br/>";
	// 	}
	// 	else{
	// 		echo "<br/>NO SE ENCUENTRAN MAS DATOS<br/>";
	// 	}
	// }
	$link=mysqli_connect($servername,$ussername,$password);
	mysqli_select_db($link,$dbname);
	$tildes=$link->query("SET NAMES'utf8'");
	$result=mysqli_query($link,"SELECT * FROM usuarios");
	while($fila = mysqli_fetch_array($result)){
	//	mostrarDatos($fila);
	}
mysqli_free_result($result);
mysqli_close($link);

?>