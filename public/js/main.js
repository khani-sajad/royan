$(document).ready(function () {

    //flash messages
    $('.flash').delay(5000).fadeOut(1000);

    //commo
    $(document).on('keyup','input.commo',function(event) {
        if(event.which >= 37 && event.which <= 40 && event.which != 8) return;
        $(this).val(function(index, value) {
            return value
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            ;
        });
    });
    //dash
    $(document).on('keyup','input.dash',function(event) {
        var value = $(this).val();
        if(event.which >= 37 && event.which <= 40  && event.which != 8) return;
        var len = value.replace(/-/g, "").length;
        if (event.which != 8 && len % 4 == 0 && len !=0 && value.length != 19) {
            $(this).val(value+'-');
        }
    });

    // reference input type
    $('input[name=is_reference]').change(function() {
        if ( !this.checked ){
            $('.refToggle').slideUp();
        }else {
            $('.refToggle').slideDown();
        }
    });
    $('input#dedicated_cards').keyup(function () {
        var value = $(this).val();
        if (isInt(value)){
            var start  = $('#bargFrom').attr('data-value');
            var end    = parseInt(start) + parseInt(value) - 1;
            var output = '<i class="fa fa-info-circle"></i> از <span>'+start+'</span> تا <span>'+end+'</span>';
        }else {
            var output = '';
        }
        $('p.dedicated-cards-info').html(output);
    });


    //prevent submiting from card reader
    $('[data-card-reader]').on('submit', function(){
        if ($('#uid:focus').length){return false;}
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

    //barg transaction
    $(document).on('keyup','form.barg-transaction input[name=amount]', function () {
        var target = $(this).siblings('span');
        var value = parseInt($(this).val());
        if (value) {
            var discount = parseInt($(this).attr('data-discount'));
            value -= Math.floor(value/discount);
            target.html('مبلغ دریافتی از مشتری : '+value);
        }else {
            target.html('');
        }
    });

    //helper functions
    function isInt(value) {
      return !isNaN(value) &&
             parseInt(Number(value)) == value &&
             !isNaN(parseInt(value, 10));
    }

});
