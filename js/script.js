$(function(){
    $(".nav li").hover(function(){
        $(this).find("a").addClass("flipInX");
    },function(){
        $(this).find("a").removeClass("flipInX");
    });

});