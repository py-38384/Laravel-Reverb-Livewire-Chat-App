<link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
<style>
    .dp-container img{
        width: 50px;
        border-radius: 50%;
    }
    
    .recipient-dp img{
        width: 25px;
        border-radius: 50%;
    }

    .chat-container{
        display: flex;
        flex-direction: column;
    }
    .message-container{
        display: flex;
        flex-direction: column;
        gap: 3px;
        padding-bottom: 8px;
    }
    .message-container .message{
        padding: 5px;
        width: fit-content;
    }
    .chat-left .message{
        background-color: rgb(237 237 237);
        color: black;
    }
    .chat-container .chat{
        display: flex;
        align-items: end;
        gap: 10px;
    }


    .chat-container .chat-left .message:first-child{
        border-top-left-radius: 10px;
    }
    .chat-container .chat-left .message{
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .chat-container .chat-left .message:last-child{
        border-bottom-left-radius: 10px;0;
    }

    .chat-container .chat-right .message-box:first-child .message{
        border-top-right-radius: 10px;
    }
    .chat-container .chat-right .message-box .message{
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .chat-container .chat-right .message-box:last-child .message{
        border-bottom-right-radius: 10px;
    }


    .chat-container .chat-right{
        justify-content: end;
        flex-direction: row-reverse;
    }
    .chat-right .message{
        background-color: #262626;
        color: white;
        max-width: 400px;
    }
    .message-box{
        display: flex;
        align-items: end;
        gap: 2px;
    }
    .message-box:last-child .message-right{
        display: block;
        margin-bottom: 30px;
    }
</style>
<div>
    <div class="chat-header">
        <span><i class='bx  bx-arrow-from-right-stroke'></i></span>
        <h4 class="text-2xl font-extrabold">{{ $user->name }}</h4>
    </div>
    <div class="chat-container">
        <div class="chat chat-left">
            <div class="dp-container"><img src="{{ asset('assets/images/piyal.jpg') }}" class="w-[100px]" alt=""></div>
            <div class="message-container">
                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div class="message">Lorem ipsum</div>
            </div>
        </div>
        <div class="chat chat-right">
            <div class="message-container">
                <div class="message-box">
                    <span class="message message-right">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </span>
                    <span class="recipient-dp" style="display:none;"><img src="{{ asset('assets/images/onika.jpg') }}" alt=""></span>
                </div>
                <div class="message-box">
                    <span class="message message-right">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aliquam natus consequatur tenetur ab et est repellat, nesciunt sint libero, amet nam facere. Quis, atque odio. Dolorem vitae fugit harum.
                    </span>
                    <span class="recipient-dp" style="display:none;"><img src="{{ asset('assets/images/onika.jpg') }}" alt=""></span>
                </div>
                <div class="message-box">
                    <span class="message message-right">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </span>
                    <span class="recipient-dp"><img src="{{ asset('assets/images/onika.jpg') }}" alt=""></span>
                </div>
            </div>
        </div>
    </div>
    <div class="chat-sendbox">

    </div>
</div>