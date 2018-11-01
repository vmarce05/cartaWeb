<!DOCTYPE html>
<html>
<head>
	<title>Crear Cuenta</title>

	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--IMPORT MATERIALIZE.CSS -->
	<link rel="stylesheet" type="text/css" href="css/materialize.css" media="screen,projection"/>

    
   
	<!-- OPTIMIZA EL SITIO WEB PARA MOVILES -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<script type="text/javascript" src="js/scripts.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script> 
</head>
<body>


	
	 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre" id="nombre" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Apellido" id="apellido" type="text" class="validate">
          <label for="apellido">apellido</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="User" id="user" type="text" class="validate">
          <label for="user">User</label>
        </div>
        <div class="input-field col s6">
          <input id="pass" type="password" class="validate">
          <label for="pass">pass</label>
        </div>
      </div>
      <div class="row">
	      <div class="input-field col s6">
	      	&nbsp;
	      </div>
	      <div class="input-field col s4">
	  		<a class="waves-effect waves-light btn-large">Crear Cuenta</a>
	  	</div>
  	</div>
    </form>

  </div>

  
        


<!--IMPORTA JQUERY -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script> 
<script type="text/javascript" src="js/init.js"></script>
</body>
</html>