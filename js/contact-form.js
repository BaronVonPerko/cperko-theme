jQuery(document).ready(function($) {

    /* Contact Form Submission */
    $('#cperkoContactForm').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);

        var name    = form.find('#name').val(),
            email   = form.find('#email').val(),
            phone   = form.find('#phone').val(),
            message = form.find('#message').val(),
            ajaxUrl = form.data('url');

        if(name === '' || email === '' || message === '') {
            return; // TODO print error
        }

        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                name: name,
                email: email,
                phone: phone,
                message: message,
                action: 'cperko_save_contact_form'
            },
            error: function(res) {
                console.log(res);
            },
            success: function(res) {
                console.log(res);
                form.find('.message-sent').show();
                form.find('.form-group').hide();
            }
        })        
    });

});