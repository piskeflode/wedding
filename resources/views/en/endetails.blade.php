@extends('layouts.master')

@section('content')
    <div class="header">

        <div class="navigation">
            <ul>
                <li><img src="../img/arrow-left.png" alt=""></li>
                <li><a href="{{route('mainEnglish')}}">Our Wedding</a></li>
                <li><a href="{{route('detailsEnglish')}}">Details</a></li>
                <li><img src="../img/arrow-right.png" alt=""></li>
            </ul>
        </div>

        <div class="names"> <span>Nikita & Katia</span>  <br> <span class="getting"><p>Are getting married</p></span></div>

        <div class="countdown">
            <div class="clocks">
                <p>Left only</p>
                <div id="clockdiv">
                    <span class="days"></span>
                    <span>days</span>
                </div>
            </div>
        </div>
    </div>

    <div class="city">
        <ul>
            <li><img src="../../images/arrow-left.png" alt=""></li>
            <li> <h1>Welcome to our lovely town Visaginas</h1></li>
            <li><img src="../../images/arrow-right.png" alt=""></li>
        </ul>

        <div class="video"><iframe width="853" height="480" src="https://www.youtube.com/embed/WCNAaD69Z8Y?rel=0&amp;controls=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen></iframe></div>
    </div>

    <div class="dayplan">
        <div class="dayplanheader">

            {{--<ul>
                <li><img src="../../images/planleft.png" alt=""></li>
                <li><p>Plan of the day</p> <p> The wedding will take place at 2 locations </p></li>
                <li><img src="../../images/planright.png" alt=""></li>
            </ul>--}}

            <div class="col3"><img src="../../images/planleft.png" alt=""></div>
            <div class="col3 text"><p class="planheading">Plan of the day</p> <p> The wedding will take place at 2 locations </p></div>
            <div class="col3"><img src="../../images/planright.png" alt=""></div>

        </div>
        <div class="detailswrapper">
            <div class="details">
                <p>The Civil Ceremony will be at 14.30<br>
                Address: Sedulinos al.69A, Visaginas , Lithuania</p>
                <img src="../../images/zags.png" alt="">
                <p>The ceremony will be around 30 min.</p>
                <p>After that we will all travel to take beatiful pictures among Lithuanian nature</p>
            </div>

            <div class="details2">
                <p>The party will start from 16:00</p>
                <p>Address: Babilninku kaimas, Moletu rajonas 33333</p>
                <img src="../../images/usadba.png" alt="">
                <p>On the first day (3 June), we will have a dinner and various activities <br>
                    with the host, DJ as well as photosession. <br>
                    We are going to stay there also for the 2nd day (4 June) , whee will be an informal party. <br>
                    We will have BBQ and sauna. Please take with you extra clother.</p>
            </div>
        </div>
    </div>

    <div class="reach">
        <div class="reachwrapper">
            <h1>How to reach?</h1>

            <div class="info">
                <p>We will provide the transportation during the wedding days. <br>
                    The taxi is quite cheap, it will cost 2 Eur for one ride- <br>
                    Taxi numbers: +370 386 33000 and +370 690 24444
                </p>
                <p>
                    Airports: Vilnius, Kaunas or Riga (Latvia) <br>
                    Train: https://www.traukiniobilietas.lt/portal/en <br>
                    Buses: https://www.autobusubilietai.lt/index.php?lang=0&
                </p>
            </div>
            <div id="map"></div>
        </div>
    </div>

    <div class="stay">
        <div class="staywrapper">
            <ul>
                <li><img src="../../images/arrow-left.png" alt=""></li>
                <li><h1>Where to stay </h1></li>
                <li><img src="../../images/arrow-right.png" alt=""></li>

            </ul>
            <p>As our city Visaginas is a small town, <br>
                we don’t have variety of choices of accomandation. <br>
                Any problems with bookins, let us know, we will help you.
            </p>
            <div class="accomondation">
                <p><a href="http://hotel-idile.com/en"> IDILE</a></p>
                <img src="../../images/idile.png" alt="">
                <p>The price range from 25€ to 65€. <br>
                    Possible to book online. <br>
                    Breakfast included.</p>
            </div>
            <div class="accomondation">
                <p><a href="http://vrpc.lt/apgyvendinimas/"> Visagino parkas </a></p>
                <img src="../../images/vrpc.png" alt="">
                <p>The price range from 21€ to 29€. <br>
                    Possible to book via e-mail. <br>
                    Breakfast not included. <br>
                    4 km from the city, easy to access by a taxi</p>
            </div>
            <div class="accomondation">

                <p><a href="http://www.gabriella.lt/viesbutis/"> Gabriela </a></p>

                <img src="../../images/gabriela.png" alt="">
                <p>The price range from 38€ to 75€. <br>
                    Possible to book via e-mail. <br>
                    Breakfast included.</p>
            </div>
            <div class="accomondation">
                <p><a href="https://www.airbnb.com/rooms/15633520?guests=1 &adults=1&childr"> AIRBNB</a></p>
                <img src="./../images/Airbnb.png" alt="">
                <p>The AirBnb apartmant pricefrom 45€ b <br>
                    for 4 persons. <br>
                    Possible to book online</p>
            </div>
        </div>
    </div>

    <div class="seeya">
        <h1>See you all very soon!</h1>
        <img src="../../images/seeyouphoto.jpg" alt="">
    </div>


@endsection