<?php require_once 'views/head.php' ?>

    <div class="contenedor">
        <h2 class="tituloFoto"><?php 
        if(!empty($foto['titulo'])){
            echo $foto['titulo'];
        } else {
            echo $foto['imagen'];
        }
        ?></h2>
        <div class="foto">
            <img class="img" src="images/<?php echo $foto['imagen'] ?>" alt="">
        </div>
        <p class="descripcion"><?php echo $foto['texto'] ?></p>
        
        <a class="volver" href="http://localhost/php/galeria/index.php">
            Volver
        </a>

    </div>
    
<?php require_once 'views/foot.php' ?>