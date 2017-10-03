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
  //dash
  $('input.dash').keyup(function(event) {
      if(event.which >= 37 && event.which <= 40) return;
      $(this).val(function(index, value) {
        return value
        .replace(/\D/g, "")
        .replace(/\B(?=(\d{4})+(?!\d))/g, "-")
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


  //dashboard
  $('a.mother').click(function () {
    var id = $(this).attr('data-show');
    var role = $(this).attr('data-role');

    $(this).children('.rotate').toggleClass('flip');

    if(role=='show'){
      $('div#'+id).slideDown();
       $(this).attr('data-role','hide');
    }else{
      $('div#'+id).slideUp();
      $(this).attr('data-role','show');
    }

  });
});
