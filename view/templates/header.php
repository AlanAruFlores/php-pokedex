<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./public/css/formulario.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/css/estilos.css">
    <!-- <link rel="stylesheet" href="./public/css/info.css"> -->
    <title>Pokedex</title>
</head>
<body>
    <header class="header">
        <div class="header__div">
            <h1 class="header__titulo">Poke<span class="header__sufijo">Info</span></h1>
            <img src="./public/imagenes/pikachu.svg" class="header__logo">
        </div>

        <?php if (isset($_SESSION["usuario"])):?>
            <a href="<?="$url/php/cerrar_sesion.php"?>"class="header__link">Cerrar Sesion</a>
        <?php endif;?>

        
        <?php if (!isset($_SESSION["usuario"])):?>
            <a href="#" id="loginButton" class="header__link">Login</a>
        <?php endif;?>
    </header>
