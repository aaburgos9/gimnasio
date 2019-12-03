
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<nav>
	<ul>
		<li> <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-blue w3-large">Registrar</button></li>
		<li>  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue w3-large">Login</button></li>
	</ul>
</nav>


<div class="w3-container">


	<div id="id01" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

			<div class="w3-center"><br>
				<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>

				<img src="http://localhost/GIMNASIOS/views/css/logo.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
			</div>

			<form class="w3-container" action="/action_page.php"   method="post">
				<div class="w3-section">
					<label><b>Nombre de usuario</b></label>
					<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="introduzca su nombre de usuario" name="usuarioIngreso" required>
					<label><b>Contraseña</b></label>
					<input class="w3-input w3-border" type="password" placeholder="introduzca su Contraseña" name="passwordIngreso" required>
					<button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Iniciar</button>

				</div>
			</form>

			<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
				<span class="w3-right w3-padding w3-hide-small"><a href="#">¿Se te olvidó tu contraseña?</a></span>
			</div>

		</div>
	</div>
</div>

<?php

$ingreso= new MvcController();
$ingreso->ingresarUsuariosController();
if(isset($_GET["action"])){
	if ($_GET["action"] == "fallo") {
		echo "fallo al ingresar";
	}
}


?>

<div class="w3-container">


	<div id="id02" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

			<div class="w3-center"><br>
				<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				<h2>Registro</h2>
			</div>

			<form class="w3-container" action="/action_page.php"   method="post">
				<div class="w3-section">
					<label><b>Nombre de usuario</b></label>
					<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="introduzca su nombre de usuario" name="usuarioRegistro" required >
					<label><b>Contraseña</b></label>
					<input class="w3-input w3-border" type="password" placeholder="introduzca su Contraseña" name="passwordRegistro" required>

					<label><b>Correo</b></label>
					<input class="w3-input w3-border" type="text" placeholder="introduzca su Correo" name="emailRegistro" required>		
					<label><b>Rol</b></label>
					<select class="w3-input w3-border w3-white" name="rolRegistro" required >
						<option value="null" name="rolRegistro" required>--</option>
						<option value="monitor" name="rolRegistro" required>MONITOR</option>
						<option value="socio" name="rolRegistro" required>SOCIO</option>
					</select>	
					<button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Registrar</button>




				</div>
			</form>

		</div>
	</div>
</div>

<?php

$registro=new MvcController();
$registro->registroUsuarioController();
?>