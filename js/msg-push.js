
    function greet(){
        date = new Date()
        hour = date.getHours();
        prompt = '';

        if(hour <= 11)
            prompt = "Good Morning"
        else if(hour >= 11 && hour <= 15 )
            prompt = "Good Afternoon"
        else if (hour >= 15 && hour <= 23)
            prompt = "Good Evening"

        return prompt
    }



$('#push-msg').click(()=> {
    
    msg = $('textarea#msg').val().trim();
    pushMsg = '<div class="col-12" id="user"><span id="user-msg">'+msg+'</span>'
    
    

    if (msg.length > 0){

        $('#chat-box-body').append(pushMsg);
        $('textarea#msg').val('');
    
    // push msg to db
    axios.post('http://localhost/chat-box/botman/bot.php',{
				data: msg
			})
			.then((response) => {
                
                
                // replace (greet)
                str = response.data.replace("(greet)",greet());

                bot = '<div class="col-12 " id="bot"><span><i class="fa fa-robot fa-1x" id="ico"></i> </span><span id="bot-msg">' + str + '</span></div>';
                $('#chat-box-body').append(bot);
                $('textarea#msg').val('');
                // scroll to last lane
                $("#chat-box-body").scrollTop($("#Chat-box-body")[0].scrollHeight);
			}, (error) => {
				console.log(error.data);
			});	
    }
    else {/* Do ntn */}

    });


$('textarea#msg').on('keyup',()=> {
    len = $('textarea#msg').val();
    if(len.length > 0)
        $('#push-msg').show(100);
    else
        $('#push-msg').hide(100);
});

