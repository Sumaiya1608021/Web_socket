
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Static Chat App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    
<div id='start-chat'>
    <form id="save-name">
        <input type='text' name='name' id='name' placeholder='Enter Name' required>
        <input type='submit' value='Lets chat'>
    </form>
</div>
<br><br>
<div id='chat-part'>
    <form id="chat-form">
        @csrf
        <input type='hidden' name='username' id='username'>
        <input type='text' name='message' id='message' placeholder='Enter Message' required>
        <input type='submit' value='Send'>
    </form>
    <div id='chat-container'>

    </div>
</div>

<script>
//     $('#chat-part').hide();
//     $('#start-chat').submit(function(event){
//         event.preventDefault();
//        $('#username').val($('#name').val() );
//        $('#start-chat').hide();
//        $('#chat-part').show();
//     });
//     $('#chat-form').submit(function(event){
//         event.preventDefault();
//      var formData= $(this).serialize();
//         $.ajax({

//             url:"{{route('broadcastMessage')}}",
//             type: 'POST',
//             data:formData

//         });
//         $('#message').val('');
// });
// Echo.channel('mess').listen('Message',(e)=>{

//     let html =`<br>
// <b>`+e.userName+`:- </b>
//     <span>`+e.message+` </span>
//     `;
//     $('#chat-container').append(html);
// });

</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>
</html>