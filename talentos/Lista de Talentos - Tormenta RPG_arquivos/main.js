Main = {
    debounce: function(func, wait, immediate){
        var timeout;
        
        return function(){
            var context = this,
                args = arguments;
            
            var later = function() {
                timeout = null;
                if ( !immediate ) {
                    func.apply(context, args);
                }
            };
            
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait || 200);
            
            if ( callNow ) { 
                func.apply(context, args);
            }
        };
    },
    
	init: function(){
        $("#search").on("keyup", Main.debounce(function(){
            var _searchText = $(this).val().trim().toLowerCase();
            
            $(".talento").removeClass("even odd").show(0);
            $(".section").show(0);
            
            if(_searchText.length > 0){
                $(".section").each(function(){
                    var _section = $(this);
                    var _count = 0;

                    _section.find(".talento").each(function(){
                        var _this = $(this);
                        var _text = _this.text().trim().toLowerCase();

                        if(_text.indexOf(_searchText) !== -1){
                            _this.show(0);

                            _count++;

                            if(_count%2 == 0)
                                _this.addClass("even");
                            else
                                _this.addClass("odd");
                        }
                        else
                            _this.hide(0);
                    });

                    if(_count > 0)
                        _section.show(0);
                    else
                        _section.hide(0);
                });
            }
        }, 1000));
        
        $("#top_bar .clear").on("click", function(){
            $("#search").val("");
            $(".talento").removeClass("even odd").show(0);
            $(".section").show(0);
        });
        
		$(".talento .close").on("click", function(){
			$(this).closest(".talento").toggleClass("closed");
		});

		$("#top_bar .submenu_item a").on("click", function(e){
            e.preventDefault();

			var _id = $(this).attr("href");
            
			$("html, body").animate({
				scrollTop: $(_id).offset().top - 65
			}, 300);
        });

		$("#top_bar .disclaimer").on("click", function(e){
            e.preventDefault();

			var _id = $(this).attr("href");
            
			$("html, body").animate({
				scrollTop: $(_id).offset().top - 65
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