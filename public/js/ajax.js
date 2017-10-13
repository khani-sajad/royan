$(document).ready(function () {
  $('.spinner').hide();
});

$(document).on('submit','.getCardOwner',function (e) {
  e.preventDefault();
  $('.spinner').show();
  var uid = $('input#uid').val();
  var mobile = $('input#mobile').val();
  var national_code = $('input#national_code').val();
  var token = $('input[name="_token"]').val();
  var formData = {
    uid : uid,
    mobile : mobile,
    national_code : national_code,
    _token : token
  }

  // var url = ;
  var target = $('.update');
  send_ajax(window.location,formData,target);

  $('form.getCardOwner').slideUp();

});


/****************************************************************/

function send_ajax(url,formData,target){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  })
  $.ajax({
    type: 'POST',
    url: url,
    data: formData,
    beforeSend: function() {
       $('.spinner').show();
    },
    success: function(data) {
      $('.spinner').hide();
      target.html(data);
    }
  });
}
