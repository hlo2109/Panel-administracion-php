<?php include "includes/head.php"; ?>
<?php  
    if(isset($_POST["action"]) && $_POST["action"]=="delete" ){
        $response = $users->delete($_POST);  
        header("location: usuarios.php"); 
        exit;
    }   
?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Usuarios</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <span>Usuarios</span>                
            </div>
            <div class="divContInterno">
                <div class="divTable">
                    <div class="filtro">                        
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="usuario_form.php" class="btn green">Crear nuevo</a>
                            </div>
                            <div class="col-xs-6">
                                <form action="" method="get">
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
                                    <th>Nombre</th> 
                                    <th>Email</th> 
                                    <th width="200">Perfil</th>
                                    <th width="90">Opciónes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                    $results =$users->list();
                                    foreach ($results["data"] as $key => $item) {
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $item["id"] ?></td>
                                    <td ><?php echo $item["name"] ?></td> 
                                    <td ><?php echo $item["email"] ?></td> 
                                    <td><?php echo $item["profile"] ?></td>
                                    <td class="text-center">
                                        <a href="usuario_form_update.php?id=<?php echo $item["id"] ?>" class="edit"><i class="fas fa-edit"></i></a>
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
                    <div class="paginador">
                        <?php 
                            $search = isset($_GET["search"])?$_GET["search"]:"";
                            $params = "&search=".$search;
                        ?>
                        <ul>
                            <?php 
                                if($results["paginaAnterior"]){
                            ?>
                                <li><a href="usuarios.php?pag=<?php echo $results["paginaAnterior"].$params; ?>" class="btn">Anterior</a></li>
                            <?php } ?>

                            <?php for ($i=1; $i <= $results["totalPaginas"]; $i++) {  ?>

                            <li class="<?php echo ($i==$results["pag"])?'active':'' ?>">
                                <a href="usuarios.php?pag=<?php echo $i.$params; ?>" class="btn"><?php echo $i ?></a>
                            </li>

                            <?php } ?>

                            <?php 
                                if($results["paginaSiguiente"]){
                            ?>
                                <li><a href="usuarios.php?pag=<?php echo $results["paginaSiguiente"].$params; ?>" class="btn">Siguiente</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>
