<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$config = parse_ini_file('/var/www/db.ini');
$con = mysqli_connect('localhost',$config['username'],$config['password'],$config['db']);

// get the post records
$email = $_POST['email'];

// database insert SQL code
$sql = "INSERT INTO `todo_list` (`item_id`,  `email`) VALUES ('0', '$email')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<a href="politica.html">Hemos recibido tus datos, en minutos nos pondremos en contacto contigo! Volver -></a>';
}

?>