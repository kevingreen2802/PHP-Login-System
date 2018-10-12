$(document)
    .on("submit", "form.jsRegister", function (event) {
        event.preventDefault();

        var form = $(this);
        var error = $(".jsError", form);

        var data = {
            email: $("input[type='email']", form).val(),
            password: $("input[type='password']", form).val()
        };

        if (data.email.length < 16) {
            error.text("Please enter valid email address").show();
            return false;
        } else if (data.password.length < 8) {
            error.text("Please enter a password that is at least 8 characters long").show();
            return false;
        }

        //Ajax
        error.hide();

        return false;
    });
