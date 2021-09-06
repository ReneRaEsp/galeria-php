<?php require_once 'views/head.php' ?>

    <div class="contenedorSubida contenedor">
        
        <form class="formulario" enctype="multipart/form-data" method="POST"
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h2 class="tituloFoto">Subir foto</h2>
            <div class="group">
                <label for="foto">Selecciona tu foto</label>
                <input type="file" id="foto" name="foto">
            </div>

            <div class="group">
                <label for="titulo">Titulo de la foto</label>
                <input class="tituloInput"
                 type="text" id="titulo" name="titulo">
            </div>

            <div class="group">
                <label for="descripcion">Descripcion: </label>
                <textarea name="descripcion" id="descripcion" 
                placeholder="Ingresa una descripción"
                cols="30" rows="10"></textarea>
            </div>

            <?php if(isset($error)): ?>
                <p class="error"> <?php echo $error ?></p>
            <?php endif ?>
            <div class="group">
                <button type="submit">
                    Subir Foto
                </button>
                <a href="index.php">
                    Volver
                </a>
            </div>
       
       </form>
    </div>

<?php require_once 'views/foot.php' ?>