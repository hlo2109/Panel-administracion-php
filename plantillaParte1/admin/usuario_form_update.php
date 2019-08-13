<?php include "includes/head.php"; ?>

<?php 
    if(!isset($_GET["id"]) || $_GET["id"]==''){
        header("location: usuarios.php");
    }
    
    if(isset($_POST["profile"])){
        $response = $users->update($_POST,$_GET["id"]);
        if($response["state"]){ 
            header("location: usuarios.php");
        } else{ 
            header("location: usuario_form_update.php?id=".$_GET["id"]);
        }
        exit;
    }  

    $user = $users->user($_GET["id"]);
?>

<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Usuarios</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <a href="usuarios.php"><i class="fas fa-users-cog" aria-hidden="true"></i> Usuarios</a> <i class="fas fa-angle-right"></i> <span>Crear usuario</span>                
            </div>
            <div class="divContInterno">
                <div class="formularios">                     
                    <form action=""  class="pequenio" method="POST">                        
                        <div class="form-group">
                            <label for="profile">Perfil</label>
                            <select id="profile" name="profile">
                                <option value="">---Seleccionar---</option>
                            <?php foreach ($profiles->select() as $key => $profile) { ?>
                                <option value="<?php echo $profile["id"] ?>" <?php echo ($profile["id"]==$user["id_profile"])?'selected':'' ?> >
                                    <?php echo $profile["name"] ?>
                                </option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="name" id="name" name="name" value="<?php echo $user["name"] ?>" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" id="email" value="<?php echo $user["email"] ?>" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <?php include "helpers/messageError.php"; ?>
                        <div class="form-group text-center" >
                            <a href="usuarios.php" class="btn">Cancelar</a>
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
