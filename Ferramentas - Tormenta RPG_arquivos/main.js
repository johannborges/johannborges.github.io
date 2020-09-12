Main = {
    init: function(){
        $("#top_bar .submenu_item a, #top_bar .disclaimer, #middle a").on("click", function(e){
            if($(this).attr("target") == "_blank")
                return;
            
            e.preventDefault();

			var _id = $(this).attr("href");
            var _offTop = 65;
            
			$("html, body").animate({
				scrollTop: $(_id).offset().top - _offTop
			}, 300);
            
            if(!$(_id).hasClass("section")){
                setTimeout(function(){
                    $(_id).addClass("blink");
                }, 450);

                setTimeout(function(){
                    $(_id).removeClass("blink");
                }, 1500);
            }
		});
	}
}

$(Main.init);