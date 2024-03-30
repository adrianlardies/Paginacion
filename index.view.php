<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'> <!-- Sacado de google fonts, en este caso usamos Oswald. -->
	<link rel="stylesheet" href="estilos.css"> <!-- Relacionamos con nuestro css. -->
	<title>Paginacion</title>
</head>
<body>
	<div class="contenedor"> <!-- Este contenedor (div) nos sirve para centrar todo el contenido que tenemos. -->
		<h1>Articulos</h1>
		<section class="articulos">
			<ul> <!-- Agregamos una lista y por cada artículo tendremos un elemento li.-->
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id'] . '.- ' . $articulo['articulo']; ?></li>
				<?php endforeach; ?>
			</ul>
		</section>

		<div class="paginacion">
			<ul>
				<!-- Establecemos cuando el botón de "Anterior" estará deshabilitado. -->
				<?php if($pagina == 1): ?>
					<li class="disabled">&laquo;</li> <!-- &laquo son los botones de retroceso, l de left --> <!-- El class disabled es para que esté deshabilitado y con PHP indicaremos cuando queremos usar la clase y cuando no. -->
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li> <!-- Si no es la página 1 entonces la acción será regresar de nuestra página actual 1 (anterior). -->
				<?php endif; ?>

				<!-- Ejecutamos un ciclo para mostrar las páginas. -->
				<?php 
					for($i = 1; $i <= $numeroPaginas; $i++){ // Dentro de cada iteración del for queremos comprobar si la página actual es la que teniamos en la variable para poder agregarle la clase active.
						if ($pagina === $i) {
							echo "<li class='active'><a href='?pagina=$i'>$i</a></li>"; // La clase active representa la página actual en la cual el usuario está.
						} else {
							echo "<li><a href='?pagina=$i'>$i</a></li>"; // De otra forma nos enseñas el botón sin la clase.
						}
					}
				 ?>

				<!-- Establecemos la configuración del botón de "Siguiente", qué hará cuando estemos en la última página (deshabilitado) y qué hará cuando estemos en cualquier página que no sea la última. -->
				<?php if($pagina == $numeroPaginas): ?>
					<li class="disabled">&raquo;</li> <!-- r de right, botón de avance. -->
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
				<?php endif; ?>
					
			</ul>
		</div>
	</div>
</body>
</html>