//Get Focus
$(function() {
    $('#user_form').focus();
});


//Form Validation 

$(document).ready(function() {
    $("#signup-form").validate({
        rules: {
            username: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#pass_form"
            },
            telp: {
                required: true,
                maxlength: 12,
                number: true
            },
            alamat: {
                required: true
            }
        },
        messages: {
            username: {
                required: "Please enter your username.",
                minlength: "Your username must consist of at least 2 characters."
            },
            email: {
                required: "Please enter your email address.",
                email: "Please enter your valid email address."
            },
            password: {
                required: "Please provide your password.",
                minlength: "Your password must be at least 5 characters long."
            },
            confirm_password: {
                required: "Please provide your password.",
                minlength: "Your password must be at least 5 characters long.",
                equalTo: "Please enter the same password as above."
            },
            telp: {
                required: "Please enter your number phone.",
                maxlength: "Please enter no more than 12 characters.",
                number: "Please enter your valid number."
            },
            alamat: {
                required: "Please enter your address."
            }

        }
    });
});