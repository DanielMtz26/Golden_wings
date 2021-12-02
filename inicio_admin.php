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
    <title>Inicio Administrador</title>
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

	<div class="container"><br>
		<center>
			<h1>Bienvenido Admin</h1>
			<br><br>
			<h3>Reservaciones</h3>

			<table class="table" style="text-align:center; vertical-align: middle;">
					  <thead class="table-dark">
					  	<tr>
					  		<th># Mesa</th>
					  		<th>Capacidad</th>
					  		<th>Reservacion</th>
					  		<th>Fecha</th>
					  		<th>Hora</th>
					  		<th>Acciones</th>
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
			 						   <td>".$row['capacidad']."</td>
			 						   <td>".$row['reservacion']."</td>
			 						   <td>".$row['fecha_inicio']."</td>
			 						   <td>".$row['hora_inicio']."</td>
			 						   <td><form action='eliminar_reservacion_admin.php' method='POST'>
			 						   					<input type='hidden' id='id' name='id' value='".$row['id']."'required>
					  									<input type='hidden' id='correo' name='correo' value='".$correo."' required>
											  			<button type='submit' class='btn btn-danger btn-block'>Eliminar</button>
											  		</form>
			 						   </tr>";
			 						   
			 						   
			 					  }while ($row=mysqli_fetch_array($query));
			 				   }

					  	 ?>
					  </tbody>


				 </table>
		</center>
	</div>
</body>
</html>

<?php 

}

?>

