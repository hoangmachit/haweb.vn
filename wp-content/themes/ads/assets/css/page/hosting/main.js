$('body').on('click', '.ul-tabs li:not(".active")', function (e) {
    $('.ul-tabs li').removeClass('active');
    $(this).addClass('active');
    let container = $(this).data('tab');
    let rootTAB = $('.hosting-wrapper-tab');
    rootTAB.removeClass('show');
    rootTAB.addClass('hide');
    $(`#${container}`).addClass('show');
});