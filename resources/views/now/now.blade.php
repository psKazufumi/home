<x-layout>

<link rel="stylesheet" href='{{url("css/now.css")}}'>

<div class="event-detail">

    <h1>Event | This month</h1>

</div>

<div class="schedule">

    <div class="day">
        日程<br>
        <br>
        <p>2022/04/16</p>
        <p>2022/04/23</p>
        <p>2022/04/30</p>
    </div>

    <div class="e-name">
        イベント名<br>
        <br>
        <a href="{{url('now.joinus')}}"><p>オンライン国際交流 | Join Us</p></a>
        <a href="{{url('now.drink')}}"><p>少しのお酒と少しの話題</p></a>
        <a href="{{url('now.furugi')}}"><p>ふるぎ集会</p></a>    
    </div>

    <div class="place">
        場所<br>
        <br>
        <p>オンライン</p>
        <p>大阪（西九条）</p>
        <p>京都（新京極周辺）</p>
    </div>

    <div class="time">
        時間<br>
        <br>
        <p>11:00~13:00</p>
        <p>16:00~18:00</p>
        <p>13:00~15:30</p>
        
    </div>

</div>

<div class="smp">    

    <div class="join-us">
        <br>
        <p>04月16日</p>
        <p><a href="{{url('now.joinus')}}">「Join Us」</a></p>
        <p>オンライン</p>
        <p>11:00~13:00</p>
    </div>

    <div class="curry">
        <br>
        <p>2022/04/23</p>
        <a href="{{url('now.drink')}}"><p>「少しのお酒と少しの話題」</p></a>
        <p>大阪（西九条）</p>
        <p>16:00~18:00</p> 
    </div>

    <div class="atsukihitoyo">
        <br>
        <p>2022/04/30</p>
        <p><a href="{{url('now.furugi')}}">「ふるぎ集会」</a></p>
        <p>京都（新京極周辺）</p>
        <p>13:00~15:30</p>
    </div>



</div>

</x-layout>