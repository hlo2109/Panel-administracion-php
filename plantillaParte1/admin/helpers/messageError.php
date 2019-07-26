<?php     
    $error = $config->messageError(); 
    if($error){ ?>
    <ul class="messageError">
        <?php foreach ($error as $error) {?>
        <li><?php echo $error ?></li>
        <?php } ?>
    </ul>
<?php } ?>