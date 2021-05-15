<?php 
    include "includes/head.php";
?>
<body>
    <?php 
        include "includes/menu.php";
    ?>
    <div class="divblog">
        <div class="container">
            <h1 class="text-center">Blog</h1>
            <ul class="listblog row">
                <?php 
                    $numimg=0;
                    for ($i=1; $i <= 50; $i++) {
                        $numimg++;
                        if($numimg>6){
                            $numimg=1;
                        }
                ?>
                <li class="item col-xs-12 col-sm-3">
                    <a href="detalle_blog.php?nombre=<?php echo $i ?>">
                        <div class="cont">
                            <div class="img" style="background-image: url(assets/images/blog<?php echo $numimg ?>.jpg)"></div>
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