Main = {
	init: function(){
        $("#topo .menu_item a, #contato .link_item a").on("click", function(e){
            e.preventDefault();
            
            var _href = $(this).attr("href");
            
            $("html, body").animate({
                scrollTop: $(_href).position().top - 105
            }, 300);
        });
        
        $("#gotop").on("click", function(e){
            e.preventDefault();
            
            $("html, body").animate({
                scrollTop: 0
            }, 300);
        });
	}
}

$(Main.init);