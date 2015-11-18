$(document).ready(function () {
    $('#loginButton').hover(function () {
        $("#loginDiv").animate({'border-color': '#00703c'}, 'fast');
        //$("#loginDiv").css('border-color', '#00703c');
    }, function(){
        $("#loginDiv").animate({'border-color': '#BCBCB3'}, 'fast');
        //$("#loginDiv").css('border-color', '#BCBCB3');
    });
    
    $('#loginButton').click(function(){
        var id = $("#idField").val();
        var password = $("#passwordField").val();
        var data = 'id=' + id + '&password=' + password;
        $.ajax({
            type: 'POST',
            data: data,
            url: 'php/loginValidation.php',
            beforeSend:function(){
                $("#add_err").html("Loading...");
            },
            success: function(html){
                if(html === 1){
                    $("#add_err").html("success");
                    //window.location="/SampleHomePage.php";
                }else if(html === 0){
                    $("#add_err").html("no");
                }
            }
        });
        return false;
    });
});