<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="./assets/css/info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <title>Pokedex</title>
</head>
<body>
    <?php require_once("./includes/header.php")?>

    <main class="main poke__info">
        <div class="poke__imagen">
            <img src="./assets/imagenes/pokemons/Charizard.png" alt="pokemon">
        </div>
        <div class="poke__tipo">
            <h1 class="poke__nombre">Charizard</h1>
            <div class="poke__iconos">
                <img src="assets/imagenes/tipos/tipo_fuego.png">
                <img src="assets/imagenes/tipos/tipo_dragon.png">
            </div>
        </div>
        <div class="poke__descripcion">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente nihil officiis quas molestias suscipit. Sed maiores neque repellat natus repellendus nesciunt, maxime, beatae tempore expedita quas eaque illo voluptas explicabo itaque quod magnam laborum, nobis cumque! Asperiores, porro sed. Culpa quia dolore quos officia iusto, quod vel molestiae nisi cumque aliquid reprehenderit ducimus maxime ad, autem rem, omnis assumenda architecto. 
        </div>
    </main>

    <!--Pop up login-->
    <!-- <div class="popup">
        <a href="#" class="popup__cerrar"><i class="fa-solid fa-xmark"></i></a>
        <form class="popup__formulario" action="#" method="post">
            <h2 class="popup__titulo">Login</h2>
            <input type="text" placeholder="Usuario" required>
            <input type="text" placeholder="Contraseña" required>
            <input type="submit" value="Entrar">
        </form>
    </div>  -->

    <?php require_once("./includes/footer.php")?>

</body>
</html>