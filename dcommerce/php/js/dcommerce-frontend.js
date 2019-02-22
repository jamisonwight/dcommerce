jQuery(document).ready(function ($) {
    $('.dcomm-menu-filter-wrapper .dcomm-menu-single').each(function (index, object) {
        var $this = this;
        $($this).children('.dcomm-toggle-menu').hide();
        $($this).on('click', function (e) {
            e.preventDefault();
            $($this).children('h5').children('span').toggleClass('dcomm-arrow-up');
            $($this).children('.dcomm-toggle-menu').toggleClass('dcomm-menu-column');
        });
        $('.dcomm-toggle-menu').children('a').each(function(index, obj) {
            $(obj).on('click', function(e) {
                e.preventDefault();
                window.location.href = $(obj).attr('href');
            });
        });
    });
});
