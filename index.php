<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Golden Wings</title>
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
	          <a class="nav-link" href="" data-mdb-toggle="modal"data-mdb-target="#staticBackdrop">Iniciar sesión</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="registro.php">Registrate</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#"></a>
	        </li>
	      </ul>
	      <span class="navbar-text" style="color: white;">
	      	
	      </span>
	    </div>
	  </div>
	</nav>

<div style="background-image: url('img/fondo2.jpg'); ">
	<!-- Background image -->
	<div
          class="p-5 text-center bg-image"
          style="background-image: url('img/banner.jpg');
          height: 400px;">
	    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
	      <div class="d-flex justify-content-center align-items-center h-100">
	        <div class="text-white">
	          <h1 class="mb-3">Golden Wings</h1><br>
	          <h5 class="mb-3">¡Puedes separar tu mesa desde aquí!</h5>
	          <button type="button" class="btn btn-outline-light btn-lg" data-mdb-ripple-color="dark">Reservar</button>
	        </div>
	      </div>
	    </div>
  </div>
  

	<!-- Modal -->
	<div
	  class="modal fade"
	  id="staticBackdrop"
	  data-mdb-backdrop="static"
	  data-mdb-keyboard="false"
	  tabindex="-1"
	  aria-labelledby="staticBackdropLabel"
	  aria-hidden="true"
	>
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header" style="background-color: #262626;">
	        <h4 class="modal-title w-100 text-center" id="staticBackdropLabel" style="color: white;">Ingresa tus credenciales</h4>
	        <button style="color:white;" 
	          type="button"
	          class="btn-close btn-light"
	          data-mdb-dismiss="modal"
	          aria-label="Close"
	        ></button>
	      </div>
	      <div class="modal-body">
	      	<div class="container" style="width:80%;">
	      		<center><img src="img/logo_user1.png" style="width:40%;"></center><br>
	      	   	
	      	   	<form method="POST" action="login.php">
	      	   	  	<div class="form-outline">
					  <input
					    type="email"
					    id="correo"
					    name="correo"
					    class="form-control"
					    data-mdb-showcounter="true"
					    maxlength="100" required
					  />
					  <label class="form-label" for="correo">Correo</label>
					  <div class="form-helper"></div>
					</div>
					<br>
					<div class="form-outline">
					  <input
					    type="password"
					    id="psw"
					    name="psw"
					    class="form-control"
					    data-mdb-showcounter="true"
					    maxlength="15" required
					  />
					  <label class="form-label" for="psw">Contraseña</label>
					  <div class="form-helper"></div>
					</div>
					<br> <center><label>¿No tienes una cuenta? registrate <a href="registro.php">aquí</a></label></center><br>
					
					<button type="submit" class="btn btn-warning btn-block" data-mdb-ripple-color="dark">
		  			Ingresar
					</button>
				</form>

			</div>
			<br>
	      </div>
	      
	    </div>
	  </div>
	</div>

	  <br>
	  <div class="container-fluid" style="background-color:#FFA900;">
	  <br><center><h1 style="color:white;">Encuentranos</h1></center><br>
	  </div>
	  <br>
	  
	  <div class="container">
	  	
	  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14415.907160622557!2d-100.98482273022462!3d25.405587499999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86880d33b7b664f1%3A0xb7ae048b996ef640!2sGolden%20Wings%20Otilio!5e0!3m2!1ses-419!2smx!4v1636275394476!5m2!1ses-419!2smx" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

	  </div>

	  <br>
	  <div class="container-fluid" style="background-color:#FFA900;">
	  <br><center><h1 style="color:white;">Conocenos</h1></center><br>
	  </div>

	  <br>
	  <div class="container">
	  	<div class="row">
	  		<div class="col-1">
	  			
	  		</div>
	  		<div class="col-5" style="background-color: white; border-radius: 30px;">
	  			<br>
	  			<center><h2>Misión</h2><br>
	  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  			</center>
	  			<br>
	  		</div>
	  		<div class="col-1">
	  			
	  		</div>
	  		<div class="col-5" style="background-color: white; border-radius: 30px;">
	  			<br>
	  			<center><h2>Visión</h2><br>
	  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  			</center>
	  			<br>
	  		</div>
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