function updateTextInput(val) {
    $('span.update').text(val);
}

$(document).ready(function () {
    $('#addFile').click(function () {
        $('div.update').append('<input type="file" class="form-control-file my-2" name="file[]">');
    });
});
