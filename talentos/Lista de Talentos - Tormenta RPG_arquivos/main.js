Main = {
	init: function(){
        $("#search").on("keyup", function(){
            var _searchText = $(this).val().trim().toLowerCase();
            
            if(_searchText.length <= 0)
                $(".talento").show(0);
            
            else{
                $(".talento").each(function(){
                    var _this = $(this);
                    var _text = _this.text().trim().toLowerCase();

                    if(_text.indexOf(_searchText) !== -1)
                        _this.show(0);
                    else
                        _this.hide(0);
                });
            }
        });
        
        $("#top_bar .clear").on("click", function(){
            $("#search").val("");
            $(".talento").show(0);
        });
        
		$(".talento .close").on("click", function(){
			$(this).closest(".talento").toggleClass("closed");
		});

		$("#top_bar .submenu_item a, #top_bar .disclaimer").on("click", function(e){
            e.preventDefault();

			var _id = $(this).attr("href");
            
			$("html, body").animate({
				scrollTop: $(_id).offset().top - 85
			}, 300);
        });

		$("#middle a").on("click", function(e){
            e.preventDefault();

			var _id = $(this).attr("href");
            
			$("html, body").animate({
				scrollTop: $(_id).offset().top - 85
			}, 300);
            
            setTimeout(function(){
                $(_id).addClass("blink");
            }, 450);

            setTimeout(function(){
                $(_id).removeClass("blink");
            }, 1500);
		});
	}
}

$(Main.init);