$().ready(function () {
    var open = false;
    $("#showLeft").click(function () {
        if (!open) {
            $("#nano-content").animate({
                left: "0"
            }, 400);

            $("#hauptteil").animate({
                left: "92%"
            }, 400);
            open = true;
        } else {
            $("#nano-content").animate({
                left: "-100%"
            }, 400);
            
            $("#hauptteil").animate({
                left: "0"
            }, 400);
            open = false;
        }
        $("#hauptteil").toggleClass("content-wrap content-wrap-fixed");
        
    });
/*
    $('body').on({
        'touchmove': function (e) {
            if (open) {
                if (e.target.id == 'el')
                    return;
                e.preventDefault();
                e.stopPropagation();
            }
        },
        'mousewheel': function (e) {
            if (open) {
                if (e.target.id == 'el')
                    return;
                e.preventDefault();
                e.stopPropagation();
            }
        }
    });
*/

    $(".mobile").mCustomScrollbar();

    $(".nano").nanoScroller();


});

