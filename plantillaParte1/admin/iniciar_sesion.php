<?php include "includes/head_login.php"; ?>

<?php  
    $_GET["logout"] = isset($_GET["logout"])?$_GET["logout"]:null;
    if($_GET["logout"]==1){
        $sesion->logout();
        header("location: iniciar_sesion.php");
        exit;
    }
    if($sesion->sesion_verify()){
        header("location: index.php");
        exit;
    }
    if(isset($_POST["email"])){
        $resp = $sesion->login($_POST);
        if($resp["state"]){
            header("location: index.php");            
        } else{
            header("location: iniciar_sesion.php");
        }
        exit;        
    }
?>

<body> 
    <div class="diviniciosesion"> 
        <div class="container">
            <div class="contcien">
                <div class="cont">
                    <h1>Iniciar sesión<br>hlo21.com</h1>
                    <?php include "helpers/messageError.php"; ?>
                    <form action="" method="POST" >
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Contraseña</label>
                            <input type="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn green">Iniciar sesión</button>
                            <br><br>
                            <a href="">Recuperar contraseña</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>