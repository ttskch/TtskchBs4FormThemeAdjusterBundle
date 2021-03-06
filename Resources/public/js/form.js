$(function() {
    $('select').on('load change', function() {
        if ($(this).find('option:selected').val() === '') {
            $(this).addClass('unselected');
        } else {
            $(this).removeClass('unselected');
        }
    }).trigger('load');

    $('form').on('reset', function() {
        let that = this;
        setTimeout(function() {
            $(that).find('select').change();
        }, 0);
    });
});
