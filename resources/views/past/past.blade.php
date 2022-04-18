<x-layout>
    <link rel="stylesheet" href="{{url('css/past.css')}}">

    <div class="e-past">
        <h1>
            過去のイベント
        </h1>
    </div>

<div class="slideShow">
    <ul class="imgWrap">
        <li class="is-show"><a href="{{url('past.curry')}}"><img src="{{url('img/event1.jpg')}}" alt="テラちゃんのカレーライス"></a></li>
        <li><a href="{{url('past.christmas')}}"><img src="{{url('img/christmas.jpeg')}}" alt="クリスマス会"></a></li>
        <li><a href="{{url('past.atsukihitoyo')}}"><img src="{{url('img/atsukihitoyo.jpeg')}}" alt="熱き人よ"></a></li>
        <li><a href="{{url('past.online')}}"><img src="{{url('img/event3.jpg')}}" alt="おうち国際交流会"></a></li>
    </ul>
    <button class="btn-prev">〈</button>
    <button class="btn-next">〉</button>

</div>

<div class="schedule">

    <div class="day">
        日程<br>
        <br>
        <p>2021/11/08</p>
        <p>2021/12/26</p>
        <p>2022/02/18</p>
        <p>2022/03/16</p>
    </div>

    <div class="e-name">
        イベント名<br>
        <br>
        <a href="{{url('past.curry')}}"><p>テラちゃんのカレーライス</p></a>
        <a href="{{url('past.christmas')}}"><p>大忘年会</p></a>
        <a href="{{url('past.atsukihitoyo')}}"><p>熱き人よ</p></a>
        <a href="{{url('past.online')}}"><p>オンライン国際交流 | Join Us</p></a>
    </div>

    <div class="place">
        場所<br>
        <br>
        <p>大阪（北新地）</p>
        <p>TRIBECA（西九条）</p>
        <p>TRIBECA（西九条）</p>
        <p>オンライン</p>
    </div>

    <div class="time">
        時間<br>
        <br>
        <p>12:00~14:00</p>
        <p>14:00~16:00</p>
        <p>14:00~16:00</p>
        <p>11:00~13:00</p>
    </div>
    </div>

    <div class="smp">

        <div class="curry">
            <br>
            <p>2021/11/08</p>
            <a href="{{url('past.curry')}}"><p>テラちゃんのカレーライス</p></a>
            <p>大阪（北新地）</p>
            <p>12:00~14:00</p>
            
        </div>

        <div class="atsukihitoyo">
            <br>
            <p>2021/12/26</p>
            <p><a href="{{url('past.christmas')}}">「大忘年会」</a></p>
            <p>TRIBECA（西九条）</p>
            <p>14:00~16:00</p>


        </div>

        <div class="atsukihitoyo">
            <br>
            <p>2022/02/18</p>
            <p><a href="{{url('past.atsukihitoyo')}}">「熱き人よ」</a></p>
            <p>TRIBECA（西九条）</p>
            <p>14:00~16:00</p>


        </div>

        <div class="join-us">
            <br>
            <p>2022/03/16</p>
            <p><a href="{{url('past.joinus')}}">Join Us</a></p>
            <p>オンライン</p>
            <p>11:00~13:00</p>


        </div>

    </div>
</div>

</div>

<script src="{{url('js/past.js')}}"></script>


</x-layout>