jQuery(document).ready(function ($) {
    // When the notice is dismissed
    $(document).on('click', '.gadget-store-notice .notice-dismiss', function () {
        $.post(ajaxurl, {
            action: 'gadget_store_dismiss_notice'
        });
    });
});