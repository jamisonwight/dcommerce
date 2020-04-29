document.addEventListener("DOMContentLoaded", function (event) {
    // Custom Templates
    var templatSelect = document.querySelectorAll('#templateSelect'),
        templateContainer = document.querySelectorAll('.dcomm-template-container .dcomm-template-single'),
        templateSelectBase = document.getElementById('dcomm-template-base'),
        templateSelectCampaign = document.getElementById('dcomm-template-campaign'),
        templateSelectCart = document.getElementById('dcomm-template-cart'),
        templateSelectCheckout = document.getElementById('dcomm-template-checkout'),
        templateSelectLogin = document.getElementById('dcomm-template-login'),
        templateSelectProducts = document.getElementById('dcomm-template-products'),
        templateSelectSignup = document.getElementById('dcomm-template-signup'),
        templateSelectNotification = document.getElementById('dcomm-template-notification'),
        templateAccountAdd = document.getElementById('dcomm-account-add'),
        templateSelectDefault = document.getElementById('templateSelectDefault'),
        templateSelectAccount = document.getElementById('dcomm-template-account'),
        templateSelectBase = document.getElementById('dcomm-template-base'),
        templateSelectCampaign = document.getElementById('dcomm-template-campaign'),
        templateSelectCart = document.getElementById('dcomm-template-cart'),
        templateSelectCheckout = document.getElementById('dcomm-template-checkout'),
        templateSelectLogin = document.getElementById('dcomm-template-login'),
        templateSelectProducts = document.getElementById('dcomm-template-products'),
        templateSelectSignup = document.getElementById('dcomm-template-signup'),
        templateSelectNotification = document.getElementById('dcomm-template-notification');
    


        templateSelect.addEventListener('change', function(e) {
            var $val = e.target.value;

            // Hide all open template options
            templateContainer.forEach(function(template) {
                template.style.display = 'none';
            });

            if ($val === 'account') {
                templateSelectAccount.style.display = 'flex';
            }
            if ($val === 'base') {
                templateSelectBase.style.display = 'flex';
            }
            if ($val === 'campaign') {
                templateSelectCampaign.style.display = 'flex';
            }
            if ($val === 'cart') {
                templateSelectCart.style.display = 'flex';
            }
            if ($val === 'checkout') {
                templateSelectCheckout.style.display = 'flex';
            }
            if ($val === 'login') {
                templateSelectLogin.style.display = 'flex';
            }
            if ($val === 'products') {
                templateSelectProducts.style.display = 'flex';
            }
            if ($val === 'signup') {
                templateSelectSignup.style.display = 'flex';
            }
            if ($val === 'notification') {
                templateSelectNotification.style.display = 'flex';
            }
        });



    // Editor Submission
    var dcommerceForm = document.querySelector('.toplevel_page_dcommerce form'),
        testButton = document.getElementById('button'),
        customMessagesEditor = ace.edit("customMessagesEditor"),
        customCSSEditor = ace.edit("customCSSEditor");

    // Custom Messages Editor
    customMessagesEditor.setTheme("ace/theme/tomorrow_night_eighties");
    customMessagesEditor.session.setMode("ace/mode/javascript");

    // Custom CSS Editor
    customCSSEditor.setTheme("ace/theme/tomorrow_night_eighties");
    customCSSEditor.session.setMode("ace/mode/css");

    dcommerceForm.addEventListener('submit', function(e) {
        e.preventDefault();

        new Promise(function(resolve, reject) {
             // Custom Messages
            var customMessagesData = {action: 'update_custom_messages', customMessages: customMessagesEditor.getValue().replace(/[/]+/g, '')}
            jQuery.post(ajaxurl, customMessagesData, function(response) {
            });
            
            // CSS Stlyes
            var customCSSData = {action: 'update_custom_css', customCSS: customCSSEditor.getValue()}
            jQuery.post(ajaxurl, customCSSData, function(response) {
            });

            setTimeout(function() {
                resolve();
            }, 500)
        })
        .then(function() {
            location.reload();
        })
        .catch(function(error) {
            console.log(error)
        })
    })
});