$(function () {
    var width = $(window).width();
    if (width < 768) {
        $(".divMenu").addClass("active");
        $(".contenido").addClass("active");
        $(".headerMenu").addClass("active");
    }
    $(document).ready(function () {
        setTimeout(function () {
            $(".load").fadeOut();
        }, 500)
    })
    $(".divMenu .icomenu").click(function () {
        if ($(".divMenu").hasClass("active")) {
            $(this).find(".fas").removeClass("fa-angle-right");
            $(this).find(".fas").addClass("fa-angle-left");
            $(".divMenu").removeClass("active");
            $(".contenido").removeClass("active");
            $(".headerMenu").removeClass("active");
        } else {
            $(this).find(".fas").removeClass("fa-angle-left");
            $(this).find(".fas").addClass("fa-angle-right");
            $(".divMenu").addClass("active");
            $(".contenido").addClass("active");
            $(".headerMenu").addClass("active");
        }
    });
    if ($(".editor").length > 0) {
        var editor = new FroalaEditor('.editor', {
            language: 'es',
            theme: 'dark',
            height: 300, 
            // Upload
            imageUploadParam: 'file',
            imageUploadURL: 'lib/ajax_admin.php',
            imageUploadMethod: 'POST',
            imageAllowedTypes: ['jpeg', 'jpg', 'png', 'gif'],

            // Load
            // Set page size.
            imageManagerPageSize: 20,
            // Set a scroll offset (value in pixels).
            imageManagerScrollOffset: 10,
            // Set the load images request URL.
            imageManagerLoadURL: "lib/ajax_admin.php?cod=loadImages",
            // Set the load images request type.
            imageManagerLoadMethod: "GET",

            // DELETE IMAGE
            // Set the delete image request URL.
            imageManagerDeleteURL: "lib/ajax_admin.php",
            // Set the delete image request type.
            imageManagerDeleteMethod: "GET",
            // Additional delete params.
            imageManagerDeleteParams: { cod: 'deleteImage'},

            
            events:{
                // Insertar
                'image.beforeUpload': function (images) {
                    console.log(images);
                  // Return false if you want to stop the image upload.
                },
                'image.uploaded': function (response) {
                    console.log(response);
                  // Image was uploaded to the server.
                },
                'image.inserted': function ($img, response) {
                    console.log($img, response);
                  // Image was inserted in the editor.
                },
                'image.replaced': function ($img, response) {
                    // console.log($img, response);
                  // Image was replaced in the editor.
                },
                'image.error': function (error, response) {
                    console.log(error, response); 
                },
                // -----------------------------------------------
            }
        })
    }

    if($(".messageSuccess").length > 0){
        setTimeout(function(){
            $(".messageSuccess").fadeOut(function(){
                $(this).remove();
            })
        }, 5000)
    }
   
    $(".divTable table td form").submit(function(){
        if(!confirm("Seguro que desea continuar?")){
            return false;
        }

    })

})