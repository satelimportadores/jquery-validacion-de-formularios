<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap.css" rel="stylesheet" media="screen">
	<meta charset="UTF-8">
	<title>Jquery</title>
<script src="jquery-2.2.1.min.js"></script>

					<script type="text/javascript">


						function validador(email){
							var tester = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-]+)\.)+([a-zA-Z0-9]{2,4})+$/;
							return tester.test(email);
						}		

						function validar(){
							var nombre = document.getElementById('nombre').value;
							var email = document.getElementById('email').value;
							var pass1 = document.getElementById('pass1').value;
							var pass2 = document.getElementById('pass2').value;

							if (nombre == "") {
								$('#alert').html('ingrese nombre').slideDown(500);
								$('#nombre').focus();
								return false;
							}else{
								$('#alert').html('').slideUp(300);
							}

							if (email == "") {
								$('#alert').html('ingrese email').slideDown(500);
								$('#email').focus();
								return false;
							}else{
								$('#alert').html('').slideUp(300);
							}
							if (validador(email)==false) {
								$('#alert').html('ingrese email valido').slideDown(500);
								$('#email').focus();
								return false;
							}else{
								$('#alert').html('').slideUp(300);
							}
							if (pass1=="") {
								$('#alert').html('ingrese una contraseña').slideDown(500);
								$('#pass1').focus();
								return false;
							}else{
								$('#alert').html('').slideUp(300);
							}
							if (pass2=="") {
								$('#alert').html('confirma la contraseña').slideDown(500);
								$('#pass2').focus();
								return false;
							}else{
								$('#alert').html('').slideUp(300);
							}
							if (pass2!=pass1) {
								$('#alert').html('Las contraseñas no coinciden').slideDown(500);
								$('#pass2').val('');
								$('#pass2').focus();
								return false;
							}else{
								$('#alert').html('').slideUp(300);
							}


						}

					</script>

</head>
<body>
	<div class="container">
			<h1>Validacion de formularios</h1>
			<hr>
			<div class="formulario">
				
				<form action="" method="post" onsubmit="javascript:return validar(this);">
						<label for="nombre">Nombre</label><br>
						<input type="text" class="text" name="nombre" id="nombre" onblur="validar()"><br>

						<label for="email">Email</label><br>
						<input type="text" name="email" id="email" onblur="validar()"><br>

						<label for="password">Password</label><br>
						<input type="password" name="password" id="pass1" onblur="validar()"><br>

						<label for="confirmar">confirmar</label><br>
						<input type="password" name="confirmar" id="pass2" onblur="validar()"><br><br>

						<input type="submit">
						<div id="alert">Warning</div>
				</form>

			</div>



	</div>
	
</body>
</html>