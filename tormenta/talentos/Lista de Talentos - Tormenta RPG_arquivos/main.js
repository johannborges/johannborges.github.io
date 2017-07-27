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
            
            else{
                $(".talento").show(0);
                $(".section").hide(0);
                $(".section").eq(0).show(0);
            }
        }, 300));
        
        $("#top_bar .clear").on("click", function(){
            $("#search").val("");
            $(".talento").show(0);
            $(".section").show(0);
        });
        
		$(".talento .close").on("click", function(){
			$(this).closest(".talento").toggleClass("closed");
		});

		$("#top_bar .submenu_item a, #top_bar .disclaimer, #middle a").on("click", function(e){
            if($(this).attr("target") == "_blank")
                return;
            
            e.preventDefault();

			var _id = $(this).attr("href");
            var _offTop = 95;
            
            if($(_id).hasClass("section"))
                _offTop = 65;
            
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