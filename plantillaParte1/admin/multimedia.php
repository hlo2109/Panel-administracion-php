<?php include "includes/head.php"; ?> 
<?php 
   if(isset($_POST['sendFiles']) && $_POST["sendFiles"]){
       $response = $multimedia->create($_POST);
       header("location: multimedia.php");
       exit;
   }

   if(isset($_POST["action"]) && $_POST["action"]=="delete"){
       $response = $multimedia->delete($_POST);
       header("location: multimedia.php");
       exit;
   }

?>
<body>
    <?php include "includes/menu.php"; ?>
    <div class="contenido divinicio">
        <h1 class="titles pad-left pad-right"><span>Multimedia</span></h1>
        <div class="container">
            <div class="migaPan">
                <a href="" class="active"><i class="fa fa-home"></i> Inicio</a> <i class="fas fa-angle-right"></i> <span>Multimedia</span>                
            </div>
        </div>
        <div class="divContInterno">
            <div class="loadFiles" id="loadFiles">
                <form action="" method="post" enctype="multipart/form-data" >
                    <label class="btn">
                        Cargar archivos
                        <input type="file" name="files[]" multiple >
                        <input type="hidden" name="sendFiles" value="1">
                    </label>
                </form>
            </div>
            <div class="listMultimedia">
                <?php 
                    foreach ($multimedia->list() as $key => $item) {
                        $image = "";
                        $file = '../images/'.$item["image"];
                        if($item["ext"]=="png" || $item["ext"]=="jpg"){
                            $image = $file;
                        }


                        
                ?>
                    <div class="item">
                        <div class="cont" style="background-image:url(<?php echo $image ?>)" >
                            <div class="size">Peso <b><?php echo $item["size"] ?></b> MB</div>  
                            <?php if($image==''){ ?>                          
                            <div class="ico"><?php echo $item["ext"] ?></div>
                            <?php } ?>
                            <div class="options">
                                <div>
                                    <a href="<?php echo $file ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo $file ?>" download><i class="fa fa-download"></i></a>                                    
                                    <form action="" method="POST" class="formDelete">
                                        <input type="hidden" name="id" value="<?php echo $item["id"] ?>" >
                                        <input type="hidden" name="action" value="delete" >
                                        <button class="delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>                        
                    </div>
                <?php } ?>
            </div>            
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
    <script>
        $(function(){
            $(".divContInterno form input[type=file]").change(function(){ 
                $(this).parents("form").submit();
            })
        })
    </script>
</body>
</html>