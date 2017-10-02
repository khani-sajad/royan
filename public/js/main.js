$(document).ready(function () {

  //flash messages
  $('.flash').delay(5000).fadeOut(1000);

  //commo
  $('input.commo').keyup(function(event) {
      if(event.which >= 37 && event.which <= 40) return;
      $(this).val(function(index, value) {
        return value
        .replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        ;
      });
    });

  //attempt to delete
  $('button.delete').click(function () {
    var form = $(this).parents('form');
    form.addClass('formToBeSubmitted');
    $('.areYouSure').slideDown();
  });
  //yes
  $(document).on('click','button#yes',function () {
    $('.formToBeSubmitted').submit();
  });
  $(document).on('click','button#no',function () {
    $('.areYouSure').slideUp();
  });

});
