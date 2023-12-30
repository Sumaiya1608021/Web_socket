import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$('#chat-part').hide();
    $('#start-chat').submit(function(event){
        event.preventDefault();
       $('#username').val($('#name').val() );
       $('#start-chat').hide();
       $('#chat-part').show();
    });
    $('#chat-form').submit(function(event){
        event.preventDefault();
     var formData= $(this).serialize();
        $.ajax({

            url:'/broadcast',
            type: 'POST',
            data:formData

        });
        $('#message').val('');
});


Echo.channel('mess').listen('Message',(e)=>{

    let html =`<br>
<b>`+e.userName+`:- </b>
    <span>`+e.message+` </span>
    `;
    $('#chat-container').append(html);
console.log(e);
});


// Echo.channel('test-channel')




// .listen('TestEvent',(data)=>{

    
//     console.log(data);
//     let tradeMessageShow=document.getElementById("test-data");
//     tradeMessageShow.innerHTML=`${data.test}`;
   

// });
