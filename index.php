<?php 

// Nos conectamos a la base de datos.
try {
	$conexion = new PDO('mysql:host=localhost:3307;dbname=curso_paginacion', 'root', '');
} catch (PDOException $e) { // Para hacer catch de los errores que podamos tener.
	echo 'ERROR: '. $e->getMessage();
	die(); // Matamos la ejecución de la página por si acaso hay algún error.
}

// Establecemos el numero de página en la que el usuario se encuentra. // Utilizamos un condicional corto.
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1; // Si la página está seteada entonces quiero obtener su valor int, sino será 1.

// Establecemos cuantos post por página queremos cargar.
$postPorPagina = 5;

// Revisamos desde qué artículo vamos a cargar, dependiendo de la página en la que se encuentre el usuario.
// Comprobamos si la página en la que esta es mayor a 1, sino entonces cargamos desde el articulo 0.
// Si la página es mayor a 1 entonces hacemos un calculo para saber desde qué post cargaremos.
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0 ;

// Preparamos la consulta SQL.
$articulos = $conexion->prepare(" 
	SELECT SQL_CALC_FOUND_ROWS * FROM articulos
	LIMIT $inicio, $postPorPagina
"); // Ponemos doble comilla porque lleva variables dentro.
// Solo queremos que nos traiga 5 articulos por página, por eso establecemos el límite. El primer valor es desde dónde lo queremos y el segundo valor es la cantidad, en este caso será 5.
// Con SQL_CALC_FOUND_ROWS contamos cuántos artículos tenemos en nuestra bdd.
// Ejecutamos la consulta:
$articulos->execute();
$articulos = $articulos->fetchAll(); // Traemos todos los artículos y lo guardamos en artículos.

// Comprobamos que haya artículos, sino entonces redirigimos.
if (!$articulos) {
	header('Location: index.php');
}

// Calculamos el total de artículos, para después conocer el número de páginas de la paginación.
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total'); // Este FOUND_ROWS() lo podemos obtener gracias al SQL_CALC_FOUND_ROWS que hicimos previamente.
$totalArticulos = $totalArticulos->fetch()['total']; // Hacemos el fetch nos lo trae como array entonces debemos especificar 'total'.

// Calculamos el numero de páginas que tendra la paginación.
// Para esto dividimos el total de artículos entre los post por página
$numeroPaginas = ceil($totalArticulos / $postPorPagina); // ceil lo hacemos para redondear a un int con resultado redondeado al alza, para poder mostrar todos los artículos en las páginas que sean necesarias tener.

require 'index.view.php'; // De esta forma relacionamos el archivo de la vista con el de la lógica (éste).

?>