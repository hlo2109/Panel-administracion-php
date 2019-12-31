<?php 
    include "includes/head.php";
?>
<body class="fr-view">
    <?php 
       include "includes/menu.php";
    ?>

  
    <div class="divnosotros">
        <div class="container">
            <h1 class="text-center"><?php echo $info["name"] ?></h1>
            <?php echo $info["content"] ?>
        </div>
    </div>
 
    <?php 
        include "includes/footer.php";
    ?>
</body>

</html>