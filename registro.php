<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Golden Wings-Registro</title>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">Golden Wings</a>
	    
	    
	  </div>
	</nav>

	<div class="container-fluid" style="background-image: url('img/fondo2.jpg'); background-repeat: repeat;"><br><br>
		

		<div class="container" style="width:500px; background-color: white; border-radius: 30px;">
			<br><br><center><h1 style="color:#FFA900;">Ingresa tus datos</h1></center><br>
			
			<div class="container" style="width:90%;">
				<form method="POST" action="registrar_user.php">


					  <!-- Nombre -->
				      <div class="form-outline mb-4">
				        <input type="text" id="nombre" name="nombre" class="form-control" data-mdb-showcounter="true" maxlength="100" required />
				        <label class="form-label" for="nombre">Nombre</label>
				        <div class="form-helper"></div>
				      </div>

				      <!-- Telefono -->
				      <div class="form-outline mb-4">
					    <input type="number" id="telefono" name="telefono" class="form-control" data-mdb-showcounter="true" maxlength="10"  required />
					    <label class="form-label" for="telefono">Telefono</label>
					    <div class="form-helper"></div>
					  </div>
				
					  <!-- Email input -->
					  <div class="form-outline mb-4">
					  	<input type="email" id="correo" name="correo" class="form-control" data-mdb-showcounter="true" maxlength="100" required/>
					 	<label class="form-label" for="correo">Correo</label>
					  	<div class="form-helper"></div>
					  </div>

					  <!-- Password input -->
					  <div class="form-outline mb-4">
					    <input type="password" id="psw" name="psw" class="form-control" data-mdb-showcounter="true" maxlength="15" required />
					    <label class="form-label" for="psw">Password</label>
					    <div class="form-helper"></div>
					  </div>

					  <!-- ReCaptcha -->
						<center><div class="g-recaptcha" data-sitekey="6Lcblx0dAAAAAAWK1ro1AhkmUKVDeAFMwOxWuEGf"></div></center><br>
						<div id="status"></div>
						

						<!-- Submit button -->
					  <button type="submit" onclick="descargar()" class="btn btn-warning btn-block mb-4">Registrar</button>

						<script>
							function descargar(){
							var response = grecaptcha.getResponse();
							if (response.length != 0)
								window.location("registrar_user.php");
							else
								document.getElementById('status').innerHTML = "Acepta el captcha";
							}
						</script>
					  <br>

				</form>
			</div>

		</div>
		<br><br>
	</div>

	<!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

</body>
</html>