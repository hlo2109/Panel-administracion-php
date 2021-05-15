<?php 
    include "includes/head.php";
?>
<body>
    <?php 
        include "includes/menu.php";
    ?>
    <div class="divcontacto">
        <div class="container">
            <h1 class="text-center">Contáctenos</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore et qui eligendi quae
                expedita! Minima
                quasi neque non laudantium nihil earum, architecto, suscipit, error consectetur dolorem alias deserunt
                eum atque!</p>
            <form action="">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-control">
                            <div class="cont">
                                <label for="nombre">Nombre*</label>
                                <input id="nombre" type="text" placeholder="Nombre">
                            </div>
                            <div class="cont">
                                <label for="email">Email*</label>
                                <input id="email" type="email" placeholder="Email">
                            </div>
                            <div class="cont">
                                <label for="telefono">Teléfono*</label>
                                <input id="telefono" type="text" placeholder="Teléfono">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-control">
                            <div class="cont">
                                <label for="asunto">Asunto*</label>
                                <input id="asunto" type="text" placeholder="Asunto">
                            </div>
                            <div class="cont">
                                <label for="mensaje">Mensaje*</label>
                                <textarea id="mensaje" name="" id="" cols="30" rows="5"
                                    placeholder="Mensaje"></textarea>
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

    <div class="divsuscribete">
        <div class="container">
            <h3>Suscribete</h3>
            <form action="">
                <input type="email" placeholder="Email">
                <button><i class="fa fa-envelope"></i></button>
            </form>
            <p>Suscribete para optener notificaciónes de noticias en tu bandeja de entrada.</p>
        </div>
    </div>
    <?php 
        include "includes/footer.php";
    ?>
</body>

</html>