$(document).ready(function() {
    $("form").submit(function(event) {
      event.preventDefault();
  
      var name = $(".form-name").val();
      var email = $(".form-email").val();
      var message = $(".form-message").val();
      var submit = $(".form-submit").val();
  
      $(".form-result").load("form-send.php", {
        name: name,
        email: email,
        message: message,
        submit: submit
      });
    });
  });