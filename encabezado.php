<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con PostgreSQL usando PDO">
    <meta name="author" content="Odenfis">
    <title>PostgreSQL-PHP | Por Zavala Castillo</title>
    <link href="./bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar d-flex align-content-center g-4 navbar-expand-lg navbar-light bg-success fixed-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-amd" viewBox="0 0 16 16">
            <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0H.334ZM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2V9.72Z"/>
        </svg>
        <a class="navbar-brand ml-4" target="_blank" href="https://tecsup.instructure.com/courses/25788">
            <p class="m-0">PostgreSQL-PHP | Por Zavala Castillo</p>
        </a>
        <div class="collapse navbar-collapse pl-4" id="miNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./listar.php">Listar (arreglo)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listarCursor.php">Listar (cursor)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./formulario.php">Agregar</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
        