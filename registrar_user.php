<?php 
	require_once 'conexion.php';
	

	$correo=$_POST['correo'];  
	$con=new mysqli("localhost","root","","golden_wings");

	$buscarcorreo = mysqli_query($con, "SELECT * FROM usuarios WHERE correo = '$correo' ;");
	if (mysqli_num_rows($buscarcorreo) > 0 ) {
	    echo "<script> alert('El correo $correo ya existe en esta página');window.location= 'index.php' </script>";
	}
	else
	{

		$nombre=null;
		$telefono=null;
		$correo=null;
		$psw=null;

		class Usuario 
		{
			public function guarda()
			{
				$nombre=$_POST['nombre'];
				$telefono=$_POST['telefono'];
				$correo=$_POST['correo']; 
				$psw=$_POST['psw'];

				$encpsw=md5($psw);
		
				$conexion= new conexion();			
				$query=$conexion->prepare('INSERT INTO usuarios VALUES (null,:nombre,:telefono,:correo,:encpsw)');

				$query->bindParam(':nombre',$nombre);
				$query->bindParam(':telefono',$telefono);
				$query->bindParam(':correo',$correo);
				$query->bindParam(':encpsw',$encpsw);
				
				$query->execute();
				if ($query) {
					echo "<script> alert('El correo $correo ha sido registrado');window.location= 'index.php' </script>";
				}else{
					echo "<script> alert('Error al registrar');window.location= 'index.php' </script>";
				}
				
			}
		}

		$conexion=null;
		$user= new Usuario($nombre,$telefono,$correo,$psw);
		$user->guarda();
	} 
?>

