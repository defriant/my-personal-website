const contactInput = document.querySelectorAll('.input')
contactInput.forEach(input =>{
    let parent = input.parentNode
    input.oninput = function(){
        if (input.value.length == 0) {
            parent.classList.add('invalid')
        }else{
            parent.classList.remove('invalid')
        }
    }
})

$('#btn-send').on('click', function(){
    if ($('input[name="name"]').val().length == 0) {
        let parent = $('input[name="name"]').parent()
        parent.addClass('invalid')

    }else if ($('input[name="email"]').val().length == 0) {
        let parent = $('input[name="email"]').parent()
        parent.addClass('invalid')

    }else if ($('input[name="phone"]').val().length == 0) {
        let parent = $('input[name="phone"]').parent()
        parent.addClass('invalid')

    }else if ($('input[name="subject"]').val().length == 0) {
        let parent = $('input[name="subject"]').parent()
        parent.addClass('invalid')

    }else if ($('textarea[name="message"]').val().length == 0) {
        let parent = $('textarea[name="message"]').parent()
        parent.addClass('invalid')

    }else{
        $('#btn-send').hide()
        $('.send-status').show()
        $('.input').attr('readonly', '')
        setTimeout(() => {
            $('.talk-bubble').addClass('show')
            $('.talktext').addClass('sending')
            $('.talktext').addClass('show')
            $('.talktext p').html('Your message is being sent by Skiper Bot')
        }, 100);
        setTimeout(sendProcess, 2000);
    }
})

$('.send-status-close').on('click', function(){
    $('.bot-chat').attr('src', 'assets/img/bot.png')
    $('.talktext').removeClass('failed')
    $('.talktext').removeClass('success')
    $('.talk-bubble').removeClass('show')
    $('.talktext').removeClass('show')
    $('.send-status').hide()
    $('#btn-send').show()
    $(this).hide()
})

function sendProcess() {
    $('.bot-chat').attr('src', 'assets/img/bot2.png')
    $('.talk-bubble').removeClass('show')
    $('.talktext').removeClass('show')

    setTimeout(() => {
        $('.talk-bubble').addClass('show')
        $('.talktext').addClass('sending')
        $('.talktext').addClass('show')
        $('.talktext p').html('Sending your message ! <br> Please wait')
    }, 100);
    const contactData = new FormData($('#form-contact')[0])
    $.ajax({
        type:'post',
        url:'sendMail.php',
        data:contactData,
        dataType:'json',
        contentType:false,
        processData:false,
        success:function(data){
            if (data.response == 'success') {
                $('.talktext').removeClass('sending')
                $('.talk-bubble').removeClass('show')
                $('.talktext').removeClass('show')
                setTimeout(() => {
                    $('.bot-chat').attr('src', 'assets/img/bot.png')
                    $('.talktext').addClass('success')
                    $('.talk-bubble').addClass('show')
                    $('.talktext').addClass('show')
                    $('.talktext p').html('Message sent successfully &nbsp; <i class="fas fa-check"></i>')
                }, 100);
                setTimeout(() => {
                    $('.talk-bubble').removeClass('show')
                    $('.talktext').removeClass('show')
                }, 3000);
                setTimeout(() => {
                    $('.input').removeAttr('readonly')
                    $('.input').val('')
                    $('.bot-chat').attr('src', 'assets/img/bot2.png')
                    $('.send-status-close').show()
                    $('.talk-bubble').addClass('show')
                    $('.talktext').addClass('show')
                    $('.talktext p').html('Have a great day &nbsp; :)')
                }, 3100);
            }else if(data.response == 'failed'){
                setTimeout(() => {
                    $('.talktext').removeClass('sending')
                    $('.talk-bubble').removeClass('show')
                    $('.talktext').removeClass('show')
                }, 2000);
                setTimeout(() => {
                    $('.input').removeAttr('readonly')
                    $('.bot-chat').attr('src', 'assets/img/bot2.png')
                    $('.send-status-close').show()
                    $('.talktext').addClass('failed')
                    $('.talk-bubble').addClass('show')
                    $('.talktext').addClass('show')
                    $('.talktext p').html('Oops.. something went wrong ! <br> please try again later.')
                }, 2100);
            }
        },
        error:function(){
            setTimeout(() => {
                $('.talktext').removeClass('sending')
                $('.talk-bubble').removeClass('show')
                $('.talktext').removeClass('show')
            }, 2000);
            setTimeout(() => {
                $('.input').removeAttr('readonly')
                $('.bot-chat').attr('src', 'assets/img/bot2.png')
                $('.send-status-close').show()
                $('.talktext').addClass('failed')
                $('.talk-bubble').addClass('show')
                $('.talktext').addClass('show')
                $('.talktext p').html('Oops.. something went wrong ! <br> please try again later.')
            }, 2100);
        }
    })
}