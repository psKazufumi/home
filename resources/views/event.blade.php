<x-layout>
    <link rel="stylesheet" href="{{url('css/events.css')}}">
    
    <div class="event" style="margin-top: 150px; font-size: 50px; ">

        <div class="osaka">

            <img src="{{url('/img/osaka.jpg')}}">
            
            <a href="{{url('osaka')}}">
                <p>
                    <br>
                    Osaka event
                    <br>
                    →
                </p>
            </a>

            
        </div>

        <div class="kyoto">
            <img src="{{url('/img/kyoto.jpg')}}">

            <a href="{{url('kyoto')}}">
            <p>
                <br>
                kyoto event
                <br>
                →
            </p>
            </a>

        </div>

        <div class="hyogo">
            
            <img src="{{url('/img/kobe.jpg')}}">

            <a href="{{url('hyogo')}}">
            <p>
                <br>
                Hyogo event
                <br>
                →
            </p>
            </a>

        </div>

        <div class="online">

            <img src="{{url('/img/online.jpg')}}">

            <a href="{{url('online')}}">
            <p>
                <br>
                Online event
                <br>
                →
            </p>
            </a>

        </div>
    </div>

    <div class="back"></div>

</x-layout>    
