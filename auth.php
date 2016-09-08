<?php 

$connect=mysqli_connect("localhost:3306","root","3a8xNbNo7Ij1frLB","maps");
if ($connect) {

$username=$_POST['mail'];
$pass=$_POST['pass'];

$sql=mysqli_query($connect, "SELECT * FROM usuarios WHERE mail='$username'");
if ($f=mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
	if ($pass==$f['pass']) {
		header("Location: profile.html");
	}else{
		echo '<script>alert("contraseña incorrecta")</script>';

		echo "<script>location.href='logan.html'</script>";
	}
}


}

?>