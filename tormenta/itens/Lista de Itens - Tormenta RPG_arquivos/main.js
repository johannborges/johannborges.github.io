Main = {
    init: function(){
        $("#top_bar .submenu_item a, #top_bar .bar_item a, #middle a").on("click", function(e){
            if($(this).attr("target") == "_blank")
                return;
            
            e.preventDefault();

			var _id = $(this).attr("href");
            
            var _offTop = 90;
            
            $("html, body").animate({
				scrollTop: $(_id).offset().top - _offTop
			}, 300);
		});
    }
}

$(Main.init);