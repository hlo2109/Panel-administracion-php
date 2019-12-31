<?php 
    include "includes/head.php";
?>
<body class="fr-view">
    <?php 
        include "includes/menu.php";
    ?>
    <div class="slider">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <?php 
                    $sliders = $dba->select("contents","*",["id_category"=>16]);
                    foreach ($sliders as $key => $item) {
                ?>
                <div class="item">
                    <?php if($item["description"]!=''){ ?><a href="<?php echo $item["description"] ?>" target="_blank"><?php } ?>
                        <img src="images/<?php echo $item["image"] ?>" alt="">
                    <?php if($item["description"]!=''){ ?></a><?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="divlistblog">
        <div class="container">
            <h2>Últimas entradas</h2>
            <ul class="listblog row">
                <?php 
                    $blogs = $dba->select("contents","*",["id_category"=>14, "LIMIT"=>4]);
                    foreach ($blogs as $key => $item) {
                ?>
                <li class="item col-xs-12 col-sm-3">
                    <a href="<?php echo $url_site; ?>blog/<?php echo $item["slug"] ?>/">
                        <div class="cont">
                            <div class="img" style="background-image: url(images/<?php echo $item["image"] ?>)"></div>
                            <div class="text">
                                <div class="txt">
                                    <h3><?php echo $item["name"] ?></h3>
                                    <p><?php echo $item["description"] ?></p>
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
            <?php 
                $parallax = $dba->get("contents","*",["id_category"=>15, "id"=>28 ]);                    
            ?>
            <h3><?php echo $parallax["name"] ?></h3>
            <?php echo $parallax["content"] ?>
        </div>
    </div>
    
    <?php 
        include "includes/footer.php";
    ?>
</body>

</html>