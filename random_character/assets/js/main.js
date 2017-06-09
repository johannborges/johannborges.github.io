Main = {
	init: function(){
        $("#showVariantes").on("change", function(){
            var _state = $(this).prop("checked");
            
            if(_state === true)
                $("label[isVariante]").show();
            else
                $("label[isVariante]").hide();
        });
	}
}

$(Main.init);