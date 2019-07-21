<?php include "includes/head.php"; ?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Categorías</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <a href="categorias.php"><i class="fas fa-biohazard" aria-hidden="true"></i> Categorías</a> <i class="fas fa-angle-right"></i> <span>Crear categoría</span>                
            </div>
            <div class="divContInterno">
                <div class="formularios">
                    <form action="" class="pequenio">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea id="descripcion"></textarea>
                        </div>
                        <div class="form-group text-center" >
                            <a href="categorias.php" class="btn">Cancelar</a>
                            <button class="btn green">Guardar</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>
