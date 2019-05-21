$(function(){
    $("#produit-slider").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay:true,
        appendArrows:$(".arrows"),
        prevArrow:'<button type="button" class="slick-prev"></button>',
        nextArrow:'<button type="button" class="slick-next"></button>'
      });
      $(".realisation-slider").slick({
        prevArrow:'',
        nextArrow:'',
        autoplay:true,
        autoplaySpeed:1500
      });
      $(".marque-slider").slick({
        appendArrows:$(".arrows"),
        prevArrow:'<button type="button" class="slick-prev"></button>',
        nextArrow:'<button type="button" class="slick-next"></button>'
        });
      
      $(".parent-link").click(function(e){
          if(window.innerWidth<768){
              e.preventDefault();
              var element = $(this).next();
              $(".dropdown-menu").removeClass("visible-xs-block");
              $(element).toggleClass("visible-xs-block");
          }
      });
      $(".navbar-header .navbar-form .input-group .btn").click(function(e){
        e.preventDefault();
        var windowWidth = window.innerWidth;
        if(windowWidth<768){
            $(".navbar-header .navbar-form .input-group .form-control").toggleClass("showInput");
            if($("input[name='s']").val()!=""){
                $(".navbar-form").submit();
            }
        }
        else{
            if($("input[name='s']").val()!=""){
                $(".navbar-form").submit();
            }else{
                alert("le champ de recherche est vide");
            }
        }
    });
});