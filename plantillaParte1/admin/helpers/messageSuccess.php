<?php     
    $success = $config->messageSuccess(); 
    if($success){ ?>
    <ul class="messageSuccess">
        <?php foreach ($success as $succe) {?>
        <li><?php echo $succe ?></li>
        <?php } ?>
    </ul>
<?php } ?>