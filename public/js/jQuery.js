$(function(){
    /*========================================================================================*/
    /*                                        Error                                           */
    /*========================================================================================*/
        $(".error").addClass("animated flash");
        $(".error").one("animationend",function(){
            $(".error").addClass("animated shake");
        });
    /*========================================================================================*/
    
    
    /*========================================================================================*/
    /*                                        Editable                                        */
    /*========================================================================================*/
        $("[data-field]").on("click",function(){
            var url = window.location.href;
            var options = {
                tooltip: "Double click to edit",
                event: "dblclick",
                type: "textarea",
                submitdata: {
                    _method: "PUT",
                    _token: $("#token").text(),
                    field: $(this).attr("data-field")
                },
                submit: "Save",
                cancel: "Cancel",
                indicator: "Saving....."
            };
            $(this).editable(url,options);
        });
    /*========================================================================================*/
    
    
});