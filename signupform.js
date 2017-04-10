
$(document).ready(function(){
  jQuery.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
  }, ["Don't leave it empty and no space please!"]),

  $("#signupform").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      username: {
        required: true,
        noSpace: true
      },
      password: {
        required: true,
        minlength: 5
      },
      rePassword: {
        required: true,
        minlength: 5,
        equalTo: "#password"
      }
    },
    messages: {
      name: "Please enter your name",
      email: "Please enter a valid email, for example, Jone.Smith@example.com",
      username: "Please enter a username without space",
      password: {
        required: "You must enter your password",
        minlength: "Your password must have 5 characters at least"
      },
      rePassword:
      {
        required: "You must enter your password",
        minlength: "Your password must have 5 characters at least",
        equalTo: "You must type the same password with above"
      }
    }
  })
});
