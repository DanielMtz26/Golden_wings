<?php 
$con=new mysqli("localhost","root","","golden_wings");
session_start();
$correo= $_SESSION["correo"];

if ($correo == null) {
	echo "<script> alert('No existe sesión iniciada');window.location= 'index.php' </script>";
}else{

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Inicio Usuario</title>
    <!-- MDB icon 
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">Bienvenido</a>
	    
	    <button
	      class="navbar-toggler"
	      type="button"
	      data-mdb-toggle="collapse"
	      data-mdb-target="#navbarText"
	      aria-controls="navbarText"
	      aria-expanded="false"
	      aria-label="Toggle navigation">
	      <i class="fas fa-bars"></i>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarText">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link" href="logout.php">Cerrar Sesión</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="registro.php"></a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#"></a>
	        </li>
	      </ul>
	      <span class="navbar-text" style="color: white;">
	      	<?php 
	      		echo $correo;

	      	 ?>
	      </span>
	    </div>
	  </div>
	</nav>
	<br>
	<div class="container">
		<center><h1>Bienvenido a Golden wings</h1></center>
		<br>
		<div class="row">
			<div class="col-6">
				<center><h3>Reservar</h3></center>
				
				 <table class="table" style="text-align:center; vertical-align: middle;">
					  <thead class="table-dark">
					  	<tr>
					  		<th># Mesa</th>
					  		<th>Capacidad</th>
					  		<th>Reservar</th>
					  	</tr>
					  </thead>
					  <tbody>
					  	<?php 
					  		$query=mysqli_query($con,"SELECT * FROM reservaciones ORDER BY id");

							  if ($row=mysqli_fetch_array($query))
			 				   {
			 					
			 					  do{	
			 
			 						   echo "<tr>
			 						   <td>".$row['mesa']."</td>   
			 						   <td>".$row['capacidad']."</td>";

			 						   $disponible = $row['reservacion'];

			 						   if ($disponible == null) {
			 						   		echo "<td><form action='reservar_mesa.php' method='POST'>
			 						   					<input type='hidden' id='id' name='id' value='".$row['id']."'required>
					  									<input type='hidden' id='correo' name='correo' value='".$correo."' required>
					  									<input type='date' name='fecha' required>
					  									<input type='time' name='hora' required><br><br>
											  			<button type='submit' class='btn btn-warning'>Reservar</button>
											  		</form> </td> </tr>";
			 						   }else{
			 						   	echo "<td><strong>No disponible</strong></td>
			 						   </tr>";
			 						   }
			 						   
			 					  }while ($row=mysqli_fetch_array($query));
			 				   }

					  	 ?>
					  </tbody>


				 </table>
			</div>
			<div class="col-6">
				<center><h3>Reservaciones</h3></center>
				
				 <table class="table" style="text-align:center; vertical-align: middle;">
				 		<thead class="table-dark">
						  	<tr>
						  		<th>Reservaciones</th>
						  		<th>Fecha</th>
						  		<th>Hora</th>
						  		<th>Acciones</th>
						  	</tr>
					 	</thead>
					 	<tbody>
					 		<?php 
					  		$query3=mysqli_query($con,"SELECT * FROM reservaciones WHERE reservacion = '$correo'");

							  if ($row3=mysqli_fetch_array($query3))
			 				   
			 				   {
			 					
			 					  do{	
			 
			 						   echo "<tr>
			 						   <td>".$row3['mesa']."</td>   
			 						   <td>".$row3['fecha_inicio']."</td>
			 						   <td>".$row3['hora_inicio']."</td>
			 						   <td><form action='eliminar_reservacion.php' method='POST'>
			 						   					<input type='hidden' id='id' name='id' value='".$row3['id']."'required>
					  									<input type='hidden' id='correo' name='correo' value='".$correo."' required>
											  			<button type='submit' class='btn btn-danger btn-block'>Eliminar</button>
											  		</form>
											  		<form action='reporte_reservacion.php' method='POST'><br>
											  			<input type='hidden' id='id' name='id' value='".$row3['id']."'required>
					  									<input type='hidden' id='correo' name='correo' value='".$correo."' required>
											  			<button type='submit' class='btn btn-info btn-block'>Generar PDF</button> 
											  		</form></td> </tr>";

			 					 	} while ($row3=mysqli_fetch_array($query3));
			 				   }else{
			 				   	echo"<tr><td><strong>No hay reservaciones</strong></td></tr>";
			 				   }
					  	?>
					 	</tbody>				 	
				 </table>
			</div>
		</div>
	</div>
	<br><br>

</body>
</html>

<?php 	
}
 ?>
