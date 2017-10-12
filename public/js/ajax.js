$(document).on('submit','.getCardOwner',function (e) {
  e.preventDefault();
  var uid = $('input#uid').val();
  var token = $('input[name="_token"]').val();
  var formData = {
    uid : uid,
    _token : token
  }

  // var url = ;

  var result = send_ajax(window.location,formData);

  $('.update').html(result);
});


/****************************************************************/

function send_ajax(url,formData){
  var final = '';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  })
  final = $.ajax({
    type: 'POST',
    url: url,
    async: false,
    data: formData,
    success: function(data) {
      return data;
    }
  }).responseText;
  return final;
}
