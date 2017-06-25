Index = {
    checkScroll: function(_this){
        if(_this.scrollTop() >= 140)
            $(".form").addClass("fixed");

        else
            $(".form").removeClass("fixed");
    },
    
    init: function(){
        Index.checkScroll($(window));
    
        $(window).on("scroll", function(){
            var _this = $(this);
            
            Index.checkScroll(_this);
        });
        
        $(".form_hide").on("click", function(){
            $(".form").toggleClass("closed");
        });
        
        $("#showHighlight").on("change", function(){
            if($(this).prop("checked")){
                $(".spell_holder").hide();
                $(".spell_holder input:checked").closest(".spell_holder").show();
            }
            
            else
                $(".spell_holder").show();
        });
        
        $(".spell_holder input").on("change", function(){
            var _this = $(this);
            
            if($("#showHighlight").prop("checked") && !_this.prop("checked"))
                _this.closest(".spell_holder").hide();
        });
        
        $(".form select, .form input").on("change", function(){
            if($(this).attr("id") == "showHighlight" && $(this).prop("checked") == true)
                return;
            
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
            
            $(".spell_holder").hide();
            
            $(".spell_holder").each(function(){
                var _show = true;
                var _this = $(this);
                
                if(_nome != "" && _this.data("name").indexOf(_nome) < 0)
                    _show = false;
                
                if(_descricao != "" && _this.find(".descricao_text").text().toLocaleLowerCase().indexOf(_descricao) < 0)
                    _show = false;
                
                if(_escola.length > 0 && $.inArray(_this.data("escola"), _escola) == -1)
                    _show = false;
                
                if(_nivelArcana != "" && _this.data("nivelarcana") != _nivelArcana)
                    _show = false;
                
                if(_nivelDivina != "" && _this.data("niveldivina") != _nivelDivina)
                    _show = false;
                
                if(_show)
                    _this.show();
            });
        });
    }
}

$(Index.init);