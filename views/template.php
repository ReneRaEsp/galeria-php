
<?php require_once 'head.php' ?>

    <?php require_once 'header.php' ?>
    <section class="galeria">

        <?php foreach($fotos as $foto): ?>
        <a href="<?php echo 'photo.php?id='. $foto['id'] ?>" class="card">
            <img class="img" src="pictures/<?php echo $foto['imagen']?>"
             alt="<?php echo $foto['titulo'] ?>">
        </a>
        <?php endforeach; ?>

        <div class="paginacion">
            <?php if ($pagina_actual > 1): ?>
            <a class="izquierda" href="index.php?p=<?php echo $pagina_actual -1 ?>">
               Página Anterior
            </a>
            <?php endif ?>

            <?php if ($total_paginas != $pagina_actual): ?>
            <a class="derecha" href="index.php?p=<?php echo $pagina_actual +1 ?>">
                Página Siguiente
            </a>
            <?php endif ?>
        </div>

<?php require_once 'foot.php' ?>