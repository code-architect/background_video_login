$(function(){
    $("ul.nice-login li > input").focusout(function(){
        var content = $(this).val();
        if(content == ""){
            $(this).removeClass("has-value");
        }
    });
    $("ul.nice-login li > input").focusout(function(){
        var content = $(this).val();
        if(content != ""){
            $(this).addClass("has-value");
        }
    });
});