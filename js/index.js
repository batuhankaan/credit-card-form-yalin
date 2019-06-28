// Handle toggling between form inputs
$('.buttons button').on('click', function () {
  var $self = $(this);
  if (!$self.hasClass('active')) {
    var toggle = $self.data('toggle'); 

    // Switch active buttons
    $('.active').removeClass('active');
    $self.addClass('active');

    // Switch active forms
    $('form.option').attr('disabled', true);
    $(toggle).addClass('active').attr('disabled', false);

    setFormHeight();
  }
});

$(function () {
  // Set form height on document ready
  setFormHeight();

  // Set up formatting for Credit Card fields
  // $('#credit .cc-number').formatCardNumber(); 4 er haneli yapar trim çalışmadığından kapatıldı
  $('#credit .cc-expires').formatCardExpiry();
  $('#credit .cc-cvc').formatCardCVC();
});

// Set the height of the container to the height of the active form elements
function setFormHeight () {
  var activeHeight = $('.option.active').height(),
      submitHeight = $('.form-submit').outerHeight();
  $('.input').animate({
    height: activeHeight + submitHeight + 5
  }, 350);
}