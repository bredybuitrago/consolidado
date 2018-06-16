<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/styleLogin.css') ?>">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body">
	<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="cursor: pointer;">Ingresar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="cursor: pointer;">Registrarse</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form method="post" action="<?= base_url('Welcome/principal') ?>">
					<div class="group">
						<label for="user" class="label">Usuario</label>
						<input id="user" type="text" class="input" name="user">
					</div>
					<div class="group">
						<label for="password" class="label">Contraseña</label>
						<input id="password" type="password" name="password" class="input" data-type="password">
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Mantener Registrado </label>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Ingresar">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">¿olvidaste tu contraseña?</a>
					</div>
				</form>
			</div>
			<div class="sign-up-htm">
				<form method="post" action="<?= base_url('Welcome/Registrarse') ?>" onsubmit="return validar()">
					<div class="group">
						<label for="name" class="label">Nombre</label>
						<input id="name" name="name" type="text" class="input" required>
					</div>
					
					<div class="group">
						<label for="lastname" class="label">Apellido</label>
						<input id="lastname" name="lastname" type="text" class="input" required>
					</div>
					<div class="group">
						<label for="r_user" class="label">Usuario</label>
						<input id="r_user" name="r_user" type="text" class="input" required>
					</div>

					<div class="group">
						<label for="r_pass" class="label">Password</label>
						<input id="r_pass" type="password" name="r_pass" class="input" data-type="password" required>
					</div>
					<div class="group">
						<label for="r_pass_r" class="label">Repetir Password</label>
						<input id="r_pass_r" type="password" class="input" name="r_pass_r" data-type="password" required>
					</div>
					<div class="group">
						<label for="email" class="label">Email</label>
						<input id="email" type="email" name="email" class="input">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Registrarse">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1">Ya soy miembro?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php if (isset($msj)): ?>
	<?php if ($msj === 'ok'): ?>
		<script> swal("Bien hecho!", "Registrado correctamente!", "success"); </script>
		<?php else: ?>
			<?php if ($msj === 'error'): ?>
				<script> swal("error!", "No se ingreso correctamente, intenta de nuevo!", "error"); </script>
				<?php else: ?>
				<script> swal("error!", "Credenciales erroneas!", "error"); </script>
			<?php endif ?>
	<?php endif ?>
<?php endif ?>


<script>
	function validar() {
		var pass1 = document.getElementById('r_pass').value;
		var pass2 = document.getElementById('r_pass_r').value;

		if (pass1 !== pass2) {
			alert('la confirmación de password debe coincidir, intentalo de nuevo!');
			return false;
		}
	}
</script>

</body>
</html>