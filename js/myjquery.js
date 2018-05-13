
$(window).scroll(function(){
    var scroll_top=$(this).scrollTop();

    if (scroll_top>200){
        $("#to_top").animate({right:"10px"},50);
        $("nav").addClass("sticky");
    }
    else{
        $("#to_top").animate({right:"-100px"},50);
        $("nav").removeClass("sticky");
    }
});


$(document).ready(function(){
    $("#to_top").click(function(){
        $("html").animate({scrollTop:0},1000);
    });

 
});


$(document).ready(function(){
    $("#menu_icon").click(function(){
        $("ul").slideToggle()
    })

    $(window).resize(function(){
        if($(this).width() > 768){
            $("ul").show()
        }else{
            $("ul").hide()
        }
    })
})

$(document).ready(function(){
    $(".dropbtn").click(function(){
        $(".dropdown-content").toggle();
    });
});