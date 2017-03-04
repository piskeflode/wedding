@extends('layouts.master')

@section('content')
    <div class="header">

        <div class="navigation">
            <ul>
                <li><img src="../img/arrow-left.png" alt=""></li>
                <li><a href="{{route('mainRussian')}}">Наша Свадьба</a></li>
                <li><a href="{{route('detailsRussian')}}">Детали</a></li>
                <li><img src="../img/arrow-right.png" alt=""></li>
            </ul>
        </div>

        <div class="names"> <span>Никита и Катя</span>  <br> <span class="getting"><p>Женятся</p></span></div>

        <div class="countdown">
            <div class="clocks">
                <p>Осталось только</p>
                <div id="clockdiv">
                    <span class="days"></span>
                    <span>дня</span>
                </div>
            </div>
        </div>
    </div>

    <div class="city">
        <ul>
            <li><img src="../../images/arrow-left.png" alt=""></li>
            <li> <h1>Приветствуем в нашем городе Висагинас</h1></li>
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
            <div class="col3 text"><p class="planheading"><h1>План свадьбы</h1></p> <p> Свадьба будет проходить в двух местах </p></div>
            <div class="col3"><img src="../../images/planright.png" alt=""></div>

        </div>
        <div class="detailswrapper">
            <div class="details">
                <p>Торжественная церемония начнётся в 14.30<br>
                Адрес: Sedulinos al.69A, Visaginas</p>
                <img src="../../images/zags.png" alt="">
                <p>Церемония продлится около 30 минут.</p>
                <p>После этого мы отправимся на фотосессию.</p>
            </div>

            <div class="details2">
                <p>Празднование начнётся в 16:00</p>
                <p>Адрес: Babilninku kaimas, Moletu rajonas</p>
                <img src="../../images/usadba.png" alt="">
                <p>В первый день (3 Июня), у нас будет торжественный стол и различные развлечения. <br>
                    Также будут присутствовать ведущий и DJ. <br>
                    Мы останемся там и на второй день (4 Июня) , где продолжится торжество в неформальной обстановке. <br>
                    У нас будет шашлык и баня. Поэтому возьмите с собой соответствующую одежду.</p>
            </div>
        </div>
    </div>

    <div class="reach">
        <div class="reachwrapper">
            <h1>Как добраться?</h1>

            <div class="info">
                <p>С нашей стороны будет организован транспорт в день свадьбы <br>
                    Такси в городе Висагинас недорогое около 2 евро за одну поезду.<br>
                    Номера такси: +370 386 33000 и +370 690 24444
                </p>
                <p>
                    Аэропорты: Vilnius, Kaunas или Riga (Латвия) <br>
                    Расписание поездов: <a href="https://www.traukiniobilietas.lt/portal/ru"> https://www.traukiniobilietas.lt/portal/ru</a> <br>
                    Расписание автобусов: <a href="https://www.autobusubilietai.lt/index.php?lang=3&cl=start">https://www.autobusubilietai.lt/index.php?lang=3&cl=start</a>
                </p>
            </div>
            <div id="map"></div>
        </div>
    </div>

    <div class="stay">
        <div class="staywrapper">
            <ul>
                <li><img src="../../images/arrow-left.png" alt=""></li>
                <li><h1>Где остановиться </h1></li>
                <li><img src="../../images/arrow-right.png" alt=""></li>

            </ul>
            <p>Так как наш город маленький, <br>
                у нас нету большого разнообразия мест для проживания. <br>
               Если у вас возникнут какие то проблемы с резервацией дайте нам знать и мы что нибудь придумаем.
            </p>
            <div class="accomondation">
                <p><a href="http://hotel-idile.com/en"> IDILE</a></p>
                <img src="../../images/idile.png" alt="">
                <p>Цена варьируется от 25€ до 65€. <br>
                    Возможность онлайн резервации. <br>
                    Завтрак включён</p>
            </div>
            <div class="accomondation">
                <p><a href="http://vrpc.lt/apgyvendinimas/"> Visagino parkas </a></p>
                <img src="../../images/vrpc.png" alt="">
                <p>Цена варьируется от 21€ до 29€. <br>
                    Возможность резервации по емайлу. <br>
                    Завтрак не включён. <br>
                    4 км от города, легко добраться на такси.</p>
            </div>
            <div class="accomondation">
                <p><a href="http://www.gabriella.lt/viesbutis/"> Gabriela </a></p>
                <img src="../../images/gabriela.png" alt="">
                <p>Цена варьируется от 38€ до 75€. <br>
                    Возможность резервации по емайлу. <br>
                    Завтрак включён.</p>
            </div>
            <div class="accomondation">
                <p><a href="https://www.airbnb.com/rooms/15633520?guests=1 &adults=1&childr"> AIRBNB</a></p>
                <img src="./../images/Airbnb.png" alt="">
                <p> AirBnb квартира, цена примерно 45€ для <br>
                    4 -ых людей <br>
                    Возможность онлайн резервации.
                    </p>
            </div>
        </div>
    </div>

    <div class="seeya">
        <h1>До скорой встречи :)</h1>
        <img src="../../images/seeyouphoto.jpg" alt="">
    </div>


@endsection