<?php include "includes/head_login.php"; ?>

<?php     
    if(isset($_POST["email"])){
        $resp = $sesion->reset_password($_POST);
        if($resp["state"]){
            header("location: iniciar_sesion.php");            
        } else{
            header("location: recuperar_contrasenia.php");
        }
        exit;        
    }
?>

<body> 
    <div class="diviniciosesion"> 
        <div class="container">
            <div class="contcien">
                <div class="cont">
                    <h1>Recuperar contraseña<br>hlo21.com</h1>
                    <?php include "helpers/messageError.php"; ?>
                    <form action="" method="POST" >
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="email">
                        </div> 
                        <div class="form-group text-center" >
                            <button class="btn green">Recuperar contraseña</button>
                            <br><br>
                            <a href="iniciar_sesion.php">Iniciar sesión</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>