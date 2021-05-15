<?php include "includes/head.php"; ?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Contenidos</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <a href="contenidos.php"><i class="fab fa-contao" aria-hidden="true"></i> Contenidos</a> <i class="fas fa-angle-right"></i> <span>Crear contenido</span>                
            </div>
            <div class="divContInterno">
                <div class="formularios">
                    <form action="" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">                                
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="nombre" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Url amigable:</label>
                                    <input type="slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="categoria">Categoría</label>
                                    <select id="categoria">
                                        <option value="">Seleccionar Categoría</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="contenido">Contenido:</label>
                                    <textarea id="contenido" class="editor"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">                                
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea id="descripcion"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Imagen</label>
                                    <label class="loadimg"><i class="far fa-file-image"></i><input type="file"></label>
                                </div>
                            </div>
                        </div>                            
                        <div class="form-group text-center" >
                            <a href="contenidos.php" class="btn">Cancelar</a>
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
