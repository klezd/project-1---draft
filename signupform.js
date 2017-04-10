$(document).ready(function(){

   jQuery.validator.addMethod("noSpace", function(value, element) {
     return value == '' || value.trim().length != 0;
   }, "No space please and don't leave it empty");


$("form").ready(function(){
  $("#signupform").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      uname: {
        required: true;
        noSpace: true
      },
      pwd: {
        required: true,
        minlength: 5
      },
      rePwd: {
        required: true,
        minlength: 5,
        equalTo: "#pwd"
      }
    },
    messages: {
      name: "Please enter your name",
      email: "Please enter a valid email, for example, Jone.Smith@example.com",
      uname: "Please enter a username without space",
      pwd: "Your password must have 5 characters at least",
      rePwd: "You must type the same password with above"
    }
  })
});
