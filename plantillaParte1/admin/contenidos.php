<?php include "includes/head.php"; ?>
<?php  
    if(isset($_POST["action"]) && $_POST["action"]=="delete" ){
        $response = $content->delete($_POST);  
        header("location: contenidos.php"); 
        exit;
    }   
?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Contenidos</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <span>Contenidos</span>                
            </div>
            <div class="divContInterno">
                <div class="divTable">
                    <div class="filtro">                        
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="contenido_form.php" class="btn green">Crear nuevo</a>
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
                                    <th width="40px">Cod</th>
                                    <th width="200">Nombre</th>
                                    <th>Descripción</th>
                                    <th width="200">Categoría</th>
                                    <th width="90">Opciónes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $results =$content->list();
                                    foreach ($results["data"] as $key => $item) { 
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $item["id"] ?></td>
                                    <td ><?php echo $item["name"] ?></td>
                                    <td><?php echo $item["description"] ?>.</td>
                                    <td><?php echo $item["category"] ?></td>
                                    <td class="text-center">
                                        <a href="contenido_form_update.php?id=<?php echo $item["id"] ?>" class="edit"><i class="fas fa-edit"></i></a>
                                        <form action="" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $item["id"] ?>" >
                                            <input type="hidden" name="action" value="delete" >
                                            <button class="delete"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php $page = "contenidos.php"; include "includes/pagination.php" ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>
