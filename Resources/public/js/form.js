$(function() {
    $('select').on('load change', function() {
        if ($(this).find('option:selected').val() === '') {
            $(this).addClass('unselected');
        } else {
            $(this).removeClass('unselected');
        }
    }).trigger('load');
});
