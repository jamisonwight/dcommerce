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


    // Check for changes to the main store wrapper
    //  Remove or show menus based on views
    // Select the node that will be observed for mutations
    var dcommMain = document.getElementById('dcomm-store-main');
    var dcommFilter = document.getElementById('dcomm-filter') === null ? '' : document.getElementById('dcomm-filter');

    // Options for the observer (which mutations to observe)
    var config = { attributes: true, childList: true, subtree: true };

    const MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

    // Callback function to execute when mutations are observed
    var callback = function(mutationsList, observer) {
        for (var mutation of mutationsList) {
            if (mutation.type == 'childList') {
                var urlParams = new URLSearchParams(window.location.search);
                // Check for view changes
                if (dcommFilter !== '' && urlParams.get('view') == 'product' || urlParams.get('view') == 'products') {
                    dcommFilter.style.display = 'block';
                    console.log('hi this is a product');
                } else if (dcommFilter !== null && urlParams.get('view') == 'cart' || urlParams.get('view') == 'account' || urlParams.get('view') == 'checkout' || urlParams.get('view') == 'sigin') {
                    dcommFilter.style.display = 'none';
                    console.log('not a product page');
                } else {
                    // Do nothing
                }
            }
            // else if (mutation.type == 'attributes') {
            //     console.log('The ' + mutation.attributeName + ' attribute was modified.');
            // }
        }
    };

    // Create an observer instance linked to the callback function
    var observer = new MutationObserver(callback);

    // Start observing the target node for configured mutations
    observer.observe(dcommMain, config);

    // Later, you can stop observing
    // observer.disconnect();
