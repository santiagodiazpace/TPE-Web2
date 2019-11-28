<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{BASE_URL}">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="css/estilos.css?n=1">
    <title>{$titulo}</title>
    <link rel="icon" type="image/png" href="imagenes/icono.png" />
</head>
<body>
    <header>
        <img id="logo_header" src="imagenes/logo_ed.jpg" alt="logo estudio">
        <nav>
            <a class="boton_nav" href="{BASE_URL}">Home</a>
            <a class="boton_nav" href="{URL_PRODUCTOS_ADMIN}">Ver productos</a>
            <a class="boton_nav" href="{URL_CATEGORIAS_ADMIN}">Ver categorias</a>
            <a class="boton_nav" href="{URL_LOGIN}">Iniciar sesión</a>
            <a class="boton_nav" href="{URL_LOGOUT}">Cerrar sesión</a>
            <a class="boton_nav" href="{URL_REGISTRO}">Registrarse</a>
        </nav>
    </header>