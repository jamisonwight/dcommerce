var classes = {
    h1 : $('#dcomm-classes').attr('data-heading-1'),
    h2 : $('#dcomm-classes').attr('data-heading-2'),
    h3 : $('#dcomm-classes').attr('data-heading-3'),
    h4 : $('#dcomm-classes').attr('data-heading-4'),
    h5 : $('#dcomm-classes').attr('data-heading-5'),
    p : $('#dcomm-classes').attr('data-paragraph'),
    ecpContent: $('#dcomm-classes').attr('data-ecpcontent'),
    button: $('#dcomm-classes').attr('data-button'),
}

function isEmpty(element) {
    return element === '' || element === undefined || element === null
}

function initClasses() {
    Object.keys(classes).forEach(function (c) {
        // Iterate through ecp content elements
        // Add class if not empty
        if (c === 'ecpContent') {
            var $ecpContent = [
                '#dcomm-store-main .ecp-html-subtitle',
                '#dcomm-store-main .ecp-html-subtitle span',
                '#dcomm-store-main .ecp-price',
                '#dcomm-store-main .ecp-price',
                '#dcomm-store-main .ecp-stepper .ecp-stepper-step',
                '#dcomm-store-main .ecp-box-header a',
                '#dcomm-store-main .ecp-form-input-label',
                '#dcomm-store-main .ecp-callout-box span',
                '#dcomm-store-main .ecp-html-content',
                '#dcomm-store-main .ecp-html-content p',
                '#dcomm-store-main .ecp-html-content span'
            ]; 
            $ecpContent.forEach(function(ecp) {
                var $element = document.querySelectorAll(ecp),
                    $class = classes[c];

                    if (!isEmpty($class)) {
                        $element.forEach(function(obj) {
                            obj.classList.add($class);
                        })
                    }
            });
        } 
        // Add class if not empty
        else  {
            var $element = document.querySelectorAll('#dcomm-store-main ' + c),
                $filter = document.querySelectorAll('#dcomm-filter ' + c)
                $class = classes[c];

                if (!isEmpty($class)) {
                    // Store product pages
                    $element.forEach(function(obj) {
                        obj.classList.add($class);
                    });
                    // Filter Category menu
                    $filter.forEach(function(obj) {
                        obj.classList.add($class);
                    })
                }
        }

    });
}

$(document).ready(function() {
    // Use Mutation Observer to run script when store is loaded
    // Select the node that will be observed for mutations
    var targetNode = document.getElementById('dcomm-store-main');

    // Options for the observer (which mutations to observe)
    var config = { attributes: true, childList: true, subtree: true };

    const MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

    // Callback function to execute when mutations are observed
    var callback = function(mutationsList, observer) {
        for(var mutation of mutationsList) {
            if (mutation.type == 'childList') {
                initClasses();
            }
        }
    };

    // Create an observer instance linked to the callback function
    var observer = new MutationObserver(callback);

    // Start observing the target node for configured mutations
    observer.observe(targetNode, config);

    // Later, you can stop observing
    // observer.disconnect();
})