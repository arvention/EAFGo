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
});
