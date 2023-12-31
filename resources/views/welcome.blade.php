<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/styles.css">
    <title>Boot chat</title>
    </head>
    <body>
        <div class="header-chat">
            <i class="icon fa fa-user-o" aria-hidden="true"></i>
            <p class="welcome">Welcome Boot Chat!</p>
            <i class="icon clickable fa fa-ellipsis-h right" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
            <nav class="menu">
                <ul class="items">
                    <li class="item">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </li>
                    <li class="item">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </li>
                    <li class="item">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </li>
                    <li class="item item-active">
                        <i class="fa fa-commenting" aria-hidden="true"></i>
                    </li>
                    <li class="item">
                        <i class="fa fa-file" aria-hidden="true"></i>
                    </li>
                    <li class="item">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </li>
                </ul>
            </nav>
            <section class="discussions">
                <!-- <div class="discussion search">
                    <div class="searchbar">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" placeholder="Search..."></input>
                    </div>
                </div> -->
                <div class="discussion message-active">
                    <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
                        <div class="online"></div>
                    </div>
                    <div class="desc-contact">
                        <p class="name">Megan Leib</p>
                        <p class="message">9 pm at the bar if possible 😳</p>
                    </div>
                    <div class="timer">12 sec</div>
                </div>
            </section>
            <section class="chat">
                <div class="messages-chat">
                    <div class="message">
                        <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
                        <div class="online"></div>
                        </div>
                        <p class="text"> Hi, how are you ? </p>
                    </div>
                    <div class="message text-only">
                        <p class="text"> What are you doing tonight ? Want to go take a drink ?</p>
                    </div>
                    <p class="time"> 14h58</p>
                    <div class="message text-only">
                        <div class="response">
                        <p class="text"> Hey Megan ! It's been a while 😃</p>
                    </div>
                </div>
                <div class="message text-only">
                    <div class="response">
                        <p class="text"> When can we meet ?</p>
                    </div>
                </div>
                    <p class="response-time time"> 15h04</p>
                <div class="message">
                    <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
                        <div class="online"></div>
                    </div>
                    <p class="text"> 9 pm at the bar if possible 😳</p>
                </div>
                    <p class="time"> 15h09</p>
                </div>
                <div class="footer-chat">
                    <i class="icon fa fa-smile-o clickable" style="font-size:25pt;" aria-hidden="true"></i>
                    <input type="text" class="write-message" placeholder="Type your message here"></input>
                    <i class="icon send fa fa-paper-plane-o clickable" aria-hidden="true"></i>
                </div>
            </section>
            </div>
        </div>
    </body>
</html>