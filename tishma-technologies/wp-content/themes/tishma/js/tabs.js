jQuery(function($){
    $('.clickme a').click(function(){
        $('.clickme a').removeClass('activelink');
        $(this).addClass('activelink');
        var tagid = $(this).data('tag');
        $('.list').removeClass('active').addClass('hide');
        $('#'+tagid).addClass('active').removeClass('hide');
    });
});