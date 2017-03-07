@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('/css/form.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({ maxDate: "+3M +1D" });
        } );
    </script>
@endsection

@section('content')
    @php
        if (Auth::user()['couple']==1){
        $couple = (array)session('couple');
  }
    @endphp

    @if(Auth::user()['quested'] == 1)
        <div class="form">
            <div class="formwrapper">
                <h1>Спасибо что заполнили опросник
                </h1>
                <a href="{{route('mainRussian')}}" type="button">Вернуться на сайт</a>
            </div>
        </div>

        @else
    <div class="form">
        <div class="formwrapper">
            <form action="{{route('registerQuest')}}" method="post" class="white-pink " >

                <h1>Пожалуйста, заполните опросник<span> Поля помеченные знаком *, должны быть заполнены</span></h1>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Auth::user()['couple'] == 1)
                <div class="forminside">
                    <label>
                    <span><p> Будет ли {{$couple['cnameru']}} вместе с вами на празднике? *</p></span>
                </label>
                <input type="radio" name="coming" value="coming">  Будет
                <input type="radio" name="coming" value="notcoming"> Не будет

                    <hr>
                </div>
                @endif

                <div class="forminside">
                    <label>
                        <span><p>Останетесь ли вы на второй день с нами на усадьбе? *</p></span>
                    </label>
                    <input type="radio" name="staying" value="staying"> Останусь
                    <input type="radio" name="staying" value="notstaying"> Не останусь

                    <hr>
                </div>

                <div class="forminside">
                    <label>
                        <span><p>Какой алкоголь вы бы предпочли пить на празднике?</p></span>
                    </label>
                    <input type="checkbox" name="alc" value="Beer" > Пиво<br>
                    <input type="checkbox" name="alc" value="Vodka"> Водка<br>
                    <input type="checkbox" name="alc" value="Wine"> Вино<br>
                    <input type="checkbox" name="alc" value="Cognac"> Коньяк<br>
                    <hr>
                </div>

                <div class="forminside">
                    <label>
                        <span><p>Когда примерно вы планируете прилететь/приехать к нам ? *</p></span>
                    </label>
                    <input type="text" name="arrive" id="datepicker">

                    <hr>
                </div>

                <div class="forminside">
                    <label>
                        <span><p>Есть ли у вас какие либо предпочтения/ограничения в еде (например непереносимость лактозы, вегетарианская пища и т.д )?</p></span>
                    </label>
                    <textarea rows="4" cols="50" name="alergi" placeholder="Напишите здесь предпочтения/ограничения"></textarea>

                    <hr>
                </div>

                <div class="forminside">
                    <label>
                        <span><p>Так как на усадьбе будет 4 здания с общими комнатами, согласны ли вы делить помещение с другими людьми?  Там будут комнаты примерно по 4-6 человек с общим туалетом и ванной.
                                Если вы ответите нет, мы попробуем организовать вам транспорт обратно в город или что-нибудь придумаем. *</p></span>
                    </label>

                    <input type="radio" name="building" value="yes"> Да
                    <input type="radio" name="building" value="no"> Нет


                    <hr>
                </div>


                <div class="forminside">
                    <label>
                        <span><p>Здесь вы можете написать любые пожелания или коментарии, которые не были затронуты выше</p></span>
                    </label>

                    <textarea name="message" rows="4" cols="50" placeholder="Write here your comments"></textarea>


                    <hr>
                </div>



                <input type="hidden" name="_token" value="{{ Session::token() }}"/>

                <button type="submit" class="button">Отправить</button>
            </form>

            <a href="{{route('mainRussian')}}" type="button"> Вернуться на главную страницу</a>
        </div>
    </div>
    @endif
@endsection



