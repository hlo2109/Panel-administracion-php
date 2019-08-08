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
            // imageUploadURL: 'componentes/uploadFiles.php'
        })
    }

    if($(".messageSuccess").length > 0){
        setTimeout(function(){
            $(".messageSuccess").fadeOut(function(){
                $(this).remove();
            })
        }, 5000)
    }
   

})