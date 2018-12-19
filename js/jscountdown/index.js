$(function(){
    $('#countdown').countdown("2017/9/26 23:00:00")  
    .on('update.countdown', function(event){
        format = "还剩%D天, %H时, %M分, %S秒开始抽奖";
        $(this).html(event.strftime(format));
        console.log('update');
    })  
    .on('finish.countdown', function(event){
        $(this).html('开始抽奖');
    });
})
