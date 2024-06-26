import './bootstrap';

$(document).ready(function(){

    $(document).on('click','#send_message',function (e){
        e.preventDefault();

        let username = $('#username').val();
        let message = $('#message').val();

        if(username == '' || message == ''){
            alert('Please enter both username and message')
            return false;
        }

        $.ajax({
            method:'post',
            url:'/send-message',
            data:{username:username, message:message},
            success:function(res){
                //
            }
        });

    });
});

window.Echo.channel('my-channel')
    .listen('.my-event',(e)=>{
        console.log('e',e)
    });

window.Echo.channel('channel-button-click-pertanyaan')
    .listen('.event-button-click-pertanyaan',(e)=>{
        console.log('e',e)
    });
window.Echo.channel('channelKirimPertanyaanS2')
    .listen('.eventKirimPertanyaanS2',(e)=>{
        console.log('e',e)
    });