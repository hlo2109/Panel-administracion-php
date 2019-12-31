<?php include "includes/head.php"; ?>
<?php  
    if(isset($_POST["action"]) && $_POST["action"]=="delete" ){
        $response = $categories->delete($_POST);  
        header("location: categorias.php"); 
        exit;
    }   
?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Categorías</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <span>Categorías</span>                
            </div>
            <div class="divContInterno">
                <div class="divTable">
                    <div class="filtro">                        
                        <div class="row">
                            <div class="col-xs-6">
                                <?php if($config->menu_profile('categoria_form.php')): ?>
                                    <a href="categoria_form.php" class="btn green">Crear nuevo</a>
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-6">
                                <form action="">
                                    <input type="text" name="search" placeholder="Buscar....">
                                    <button class="btn">Buscar</button>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="conTable">
                        <table>
                            <thead>
                                <tr>
                                    <th>Cod</th>
                                    <th>Nombre</th>
                                    <th>Opciónes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $results =$categories->list();
                                    foreach ($results["data"] as $key => $item) { 
                                ?>
                                <tr>
                                    <td width="40px" class="text-center"><?php echo $item["id"] ?></td>
                                    <td>
                                        <?php echo ($item["father"]!=0)?'----':'' ?>
                                        <?php echo $item["name"] ?>
                                    </td>
                                    <td class="text-center" width="90">
                                        <?php if($config->menu_profile('categoria_form_update.php')): ?>
                                        <a href="categoria_form_update.php?id=<?php echo $item["id"] ?>" class="edit"><i class="fas fa-edit"></i></a>
                                        <?php endif; ?>
                                        <?php if($config->menu_profile('categoria_form.php')): ?>
                                        <form action="" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $item["id"] ?>" >
                                            <input type="hidden" name="action" value="delete" >
                                            <button class="delete"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php $page = "categorias.php"; include "includes/pagination.php" ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>
