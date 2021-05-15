<?php 
    include "includes/head.php";
?>
<body>
    <?php 
        include "includes/menu.php";
    ?>
    <div class="slider">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="">
                        <img src="assets/images/banner1.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="assets/images/banner2.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="assets/images/banner3.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="assets/images/banner4.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="divlistblog">
        <div class="container">
            <h2>Últimas entradas</h2>
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
    <div class="divparallax">
        <div class="container">
            <h3>Parallax ejemplo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore praesentium dicta ad velit
                consectetur, ex enim itaque eligendi consequuntur quod modi dolorem qui. Quos cum deleniti molestiae
                aspernatur, nostrum reiciendis?</p>
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