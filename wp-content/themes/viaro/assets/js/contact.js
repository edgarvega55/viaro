jQuery(document).ready( function ($) {

    $(document).ready(function () {
        $(".icon-sendin-content").hide();
        $(".icon-sendin-content-footer").hide();
        $(".alert-message-send").hide();
    });

    let urlSite = $("#url-site").val();
    
    $(".contact-frm").submit(function () { 
        $(".btn-contact-page-footer").prop("disabled",true);
        $(".icon-sendin-content-footer").show();
        send_email('footer');
        return false;
    });
    
    $("#contact-form").submit(function () { 
        $(".btn-contact-page").prop("disabled",true);
        $(".icon-sendin-content").show();
        send_email('page-contact');
        return false;
    });

    $("#contact-form-little").submit(function () {
        $(".btn-contact-page").prop("disabled",true);
        $(".icon-sendin-content").show();
        send_email('page-contact-little');
        return false;
    });

    $("#contact-form-smaller").submit(function () {
        $(".btn-contact-page").prop("disabled",true);
        $(".icon-sendin-content").show();
        send_email('page-contact-smaller');
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

    function form_contact_page_little () {
        return {
            name: $("#name-little").val(),
            email: $("#email-little").val(),
            phone: $("#phone-little").val(),
            message: $("#message-little").val()
        };
    }

    function form_contact_page_smaller() {
        return {
            name: $("#name-smaller").val(),
            email: $("#email-smaller").val(),
            phone: $("#phone-smaller").val(),
            message: $("#message-smaller").val()
        };
    }
    
    function send_email (type) {
        
        let contactData = {};
        let buttonSend = $();
        let iconSend = $(); 
        let alertSend = $(); 

        if (type === "footer") {
            contactData = form_contact_footer();
            buttonSend = $(".btn-contact-page-footer");
            iconSend = $(".icon-sendin-content-footer");
        } else {
            switch (type) {
                case "page-contact":
                    contactData = form_contact_page();
                    break;
                case "page-contact-little":
                    contactData = form_contact_page_little();
                    break;
                case "page-contact-smaller":
                    contactData = form_contact_page_smaller();
                    break
            }
            buttonSend = $(".btn-contact-page");
            iconSend = $(".icon-sendin-content");
            alertSend = $(".alert-message-send");
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
                buttonSend.prop("disabled",false);
                iconSend.hide();
                
                var msg = '';
                if (response.status == 'success') {
                    msg = 'The message was sent'
                }
                alertSend.html(msg);
                alertSend.show(0).delay(2000).fadeOut("slow");
                alert(msg)
            },
            error: function (jqXHR, exception) {
                buttonSend.prop("disabled",false);
                iconSend.hide();
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
                alertSend.removeClass("alert-success").addClass("alert-danger");
                alertSend.html(msg);
                alertSend.show(0).delay(2000).fadeOut("slow");
                alert(msg);
            }
        });
    }
});

