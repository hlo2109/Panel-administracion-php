<?php include "includes/head.php"; ?>
<?php 
    if(isset($_POST["name"])){
        $response = $content->create($_POST);
        if($response["state"]){ 
            header("location: contenidos.php");
        } else{ 
            header("location: contenido_form.php");
        }
        exit;
    }  
?>
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
                    <form action="" method="POST" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">                                
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="nombre" name="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Url amigable:</label>
                                    <input type="slug" name="slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="categoria">Categoría</label>
                                    <select id="categoria" name="id_category">
                                        <option value="">Seleccionar Categoría</option>
                                        <?php foreach ($categories->todo() as $key => $item) { ?>
                                            <option value="<?php echo $item["id"] ?>" >
                                                <?php echo ($item["father"]!=0)?'----':'' ?>
                                                <?php echo $item["name"] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="contenido">Contenido:</label>
                                    <textarea id="contenido" name="content" class="editor"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">                                
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea id="descripcion" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <textarea id="tags" name="tags"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Imagen</label>
                                    <label class="loadimg">
                                        <div class="vistaprevia">
                                            <i class="far fa-file-image"></i>
                                        </div>
                                        <input type="file" name="file" onchange="vistaPrevia(event)">
                                    </label>
                                </div>
                            </div>
                        </div>          
                        <?php include "helpers/messageError.php"; ?>                  
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
    <script>
        function vistaPrevia(evt){ 
            let file = evt.target.files;
            file = file[0];
            if( file.type.match('image.*') ){
                let reader = new FileReader();
                reader.onload = (function(e){
                    return function(p){
                        let imagen = p.target.result;
                        $(".vistaprevia").html(`<image src="${imagen}" />`);
                    }
                })(file);
                reader.readAsDataURL(file);
            } else{
                alert("El formato no es valido.");
            }
        }
    </script>
</body>
</html>
