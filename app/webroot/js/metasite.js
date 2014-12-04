$(document).ready(function() {

    $(document).on("click", ".panel-heading-clic", function() {
        $("a[href=#" + $(this).attr("target") + "]")[0].click();
    });

    $(document).on("click", ".left-menu-btn", function() {
        $(".left-menu").fadeIn();
        $(this).addClass("left-menu-btn-active").removeClass("left-menu-btn");
        
    });
    $(document).on("click", ".left-menu-btn-active", function() {
        $(".left-menu").fadeOut();
        $(this).addClass("left-menu-btn").removeClass("left-menu-btn-active");
        
    });


    $(document).on("click", "a.scrollinglink", function() {
        $('body,html').animate({
            scrollTop: $("div#" + $(this).attr("name")).offset().top - 100
        }, 500);
    });
    
    $(document).on("load", "#", function() {
        $('body,html').animate({
            scrollTop: $("div#" + $(this).attr("name")).offset().top - 100
        }, 500);
    });
    
    
});
