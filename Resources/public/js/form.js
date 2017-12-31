$(function() {
    $('select').on('change', function() {
        if ($(this).find('option:selected').val() === '') {
            $(this).addClass('unselected');
        } else {
            $(this).removeClass('unselected');
        }
    }).change();
});
