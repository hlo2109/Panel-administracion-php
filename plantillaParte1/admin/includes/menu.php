<div class="load">
    <style>
        .load{ position:fixed; top:0px; left:0px; width:100%; height:100%; background:#333; z-index:2000; display:flex; align-items:center; align-content:center; }
        .load .cont{ width:100%; }
        .load .loader { position: relative; width: 80px; margin:auto; }
        .duo { height: 20px; width: 50px; background: hsla(0, 0%, 0%, 0.0); position: absolute; }
        .duo, .dot { animation-duration: 0.8s; animation-timing-function: ease-in-out; animation-iteration-count: infinite; }
        .duo1 { left: 0; }
        .duo2 { left: 30px }
        .dot { width: 20px; height: 20px; border-radius: 10px; background: green; position: absolute;}
        .dot-a { left: 0px; }
        .dot-b { right: 0px; }
        @keyframes spin { 0% { transform: rotate(0deg) } 50% { transform: rotate(180deg) }100% { transform: rotate(180deg) } }
        @keyframes onOff { 0% { opacity: 0; } 49% { opacity: 0; } 50% { opacity: 1; } 100% { opacity: 1; } }
        .duo1 { animation-name: spin; }
        .duo2 { animation-name: spin; animation-direction: reverse; }
        .duo2 .dot-b { animation-name: onOff; }
        .duo1 .dot-a { opacity: 0; animation-name: onOff; animation-direction: reverse; }
    </style>
    <div class="cont">
        <div class="loader">
            <div class="duo duo1">
                <div class="dot dot-a"></div>
                <div class="dot dot-b"></div>
            </div>
            <div class="duo duo2">
                <div class="dot dot-a"></div>
                <div class="dot dot-b"></div>
            </div>
        </div>
    </div>
</div>
<div class="divMenu">
    <a href="javascript:void(0)" class="icomenu"><i class="fas fa-angle-left"></i></a>
    <div class="header">
        <div class="img">
            <i class="fas fa-user-astronaut"></i>
        </div>
        <div class="txt">
            Bienvenido, <?php echo $_SESSION["admin"]["name"]; ?>
            <br>
            <span><?php echo $_SESSION["admin"]["email"]; ?></span>
        </div>
        <div class="icos">
            <a href=""><i class="fas fa-edit"></i>Editar</a>
            <a href="iniciar_sesion.php?logout=1"><i class="fas fa-door-closed"></i>Cerrar</a>
        </div>
    </div>
    <div class="listmenu">
        <ul>
            <?php if($config->menu_profile('index.php')): ?>
                <li class="<?php echo ($menu=="index.php")?'active':'' ?>"><a href="index.php"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
            <?php endif; ?>
            <?php if($config->menu_profile('multimedia.php')): ?>
                <li class="<?php echo ($menu=="multimedia.php")?'active':'' ?>"><a href="multimedia.php"><i class="fas fa-play"></i> <span>Multimedia</span></a></li>
            <?php endif; ?>
            <?php if($config->menu_profile('mensajes.php')): ?>
                <li class="<?php echo ($menu=="mensajes.php")?'active':'' ?>"><a href="mensajes.php"><i class="fas fa-envelope"></i> <span>Mensajes</span></a></li>
            <?php endif; ?>
            <?php if($config->menu_profile('categorias.php')): ?>
                <li class="<?php echo ($menu=="categorias.php")?'active':'' ?>"><a href="categorias.php"><i class="fas fa-biohazard"></i> <span>Categorías</span></a></li>
            <?php endif; ?>
            <?php if($config->menu_profile('contenidos.php')): ?>
                <li class="<?php echo ($menu=="contenidos.php")?'active':'' ?>"><a href="contenidos.php"><i class="fab fa-contao"></i> <span>Contenidos</span></a></li>
            <?php endif; ?>
            <?php if($config->menu_profile('usuarios.php')): ?>
                <li class="<?php echo ($menu=="usuarios.php")?'active':'' ?>"><a href="usuarios.php"><i class="fas fa-users-cog"></i> <span>Usuarios</span></a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<div class="headerMenu">
    <div class="cont">
        Bienvenido, Administrador
        <div class="icos">
            <a href=""><i class="fas fa-edit"></i>Editar</a>
            <a href="iniciar_sesion.php"><i class="fas fa-door-closed"></i>Cerrar</a>
        </div>
    </div>
</div>