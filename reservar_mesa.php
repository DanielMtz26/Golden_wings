<?php 
	require_once 'conexion.php';	

		$id=null;
		$correo=null;
		$fecha=null;
		$hora=null;
		
		class Reservar 
		{
			public function guarda()
			{
				$id=$_POST['id'];
				$correo=$_POST['correo'];
				$fecha=$_POST['fecha'];
				$hora=$_POST['hora'];
		
				$conexion= new conexion();			
				$query=$conexion->prepare("UPDATE reservaciones SET reservacion = :correo, fecha_inicio = :fecha, hora_inicio = :hora WHERE id = :id");

				$query->bindParam(':id',$id);
				$query->bindParam(':correo',$correo);
				$query->bindParam(':fecha',$fecha);
				$query->bindParam(':hora',$hora);
				
				$query->execute();
				if ($query) {
					echo "<script> alert('La reservacion de $correo ha sido guardado');window.location= 'inicio_user.php' </script>";
				}else{
					echo "<script> alert('Error al registrar');window.location= 'inicio_user.php' </script>";
				}
				
			}
		}

		$conexion=null;
		$reservar= new Reservar($id,$correo,$fecha,$hora);
		$reservar->guarda();

 ?>