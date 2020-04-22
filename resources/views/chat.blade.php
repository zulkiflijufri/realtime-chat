<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Private Chat</title>
</head>

<body>
    <div class="container" id="app">
        <div class="row">
            <div class="offset-md-4 col-4 mt-3">
                <li class="list-group-item active text-center">Private Chat</li>
                <ul class="list-group" style="overflow-y: scroll; height: 200px;" v-chat-scroll>
                    <message v-for="chat in chat.messages" :key="chat.id" color="warning">
                        @{{ chat }}
                    </message>
                </ul>
                <input type="text" class="form-control" placeholder="Type your message here" autocomplete="off" v-model="message" @keyup.enter="send">
            </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>