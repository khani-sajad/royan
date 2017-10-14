$("#login-button").click(function(event){
    event.preventDefault();

  $('form').fadeOut(500);
  $('.wrapper').addClass('form-success');
});

$('#check, label').click(function () {
 if ($('#check').hasClass('fa-square-o')) {
   $('input[type=checkbox]').attr('checked', true);
   $('#check').removeClass('fa-square-o').addClass('fa-check-square-o');
 }else {
   $('input[type=checkbox]').attr('checked', false);
   $('#check').removeClass('fa-check-square-o').addClass('fa-square-o')
 }
});
