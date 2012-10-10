$(function() {
    var msg = 'Enter a search word';

    $('input[type=text]').focus(function() {
        if ($(this).val() == msg) 
            $(this).val('');
    });
    $('input[type=text]').blur(function() {
        if ($(this).val() == '') 
            $(this).val(msg);
    });
});
