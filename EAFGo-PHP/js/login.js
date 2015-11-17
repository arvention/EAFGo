$(document).ready(function () {
    $('#loginButton').hover(function () {
        $("#loginDiv").animate({'border-color': '#00703c'}, 'fast');
        //$("#loginDiv").css('border-color', '#00703c');
    }, function(){
        $("#loginDiv").animate({'border-color': '#BCBCB3'}, 'fast');
        //$("#loginDiv").css('border-color', '#BCBCB3');
    });
});