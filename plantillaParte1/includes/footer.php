<div class="divsuscribete">
        <div class="container">
            <?php
                $content = $dba->get("contents","*",["id_category"=>15, "id"=>22 ]);                    
            ?>
            <h3><?php echo $content["name"] ?></h3>
            <form action="" method="POST">
                <input type="hidden" name="action" value="suscription">
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit"><i class="fa fa-envelope"></i></button>
            </form>
            <?php echo $content["content"] ?>
        </div>
    </div>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 logo">
                    <a href="<?php echo $url_site; ?>">
                        <img src="<?php echo $url_site; ?>assets/images/logo.png" alt="Logo" title="Logo">
                        <span>Hlo21</span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-3 menu">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="<?php echo $url_site; ?>">Inicio</a></li>
                        <li><a href="<?php echo $url_site; ?>nosotros/">Nosotros</a></li>
                        <li><a href="<?php echo $url_site; ?>blog/">Blog</a></li>
                        <li><a href="<?php echo $url_site; ?>contactenos/">Contactenos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 menu">
                    <?php
                        $content = $dba->get("contents","*",["id_category"=>15, "id"=>23 ]);                    
                    ?>
                    <h3><?php echo $content["name"] ?></h3>
                    <?php echo $content["content"] ?>
                </div>
                <div class="col-xs-12 col-sm-3 redes">
                    <a href="" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href=""  target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href=""  target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo $url_site; ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo $url_site; ?>assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo $url_site; ?>assets/js/init.js"></script>