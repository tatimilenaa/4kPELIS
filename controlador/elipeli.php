<?php

require_once('../modelo/eloquent.php');
require_once __DIR__ . '/../modelo/Pelicula.php';
use Modelo\Pelicula;

        $conexion = new Conexion();
        $capsule = $conexion->conectar();
      

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar_pelicula"])) {
    $id_a_eliminar = $_POST["eliminar_pelicula"];

    try {
        // Buscar la película con el ID proporcionado
        $pelicula = Pelicula::findOrFail($id_a_eliminar);

        // Eliminar la película
        $pelicula->delete();

        echo "Película eliminada exitosamente.";
    } catch (ModelNotFoundException $e) {
        echo "No se encontró la película con el ID proporcionado.";
    } catch (Exception $e) {
        echo "Ocurrió un error al eliminar la película: " . $e->getMessage();
    }
}

// Obtener todas las películas
$peliculas = Pelicula::all();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../stilos/stilo3.css">
    <link rel="stylesheet" href="../stilos/stiloIndex.css">
    <title>Eliminar Película</title>
</head>
<body>
    <header>
    <div class="logo-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-badge-4k" viewBox="0 0 16 16">
            <path d="M4.807 5.001C4.021 6.298 3.203 7.6 2.5 8.917v.971h2.905V11h1.112V9.888h.733V8.93h-.733V5.001zm-1.23 3.93v-.032a47 47 0 0 1 1.766-3.001h.062V8.93zm9.831-3.93h-1.306L9.835 7.687h-.057V5H8.59v6h1.187V9.075l.615-.699L12.072 11H13.5l-2.232-3.415z"/>
            <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/>
        </svg>
        <h1>Pelis</h1>
    </div>
</header>

    </header>
    <ul class="nav nav-tabs">

    <li class="nav-item">
    <a class="nav-link active" href="../vista/index.php">
        <div class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
</svg>
        </div>
        Menú
    </a>
</li>

  <li class="nav-item">
    <a class="nav-link active" href="../controlador/Actualizar.php">
    <div class="nav-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5m-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5"/>
</svg>
</div>
 Actualizar películas</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href="../controlador/elipeli.php">
    <div class="nav-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg>
</div>
 Eliminar pelicula</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href="../controlador/insertsuge.php">
        <div class="nav-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-paper-heart" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v1.133l.941.502A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765L2 3.133zm0 2.267-.47.25A1 1 0 0 0 1 5.4v.817l1 .6zm1 3.15 3.75 2.25L8 8.917l1.25.75L13 7.417V2a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1zm11-.6 1-.6V5.4a1 1 0 0 0-.53-.882L14 4.267zM8 2.982C9.664 1.309 13.825 4.236 8 8 2.175 4.236 6.336 1.31 8 2.982m7 4.401-4.778 2.867L15 13.117zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734Z"/>
</svg>
                </div>Sugerencias</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href="../modelo/api.php">
    <div class="nav-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
  <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
  <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
</svg>
</div>
 api</a>
  </li>

</ul>
    <section class="products">
        <?php 
        if (isset($peliculas) && $peliculas->count() > 0) {
            foreach ($peliculas as $pelicula) : ?>
                <article class="product">
                    <p>ID: <?php echo $pelicula->id; ?></p>
                    <p>Nombre: <?php echo $pelicula->nombre; ?></p>
                    <img src="https://image.tmdb.org/t/p/w500<?php echo $pelicula->poster; ?>" alt="<?php echo $pelicula->nombre; ?>" class="pelicula-poster">
                    <p>Descripción: <?php echo $pelicula->descripcion; ?></p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta película?');">
                        <input type="hidden" name="eliminar_pelicula" value="<?php echo $pelicula->id; ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </article>
            <?php endforeach;
        } else {
            echo "<p>No hay películas disponibles</p>";
        } ?>
    </section>

    <footer>
        <p>© 2024 4kPelis</p>
    </footer>
</body>
</html>
