$(document).ready(function(){
  $('#contact_form #submit_form').attr('disabled', 'disabled');
    console.log('lol');
  $('#contact_form').submit(function(e) {
    e.preventDefault();
      $.ajax({
        url: themosis.ajaxurl, // Global access to the WordPress ajax handler file
        type: 'POST',
        dataType: 'json',
        data: {
          action: 'contact-form', // Your custom hook/action name
          security: themosis.ajaxnonce, // A nonce value
          data: $(this).serialize() // The value you want to send
        }
      }).done(function(data)
      {	
        if (data = 1) {
          $('.alert, #contact_form').slideUp();
          $('.alert-success').slideDown();
        } else {
          $('.alert').slideUp();
          $('.alert-danger').slideDown();
        }
      }).fail(function(err)
      {	
        $('.alert').slideUp();
        $('.alert-danger').slideDown();
      });
  });

  $('#contact_form .required').on('input', function (){
    var isValid = true;
    $("#contact_form .required").each(function() {
      var element = $(this);
      if (element.val() == "") {
        isValid = false;
      }
    });

    if (isValid){
      $('#contact_form #submit_form').removeAttr('disabled');
    } else {
      $('#contact_form #submit_form').attr('disabled', 'disabled');
    }
  });
});
