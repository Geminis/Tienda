<?php
	require_once './conexion.php'; //'../modelo/conexionbd.php';

	$usu = ''.$_POST['usuario'];
	$clave = ''.$_POST['password'];
	$sql =  "SELECT * FROM usuarios WHERE cedula = '".$usu."' AND contrasena = '".$clave."';";

	try 
	{
		$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dbh->query('SET CHARACTER SET utf8');
		$stmt = $dbh->query($sql); 

		$user= $stmt->fetchAll(PDO::FETCH_OBJ);
		$dbh = null;
		echo '{"items":'. json_encode($user) .'}';
	} 
	catch(PDOException $e) 
	{
		echo '{"error":"No se pudo Conectar"}'; 
	}
?>