
<?php require_once 'head.php' ?>

    <?php require_once 'header.php' ?>
    <section class="galeria">

        <?php foreach($fotos as $foto): ?>
        <a href="#" class="card">
            <img class="img" src="images/<?php echo $foto['imagen']?>" alt="">
        </a>
        <?php endforeach; ?>

        <div class="paginacion">
            <a class="izquierda" href="#">
               Página Anterior
            </a>
            <a class="derecha" href="#">
                Página Siguiente
            </a>
        </div>

<?php require_once 'foot.php' ?>