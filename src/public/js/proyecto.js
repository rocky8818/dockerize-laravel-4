$(function(){
    $('.floors li').click(function(){
        $('.floors li').removeClass('active');
        var current = $(this);
        current.addClass('active');

        $('.floor-image').addClass('hidden');
        $('#floor-'+current.data('floor')).removeClass('hidden');
    });
});