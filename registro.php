<? php 
$db_host="localhost";
$db_user="hoken_mid";
$db_password="confianza#1";
$db_name="maps";
$db_table_name="usuarios";
$db_connection=mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('La conexión a la base de datos no es correcta');
}

$subs_name = utf8_decode($_POST['name']);
$subs_last = utf8_decode($_POST['lastname']);
$subs_universidad = utf8_decode($_POST['university']);
$subs_carrera = utf8_decode($_POST['carrer']);
$subs_password = utf8_decode($_POST['pass']);
$subs_confpass = utf8_decode($_POST['cpass']);
$subs_correo = utf8_decode($_POST['mail']);

$resultado=mysql_query("SELECT * FROM" .$db_table_name. "WHERE Email = '" .$subs_correo. "'", $db_connection);

if (mysql_num_rows($resultado)>0) {
	header('Location: Fail.html');
} else {

	$insert_value = 'INSERT INTO `' .$db_name . '`.`' .$db_table_name. '`(`name` , `lastname` , `university` , `carrer` , `pass` , `cpass` , `mail`) VALUES ("' . $subs_name . '" , "'.subs_last.'" , "'.subs_universidad.'" , "'.subs_carrera.'" , "'.subs_password.'" , "'.subs_confpass.'" , "'.subs_correo.'")';
	
mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!retry_value) {
	die('Error: ' . mysql_error());
}

header('Location: logan.html');
}

mysql_close($db_connection);

?>