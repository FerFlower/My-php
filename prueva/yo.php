
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de mostrar una div en un periodo de tiempo</title>
	<style>
		#miDiv {
			display:block; /* Ocultar el div inicialmente */
		}
	</style>
	<script>
		window.onload = function() {
			// Mostrar el div después de 5 segundos
			setTimeout(function() {
				document.getElementById('miDiv').style.display = 'none';
			}, 5000); // 5000 milisegundos = 5 segundos
		}
	</script>
</head>
<body>
	<div id="miDiv">
		<p>Este es el contenido de mi div.</p>
	</div>
</body>
</html>

