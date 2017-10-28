Main = {
    init: function(){
        $("#top .menu .menu_item a").on("click", function(e){
            e.preventDefault();
            
            var _link = $(this).attr("href");
            
            $("html, body").animate({
                scrollTop: $(_link).position().top - 100
            }, 300);
        });
    }
}

$(Main.init);