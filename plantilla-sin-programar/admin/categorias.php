<?php include "includes/head.php"; ?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Categorías</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <span>Categorías</span>                
            </div>
            <div class="divContInterno">
                <div class="divTable">
                    <div class="filtro">                        
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="categoria_form.php" class="btn green">Crear nuevo</a>
                            </div>
                            <div class="col-xs-6">
                                <form action="">
                                    <input type="text" placeholder="Buscar....">
                                    <button class="btn">Buscar</button>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="conTable">
                        <table>
                            <thead>
                                <tr>
                                    <th>Cod</th>
                                    <th>Nombre</th>
                                    <th>Opciónes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    for ($i=0; $i < 10; $i++) {
                                ?>
                                <tr>
                                    <td width="40px" class="text-center">1</td>
                                    <td>Nombre</td>
                                    <td class="text-center" width="90">
                                        <a href="" class="edit"><i class="fas fa-edit"></i></a>
                                        <a href="" class="delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="paginador">
                        <ul>
                            <li><a href="" class="btn">Anterior</a></li>
                            <?php for ($i=0; $i < 10; $i++) {  ?>
                            <li class="<?php echo ($i==5)?'active':'' ?>"><a href="" class="btn"><?php echo $i ?></a></li>
                            <?php } ?>
                            <li><a href="" class="btn">Siguiente</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>
