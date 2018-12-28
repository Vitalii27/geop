
jQuery(function ($) {
    var list = $('.services_item');
    var btn = $('.hero_btn-popup');
    list.on('click', function (e) {
        var text = $(this).find('.services_item-name')[0].innerText
        $('.mfp-container').find('.form_hidden')[0].value = text

    })
    btn.on('click', function () {
        $('.callback').find('.form_hero-hidden')[0].value = ''
        var text = $(this).find('span').html()

        $('.callback').find('.form_hero-hidden')[0].value = text

    })
});