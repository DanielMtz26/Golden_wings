<?php 

	ob_start();

	require_once 'conexion.php';
	$id=$_POST['id'];
	$correo=$_POST['correo'];


	$con=new mysqli("localhost","root","","golden_wings");
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PDF</title>
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
 	<div class="container-fluid" style="background-image:url('http://<?php echo $_SERVER['HTTP_HOST'] ?>/Golden_wings/img/fondo2.jpg');"> <br><br>
	 	<div class="container" style="background-color:white; width:40%; margin: 0 auto;">
	 		<div class="container-fluid" style="background-color:#FFA900; color:white;">
	 			<center><h1>Reservación</h1></center>
	 		</div>
	 		<center><br><br><img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/Golden_wings/img/logo_mesa.png" style="width:50%;">
	 		
	 			<h3>Mesa numero: <?php echo $id; ?></h3>
	 			<?php  
					$query1=mysqli_query($con,"SELECT * FROM usuarios WHERE correo = '$correo'");

					if ($row=mysqli_fetch_array($query1))
				 	{
				 		do{
				 		?>	
				 			<h3> A nombre de: <?php echo $row['nombre']; ?></h3>
				 		<?php
					 	}while ($row=mysqli_fetch_array($query1));
					 }
				?>

				<?php  
					$query2=mysqli_query($con,"SELECT * FROM reservaciones WHERE id = '$id'");

					if ($row2=mysqli_fetch_array($query2))
				 	{
				 		do{
				 		?>	
				 			<h3> Fecha: <?php echo $row2['fecha_inicio']; ?></h3>
				 			<h3> Hora: <?php echo $row2['hora_inicio']; ?></h3>
				 		<?php
					 	}while ($row2=mysqli_fetch_array($query2));
					 }
				?>

	 			<h3>Correo: <?php echo $correo; ?></h3><br>
	 		</center>
	 	</div><br><br><br>
 	</div>

 	<!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
 </body>
 </html>

 <?php 	

 $html=ob_get_clean();
 //echo $html;

 require_once 'libreria/dompdf/autoload.inc.php';
 use Dompdf\Dompdf;
 $dompdf = new Dompdf();

 $options = $dompdf->getOptions();
 $options->set(array('isRemoteEnabled' => true));
 $dompdf->setOptions($options);

 $dompdf->loadHtml($html);

 $dompdf->setPaper('letter');

 $dompdf->render();

 $dompdf->stream("Reservacion_mesa_$id.pdf", array("Attachment" => true))

 ?>