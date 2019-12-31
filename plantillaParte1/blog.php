<?php 
    include "includes/head.php";
?>
<body class="fr-view">
    <?php 
        include "includes/menu.php";
    ?>
    <div class="divblog">
        <div class="container">
            <h1 class="text-center">Blog</h1>
            <ul class="listblog row">
                <?php 
                    $blogs = $dba->select("contents","*",["id_category"=>14 ]);
                    foreach ($blogs as $key => $item) {
                ?>
                <li class="item col-xs-12 col-sm-3">
                    <a href="<?php echo $url_site; ?>blog/<?php echo $item["slug"] ?>/">
                        <div class="cont">
                            <div class="img" style="background-image: url(<?php echo $url_site; ?>images/<?php echo $item["image"] ?>)"></div>
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
 
    <?php 
        include "includes/footer.php";
    ?>
</body>

</html>