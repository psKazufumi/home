<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link icon="">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="shortcut icon" href="img/dawn.logo2.jpg">
    <script src="https://kit.fontawesome.com/f7e10a50b0.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
    <title>Dawn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
</head>

    <div class="header">
        
        <div class="name">
            <a href="{{url('/')}}"><img src="img/dawn.logo.png" style="height: 50px"></a>
            Dawn
        </div>
        
        <div class="menu">       
            <ul>
                <li><a href="{{url('about')}}">About</a>
                    <ul class="a">
                        <li><a href="{{url('about/#phirosophy')}}">Philosophy</a></li>
                        <li><a href="{{url('about/#vision')}}">Vision</a></li>
                        <li><a href="{{url('about/#purpose')}}">Purpose</a></li>
                        <li><a href="{{url('about/#contents')}}">Contents</a></li>
                    </ul>
                </li>
                <li><a href="{{url('event')}}">Event</a>
                    <ul>
                        <li><a href="{{url('event')}}">イベント一覧</a></li>
                        <li><a href="{{url('past')}}">過去のイベント</a></li>
                        <li><a href="{{url('now')}}">今月のイベント</a></li>
                        <li><a href="{{url('future')}}">今後のイベント</a></li>
                    </ul>
                </li>
                <li><a href="{{url('member')}}">Member</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- 1125以下はハンバーガーメニュー -->
    <div class="h-menu" id="open">
        <span class="material-icons">menu</span>
    </div>

    <div class="overlay">
        <span class="material-icons" id="close">close</span>
        <nav>
            <ul>
                <li><a href="https://www.instagram.com/dawn_community"><img src="img/dawn.logo.png"  width="70px" height="60px" border-radioius="20px"></a></li>
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="{{url('event')}}">Event</a></li>
                <li><a href="{{url('member')}}">Member</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
            </ul> 
        </nav>
    </div>

<body>
        {{ $slot }}
</body>

<div class="footer">    
    <p>
        ©︎dawn
    </p>
</div>

    <script src="{{url('js/main.js')}}"></script>
</html>