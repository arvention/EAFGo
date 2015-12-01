$(document).ready(function() {
    $('ul.menuTabs').each(function() {
        var $active, $content, $links = $(this).find('a');
        $active = $($links[0]);
        $active.addClass('active');
        $content = $($active[0].hash);
        $links.not($active).each(function() {
            $(this.hash).hide();
        });
        
        $(this).on('click', 'a', function(e) {
            $active.removeClass('active');
            $active.removeAttr('style');
            $content.hide();
            $active = $(this);
            $content = $(this.hash);
            $active.addClass('active');
            $active.css("background-color", "green");
            $active.css("color", "white");
            $content.show();
            e.preventDefault();
        });
    });
    
    $(document).on('click', '.enlistButton', function () {
        $("#enrollChoiceDiv").animate({opacity: 0}, 'slow');
        $("#enrollChoiceDiv").css('display', 'none');
        $("#enlistDiv").animate({opacity: 1}, 'slow');
        $("#enlistDiv").css('display', 'block');
        $("#enlistStep1Div").css('display', 'block');
        $("#enlistStep1Div").animate({opacity: 1}, 'slow');
    });
    
    $(document).on('click', '.dropButton', function () {
        $("#enrollChoiceDiv").animate({opacity: 0}, 'slow');
        $("#enrollChoiceDiv").css('display', 'none');
        $("#dropDiv").animate({opacity: 1}, 'slow');
        $("#dropDiv").css('display', 'block');
    });
    
    $(document).on('click', '.backEnlistButton', function () {
        $("#enlistDiv").animate({opacity: 0}, 'slow');
        $("#enlistDiv").css('display', 'none');
        $("#enrollChoiceDiv").animate({opacity: 1}, 'slow');
        $("#enrollChoiceDiv").css('display', 'block');
    });
    
    $(document).on('click', '.backDropButton', function () {
        $("#dropDiv").animate({opacity: 0}, 'slow');
        $("#dropDiv").css('display', 'none');
        $("#enrollChoiceDiv").animate({opacity: 1}, 'slow');
        $("#enrollChoiceDiv").css('display', 'block');
    });
    
    $(document).on('click', '.proceedEnlistFirstButton', function () {
        $("#enlistStep1Div").animate({opacity: 0}, 'slow');
        $("#enlistStep1Div").css('display', 'none');
        $("#enlistStep2Div").animate({opacity: 1}, 'slow');
        $("#enlistStep2Div").css('display', 'block');
    });
    
    $(document).on('click', '.backEnlistSecondButton', function () {
        $("#enlistStep2Div").animate({opacity: 0}, 'slow');
        $("#enlistStep2Div").css('display', 'none');
        $("#enlistStep1Div").animate({opacity: 1}, 'slow');
        $("#enlistStep1Div").css('display', 'block');
    });
    
    $(document).on('click', '.proceedEnlistSecondButton', function () {
        $("#enlistStep2Div").animate({opacity: 0}, 'slow');
        $("#enlistStep2Div").css('display', 'none');
        $("#enlistStep3Div").animate({opacity: 1}, 'slow');
        $("#enlistStep3Div").css('display', 'block');
    });
    
    $(document).on('click', '.backEnlistThirdButton', function () {
        $("#enlistStep3Div").animate({opacity: 0}, 'slow');
        $("#enlistStep3Div").css('display', 'none');
        $("#enrollChoiceDiv").animate({opacity: 1}, 'slow');
        $("#enrollChoiceDiv").css('display', 'block');
    });
});
