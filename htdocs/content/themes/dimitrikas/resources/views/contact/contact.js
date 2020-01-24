$(document).ready(() => {
  $('#contact_form #submit_form').attr('disabled', 'disabled');
  $('#contact_form').submit(function (e) {
    e.preventDefault();
    $.ajax({
      url: themosis.ajaxurl, // Global access to the WordPress ajax handler file
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'contact-form', // Your custom hook/action name
        security: themosis.ajaxnonce, // A nonce value
        data: $(this).serialize(), // The value you want to send
      },
    }).done((data) => {
      if (data = 1) {
        $('.alert, #contact_form').slideUp();
        $('.alert-success').slideDown();
      } else {
        $('.alert').slideUp();
        $('.alert-danger').slideDown();
      }
    }).fail((err) => {
      $('.alert').slideUp();
      $('.alert-danger').slideDown();
    });
  });

  $('#contact_form .required').on('input', () => {
    let isValid = true;
    $('#contact_form .required').each(function () {
      const element = $(this);
      if (element.val() == '') {
        isValid = false;
      }
    });

    if (isValid) {
      $('#contact_form #submit_form').removeAttr('disabled');
    } else {
      $('#contact_form #submit_form').attr('disabled', 'disabled');
    }
  });
});
