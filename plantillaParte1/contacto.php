<?php 
    include "includes/head.php";
    if(isset($_POST["name"]) && $_POST["name"]!=''){
        $dba->insert("messages",[
            "name"=>$_POST["name"],
            "email"=>$_POST["email"],
            "phone"=>$_POST["phone"],
            "affair"=>$_POST["affair"],
            "message"=>$_POST["message"],
            "date_create"=>date("Y-m-d H:i:s")
        ]);
        ?>
        <script>
            alert("El mensaje a sido enviado correctamente, gracias por contactarnos.");
            location.href="contacto.php?slug=contactenos";
        </script>
        <?php
    }
?>
<body class="fr-view">
    <?php 
        include "includes/menu.php";
    ?>
    <div class="divcontacto">
        <div class="container">
            <h1 class="text-center"><?php echo $info["name"] ?></h1>
            <div class="text-center">
                <?php echo $info["content"] ?>
            </div>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-control">
                            <div class="cont">
                                <label for="nombre">Nombre*</label>
                                <input id="nombre" type="text" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="cont">
                                <label for="email">Email*</label>
                                <input id="email" type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="cont">
                                <label for="telefono">Teléfono*</label>
                                <input id="telefono" type="text" name="phone" placeholder="Teléfono" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-control">
                            <div class="cont">
                                <label for="asunto">Asunto*</label>
                                <input id="asunto" type="text" name="affair" placeholder="Asunto" required>
                            </div>
                            <div class="cont">
                                <label for="mensaje">Mensaje*</label>
                                <textarea id="mensaje" name="message" id="" cols="30" rows="5"
                                    placeholder="Mensaje" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-control">
                            <button>Enviar</button>
                            <p>* Campos requeridos.</p>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div> 
    <?php 
        include "includes/footer.php";
    ?>
</body>

</html>