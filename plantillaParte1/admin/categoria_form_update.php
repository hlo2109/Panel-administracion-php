<?php include "includes/head.php"; ?>
<?php 
    if(!isset($_GET["id"]) || $_GET["id"]==''){
        header("location: categorias.php");
    }

    if(isset($_POST["name"])){
        $response = $categories->update($_POST, $_GET['id']);
        if($response["state"]){ 
            header("location: categorias.php");
        } else{ 
            header("location: categoria_form_update.php");
        }
        exit;
    } 
    
    $categorie = $categories->select($_GET["id"]);
?>

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
                    <form action="" method="POST" class="pequenio">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="nombre" value="<?php echo $categorie["name"] ?>" name="name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug:</label>
                            <input type="slug" name="slug" value="<?php echo $categorie["slug"] ?>" placeholder="Slug">
                        </div>
                        <?php if($categorie["father"]!=0): ?>
                        <div class="form-group">
                            <label for="padre">Padre:</label>
                            <select name="father" id="padre">
                                <option value=''>Seleccionar</option>
                                <?php 
                                    foreach ($categories->listFathers($_GET['id']) as $key => $item) {
                                ?>
                                    <option <?php echo ($categorie["father"]==$item["id"])?'selected':'' ?> value="<?php echo $item["id"] ?>" ><?php echo $item['name'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="description" id="descripcion"><?php echo $categorie["description"] ?></textarea>
                        </div>
                        <?php include "helpers/messageError.php"; ?>
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
