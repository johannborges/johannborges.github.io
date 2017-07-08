Main = {
//    checkHighlights: function(_checked){
//        if(_checked){
//            $(".spell_holder:not(.checked)").hide();
//            $(".spell_holder.checked").show();
//
//            $(".spell_level").each(function(){
//                var _this = $(this);
//
//                if(_this.nextUntil(".spell_level").hasClass("checked"))
//                    _this.show();
//                else
//                    _this.hide();
//            });
//        }
//
//        else
//            $(".spell_holder").show();
//    },
    
    init: function(){
        $(".spell_holder .check").on("click", function(){
            $(this).closest(".spell_holder").toggleClass("checked");
            
//            if($("#showHighlight").prop("checked"))
//                Main.checkHighlights(true);
        });
        
        $(".form_hide").on("click", function(){
            $(".form").removeClass("visible");
        });
        
        
        $("#top_bar .submenu_item a, #top_bar .bar_item a, #middle a").on("click", function(e){
            if($(this).attr("target") == "_blank")
                return;
            
            e.preventDefault();

			var _id = $(this).attr("href");
            
            
            if(_id == "#form"){
                $(_id).toggleClass("visible");
                return;
            }
            
            
            var _offTop = 55;
            
            if($(_id).hasClass("magiatipo") || $(_id).attr("id") === "disclaimer")
                _offTop = 65;
            
			$("html, body").animate({
				scrollTop: $(_id).offset().top - _offTop
			}, 300);
            
            if(!$(_id).hasClass("magiatipo")){
                setTimeout(function(){
                    $(_id).addClass("blink");
                }, 450);

                setTimeout(function(){
                    $(_id).removeClass("blink");
                }, 1500);
            }
		});
        
        
        
//        $("#showHighlight").on("change", function(){
//            Main.checkHighlights($(this).prop("checked"));
//        });
        
        $(".form select, .form input").on("change", function(){
//            if($(this).attr("id") == "showHighlight")
//                return;
            
            var _nome = $("#nome").val().toLocaleLowerCase();
            var _descricao = $("#descricao").val().toLocaleLowerCase();
            var _tipo = $("#tipo").val();
            
            var _escola = [];
            for(var _i in $("#escola input")){
                var _this = $("#escola input").eq(_i);
                
                if(_this.prop("checked"))
                    _escola.push(_this.val());
            }
            
            var _nivelArcana = $("#nivelarcana").val();
            var _nivelDivina = $("#niveldivina").val();
            
            $(".magiatipo").each(function(){
                var _this = $(this);
                
                if((_tipo != "" && _this.data("tipo") != _tipo) || (_nivelArcana != "" && _this.data("tipo") != "arcanas") || (_nivelDivina != "" && _this.data("tipo") != "divinas"))
                    _this.hide();
                else
                    _this.show();
            });
            
            if(_nivelDivina != ""){
                $(".magiatipo.divinas .spell_level").each(function(){
                    var _this = $(this);
                    
                    if(_this.data("nivel") != _nivelDivina)
                        _this.hide();
                    else
                        _this.show();
                });
            }
            else if(_nivelArcana != ""){
                $(".magiatipo.arcanas .spell_level").each(function(){
                    var _this = $(this);
                    
                    if(_this.data("nivel") != _nivelArcana)
                        _this.hide();
                    else
                        _this.show();
                });
            }
            else{
                $(".magiatipo .spell_level").show();
            }
            
            $(".spell_holder").each(function(){
                var _show = true;
                var _this = $(this);
                
                if(_escola.length > 0)
                    _show = false;
                
                for(var _e in _escola){
                    if(_this.data("escola").indexOf(_escola[_e]) != -1)
                        _show = true;
                }
                
                if(_nome != "" && _this.data("name").indexOf(_nome) < 0)
                    _show = false;
                
                if(_descricao != "" && _this.find(".description_text").text().toLocaleLowerCase().indexOf(_descricao) < 0)
                    _show = false;
                
                if(_nivelArcana != "" && _this.data("nivelarcana") != _nivelArcana)
                    _show = false;
                
                if(_nivelDivina != "" && _this.data("niveldivina") != _nivelDivina)
                    _show = false;
                
                if(_show){
                    _this.show();
                }
                else
                    _this.hide();
            });
        });
    }
}

$(Main.init);