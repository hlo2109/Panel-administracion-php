<div class="sombra movil"></div>
    <header class="header">
        <div class="container">
            <div class="row middle-xs">
                <div class="col-xs-6 logo">
                    <a href="">
                        <img src="assets/images/logo.png" alt="Logo" title="Logo">
                        <span>Hlo21</span>
                    </a>
                </div>
                <div class="col-xs-6 menu">
                    <ul class="pc">
                        <li class="<?php if($menu=="index.php"){ echo "active"; } ?>"><a href="index.php">Inicio</a></li>
                        <li class="<?php if($menu=="nosotros.php"){ echo "active"; } ?>"><a href="nosotros.php">Nosotros</a></li>
                        <li class="<?php if($menu=="blog.php" || $menu=="detalle_blog.php"){ echo "active"; } ?>"><a href="blog.php">Blog</a></li>
                        <li class="<?php if($menu=="contacto.php"){ echo "active"; } ?>"><a href="contacto.php">Contactenos</a></li>
                    </ul>
                    <i class="fa fa-bars btnmenu movil"></i>
                </div>
            </div>
        </div>
    </header>