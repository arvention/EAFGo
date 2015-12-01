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
    
    $('.enlistButton').click(function () {
        $("#enrollChoiceDiv").animate({left: '-=300px', opacity: 0}, 'slow');
        $("#enrollChoiceDiv").css('display', 'none');
        $("#enlistDiv").animate({left: '-=400px', opacity: 1}, 'slow');
        $("#enlistDiv").css('display', 'block');
    });
    
    $('.dropButton').click(function () {
        $("#enrollChoiceDiv").animate({left: '-=300px', opacity: 0}, 'slow');
        $("#enrollChoiceDiv").css('display', 'none');
        $("#dropDiv").animate({left: '-=400px', opacity: 1}, 'slow');
        $("#dropDiv").css('display', 'block');
    });
    
    $('.backEnlistButton').click(function () {
        $("#enlistDiv").animate({left: '-=300px', opacity: 0}, 'slow');
        $("#enlistDiv").css('display', 'none');
        $("#enrollChoiceDiv").animate({left: '-=400px', opacity: 1}, 'slow');
        $("#enrollChoiceDiv").css('display', 'block');
    });
    
    $('.backDropButton').click(function () {
        $("#dropDiv").animate({left: '-=300px', opacity: 0}, 'slow');
        $("#dropDiv").css('display', 'none');
        $("#enrollChoiceDiv").animate({left: '-=400px', opacity: 1}, 'slow');
        $("#enrollChoiceDiv").css('display', 'block');
    });
});
