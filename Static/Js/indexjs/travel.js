$(function(){
    $('.item').on('touchstart',function(i,v){
        $('.item').removeClass('active');
        $(this).closest('.item').addClass('active');
    })
})