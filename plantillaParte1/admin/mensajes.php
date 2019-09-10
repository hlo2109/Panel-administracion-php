<?php include "includes/head.php"; ?>
<?php  
    if(isset($_POST["action"]) && $_POST["action"]=="delete" ){
        $response = $message->delete($_POST);  
        header("location: mensajes.php"); 
        exit;
    }   
?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Mensajes</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <span>Mensajes</span>                
            </div>
            <div class="divContInterno">
                <div class="divTable">
                    <div class="filtro">                        
                        <div class="row"> 
                            <div class="col-xs-12">
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
                                    <th >Nombre</th>
                                    <th >Asunto</th>
                                    <th >Email</th>
                                    <th >Teléfono</th>
                                    <th>Mensaje</th> 
                                    <th width="90">Opciónes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                    $results =$message->list();
                                    foreach ($results["data"] as $key => $item) { 
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $item["id"] ?></td>
                                    <td ><?php echo $item["name"] ?></td>
                                    <td ><?php echo $item["affair"] ?></td>
                                    <td ><?php echo $item["email"] ?></td>
                                    <td ><?php echo $item["phone"] ?></td>
                                    <td ><?php echo $item["message"] ?></td>
                                    <td class="text-center"> 
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
                    <?php $page = "mensajes.php"; include "includes/pagination.php" ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>
