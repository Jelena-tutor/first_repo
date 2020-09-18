$('.linkbox-elem').on('click', function(e){
    var link = $(this).attr("data-link");
    window.location.assign(link);

});


var mHeight = 0;
$('.linkbox-elem-title').each(function(index,element){
    if ($(this).height() > mHeight) {
        mHeight = $(this).height();
    }
});

$('.linkbox-elem-title').height(mHeight);
