<?php
    require "admin/controladores/conection.php";
    $menu = $_SERVER['PHP_SELF'];
    $menu = explode("/",$menu);
    $menu = end($menu);

    $slug = isset($_GET["slug"])?$_GET["slug"]:'home';
    $urlShare = "";
    if($slug!=''){        
        $info = $dba->get("contents","*",["slug"=>$slug]);
        $urlShare = $url_site.$menu."?slug".$slug;
    }

    if(isset($_POST["action"]) && $_POST["action"]=='suscription'){ 
        $dba->insert("suscription",[ 
            "email"=>$_POST["email"],
            "date_create"=>date("Y-m-d H:i:s")
        ]);
        ?>
        <script>
            alert("Gracias por suscribirte.");
            location.href="<?php echo $url_site ?>";
        </script>
        <?php        
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $info["name"] ?></title>
    <meta name="description" content="<?php echo $info["description"] ?>"/>
    <meta itemprop="image" content="<?php echo $url_site; ?>images/<?php echo $info["image"] ?>">
    <meta name="keywords" content="<?php echo $info["tags"] ?>"/>

    <meta property="og:title" content="<?php echo $info["name"] ?>" />    
    <meta property="og:url" content="<?php echo $urlShare ?>" />
    <meta property="og:image" content="<?php echo $url_site; ?>images/<?php echo $info["image"] ?>" />
    <meta property="og:description" content="<?php echo $info["description"] ?>" />


    <link rel="stylesheet" href="<?php echo $url_site; ?>assets/css/flexboxgrid.min.css">
    <link rel="stylesheet" href="<?php echo $url_site; ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo $url_site; ?>assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $url_site; ?>assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="<?php echo $url_site; ?>assets/css/froala_style.min.css" />
    <link rel="stylesheet" href="<?php echo $url_site; ?>assets/css/style.css">    
    

</head>
