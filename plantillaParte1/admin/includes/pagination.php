<div class="paginador">
                        <?php 
                            $search = isset($_GET["search"])?$_GET["search"]:"";
                            $params = "&search=".$search;
                        ?>
                        <ul>
                            <?php 
                                if($results["paginaAnterior"]){
                            ?>
                                <li><a href="<?php echo $page; ?>?pag=<?php echo $results["paginaAnterior"].$params; ?>" class="btn">Anterior</a></li>
                            <?php } ?>

                            <?php for ($i=1; $i <= $results["totalPaginas"]; $i++) {  ?>

                            <li class="<?php echo ($i==$results["pag"])?'active':'' ?>">
                                <a href="<?php echo $page; ?>?pag=<?php echo $i.$params; ?>" class="btn"><?php echo $i ?></a>
                            </li>

                            <?php } ?>

                            <?php 
                                if($results["paginaSiguiente"]){
                            ?>
                                <li><a href="<?php echo $page; ?>?pag=<?php echo $results["paginaSiguiente"].$params; ?>" class="btn">Siguiente</a></li>
                            <?php } ?>
                        </ul>
                    </div>