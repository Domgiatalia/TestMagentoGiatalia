define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/totals'
    ],
    function(Component, totals) {
        'use strict';
        return Component.extend({
            isLoading: totals.isLoading
        });
    }
);
