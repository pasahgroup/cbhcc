jQuery(document).ready(function($) {
  
  $('#quote-form').on('submit', function (e) {
    e.preventDefault(); // Prevent the default form submission

    var form = $(this);
    var msgElement = form.find('#msg');
    var submitBtn = form.find('#submit');

    // Clear previous message and update button text
    msgElement.html('').show();
    submitBtn.html('Processing...').attr('disabled', true);

    // Submit form data using AJAX
    $.ajax({
      url: '../../assets/php/quote.php',
      type: 'post',
      data: form.serialize(),
      success: function (result) {
        msgElement.html(result).fadeIn(); // Display success message
        submitBtn.html('Submit').attr('disabled', false); // Reset button text and enable button
        form[0].reset(); // Reset form fields

        // Clear success message after 5 seconds
        setTimeout(function () {
          msgElement.fadeOut('slow'); // Fade out message
        }, 4000); // 4 seconds delay
      },
      error: function () {
        msgElement.html('<span style="color: red;">Error occurred. Please try again later.</span>').fadeIn(); // Display error message if AJAX request fails
        submitBtn.html('Submit').attr('disabled', false); // Reset button text and enable button
      }
    });
  });
});