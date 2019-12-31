<div class="sombra movil"></div>
    <header class="header">
        <div class="container">
            <div class="row middle-xs">
                <div class="col-xs-6 logo">
                    <a href="<?php echo $url_site; ?>">
                        <img src="<?php echo $url_site; ?>assets/images/logo.png" alt="Logo" title="Logo">
                        <span>Hlo21</span>
                    </a>
                </div>
                <div class="col-xs-6 menu">
                    <ul class="pc">
                        <li class="<?php if($menu=="index.php"){ echo "active"; } ?>"><a href="<?php echo $url_site; ?>">Inicio</a></li>
                        <li class="<?php if($menu=="nosotros.php"){ echo "active"; } ?>"><a href="<?php echo $url_site; ?>nosotros/">Nosotros</a></li>
                        <li class="<?php if($menu=="blog.php" || $menu=="detalle_blog.php"){ echo "active"; } ?>"><a href="<?php echo $url_site; ?>blog/">Blog</a></li>
                        <li class="<?php if($menu=="contacto.php"){ echo "active"; } ?>"><a href="<?php echo $url_site; ?>contactenos/">Contactenos</a></li>
                    </ul>
                    <i class="fa fa-bars btnmenu movil"></i>
                </div>
            </div>
        </div>
    </header>