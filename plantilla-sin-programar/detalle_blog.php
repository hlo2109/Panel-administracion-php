<?php 
    include "includes/head.php";
?>
<body>
    <?php 
        include "includes/menu.php";
    ?>

    <div class="divdetalleblog">
        <div class="container">
            <h1 class="text-center">Detalle blog <?php echo $_GET["nombre"] ?></h1>
            <p><img src="assets/images/blog1.jpg" alt="Sobre nosotros" title="Sobre nosotros" class="imgIzquierda">
                Lorem
                ipsum dolor sit
                amet consectetur adipisicing
                elit.
                Dolores mollitia eveniet doloribus voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo.
            </p>
            <p> <img src="assets/images/blog1.jpg" alt="Sobre nosotros" title="Sobre nosotros" class="imgDerecha">Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus
                voluptatum
                magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque
                nemo.</p>
            <h2>Más blogs</h2>
            <ul class="listblog row">
                <?php 
                    for ($i=1; $i <= 4; $i++) {
                ?>
                <li class="item col-xs-12 col-sm-3">
                    <a href="detalle_blog.php?nombre=<?php echo $i ?>">
                        <div class="cont">
                            <div class="img" style="background-image: url(assets/images/blog<?php echo $i ?>.jpg)"></div>
                            <div class="text">
                                <div class="txt">
                                    <h3>Nombre <?php echo $i ?></h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga magni consequatur
                                        nemo
                                        placeat, quidem nulla ratione incidunt nihil consequuntur minus aliquam. Vel
                                        deleniti
                                        modi temporibus, explicabo architecto recusandae quisquam earum?</p>
                                    <span>Ver más</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                <?php } ?>
            </ul>
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