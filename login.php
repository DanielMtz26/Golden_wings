<?php 	

	require_once 'conexion.php';

	$correo=$_POST['correo'];
	$psw=$_POST['psw'];

	$encpsw=md5($psw);

	$conexion= new conexion();
	$query = $conexion->prepare("SELECT * FROM admin WHERE correo = :correo AND psw = :encpsw");
	$query->bindParam(":correo",$correo);
	$query->bindParam(":encpsw",$encpsw);
	$query->execute();

	$admin = $query->fetch(PDO::FETCH_ASSOC);

	if ($admin) {
		session_start();
		$_SESSION["correo"]=$correo;
		header("Location: inicio_admin.php");
	
	}else{
		$conexion2= new conexion();
		$query2 = $conexion2->prepare("SELECT * FROM usuarios WHERE correo = :correo AND psw = :encpsw");
		$query2->bindParam(":correo",$correo);
		$query2->bindParam(":encpsw",$encpsw);
		$query2->execute();

		$usuario = $query2->fetch(PDO::FETCH_ASSOC);

		if ($usuario) {
			session_start();
			$_SESSION["correo"]=$correo;
			header("Location: inicio_user.php");
		}else{
			echo "<script> alert('Credenciales incorrectas');window.location= 'index.php' </script>";
		}
	}

?>