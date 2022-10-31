$(document).ready(function () {
    $('#offerPriceForm').validate({ // initialize the plugin

        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true,
                minlength: 9,
                maxlength: 14
            },
            desc: {
                required: true,
                minlength: 3
            }

        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});
