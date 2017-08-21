 $(document).ready(function() {
     $("#loginform").validate({
         rules: {
             log: {
                 required: true
             },
             pwd: {
                 required: true
             }
         },
         messages: {
             log: {
                 required: "Please enter a username."
             },
             pwd: {
                 required: "Please enter a password."
             }
         }
     });
 });