<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Notificaciones TESOEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- PUSH.MIN.JS -->
	<script src="js/push.min.js"></script>

</head>
<body>

	<!-- Script para la creacion de NOTIFICACION -->
	<script>
		Push.create("Bienvenido a TESOEM",{
			body: "Click aqui para obtener mas información sobre el TESOEM... Este es un Ejemplo de Notificación. Nombre: Zepeda Sierra Raul",
			icon: "img/logo.png",
			timeout: 4000,
			onClick: function () {
				window.location="http://tesoem.edomex.gob.mx/";
				this.close();
			}
		});
	</script>

	<!-- Información para Mostrar en la PWA o Pagina Web -->
	<!-- RESPONSIVO -->
	<div class="titulo">
		<h1>Ingenieria en Sistemas Computacionales.</h1>
	</div>

	<div class="cabecera">
		<p>
			Zepeda Sierra Raul. <br>
			Grupo: 8s12. <br>
			Matricula: 166010021.
		</p>
	</div>

	<div class="cuerpo">
		<p>
			Aplicación de Notificaciones. <br>
			PWA
		</p>
	</div>

</body>
</html>