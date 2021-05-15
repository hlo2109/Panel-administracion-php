<?php include "includes/head.php"; ?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Usuarios</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <a href="usuarios.php"><i class="fas fa-users-cog" aria-hidden="true"></i> Usuarios</a> <i class="fas fa-angle-right"></i> <span>Crear usuario</span>                
            </div>
            <div class="divContInterno">
                <div class="formularios">
                    <form action=""  class="pequenio">
                        <div class="form-group">
                            <label for="descripcion">Perfil</label>
                            <select id="descripcion">
                                <option value="">Seleccionar perfil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="email">Contraseña</label>
                            <input type="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group text-center" >
                            <a href="usuarios.php" class="btn">Cancelar</a>
                            <button class="btn green">Guardar</button> 
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>
