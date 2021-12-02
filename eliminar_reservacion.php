<?php 
	require_once 'conexion.php';	

		$id=null;
		$correo=null;
		
		class Eliminar 
		{
			public function guarda()
			{
				$id=$_POST['id'];
				$correo=$_POST['correo'];
		
				$conexion= new conexion();			
				$query=$conexion->prepare("UPDATE reservaciones SET reservacion = null, fecha_inicio = null, hora_inicio = null WHERE id = :id");

				$query->bindParam(':id',$id);
				
				
				$query->execute();
				if ($query) {
					echo "<script> alert('La reservacion de $correo ha sido eliminada');window.location= 'inicio_user.php' </script>";
				}else{
					echo "<script> alert('Error al eliminar');window.location= 'inicio_user.php' </script>";
				}
				
			}
		}

		$conexion=null;
		$eliminar= new Eliminar($id,$correo);
		$eliminar->guarda();

 ?>