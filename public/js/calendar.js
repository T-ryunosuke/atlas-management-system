$(function(){
  $('.delete-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    var date = $(this).attr('date');
    var part = $(this).attr('part');
    $('.modal-inner-date span').text(date);
    $('.modal-inner-date input').val(date);
    $('.modal-inner-part span').text(part);
    $('.modal-inner-part input').val(part);
    return false;
  });
  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});
