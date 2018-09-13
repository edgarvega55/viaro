jQuery(document).ready( function ($) {

    let urlSite = $("#url-site").val();

    $(".contact-frm").submit(function (e) { 
        send_email('footer');
        return false;
    });
    
    $("#contact-form").submit(function (e) { 
        send_email('page-contact');
        return false;
    });

    function form_contact_footer () {
        return {
            name: $("#contact-name").val(),
            email: $("#contact-email").val(),
            phone: $("#contact-phone").val(),
            message: $("#contact-message").val()
        };
    }
    
    function form_contact_page () {
        return {
            name: $("#name").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
            message: $("#message").val()
        };
    }
    
    function send_email (type) {
        
        let contactData = {};
    
        if (type === "footer") {
            contactData = form_contact_footer();
        } else {
            contactData = form_contact_page();
        }
        
        let infoContact = JSON.stringify({
            "name":contactData.name,
            "email": contactData.email, 
            "phone": contactData.phone, 
            "message": contactData.message
        });
        
        $.ajax({
            type: "POST",
            url: urlSite + "/wp-json/sendEmail/v2",
            contentType: "application/json; charset=utf-8",
            data: infoContact,
            success: function (response) {
                var msg = '';
                if (response.status == 'success') {
                    msg = 'The message was sent'
                }
                alert(msg)
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);
            }
        }); 
    }
});

