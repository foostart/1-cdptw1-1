$('.navbar-nav li').hover(
    function() {
        if($(this).hasClass('dropdown'))
        {
            $(this).addClass('open');
            $(this).chirldren().attr('aria-expanded', true);
        }
    },
    function() {
        if($(this).hasClass('dropdown'))
        {
            $('.navbar-nav li.open').removeClass('open');
            $(this).chirldren().attr('aria-expanded', false);
        }
    }
);
