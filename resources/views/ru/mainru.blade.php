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

     <div class="names"> <span>Никита и Катя</span>  <br> <span class="getting"><p> Женятся</p></span></div>

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



   <div class="container2">
      <div class="content">
         <div class="row">
            <div class="image">
               <img src="../images/young-foto.png" alt="">
            </div>
            <div class="text"><h1>Как мы встретились</h1><p>Каждое прекрасное утро одинокая, и в тоже время очень привлекательная девушка с цвета океана глазами шла в направлении своей школы,
                   но на её лице чётко просвечивались яркие оттенки грусти то ли от нежелания идти в школу, то ли от отсуствия человека который мог бы целовать её по утрам. </p></div>
         </div>

         <div class="row margined">
            <div class="text "><p class="text2">Один одиннокий парень каждое утро ходил по той же дороге в противоположном направлении и не мог себе позволить чтобы у такой очаровательной девушки
                  были даже намёки на грусть. Поэтому он решил действовать и вот вы видите результат через 7.5 лет :)</p></div>
            <div class="image"><img src="../images/young-foto2.png" alt=""></div>
         </div>
      </div>
   </div>

 {{--Invintation div--}}
   @if($user['checked'] == 0)
   <div class="container3">

      <div class="textbox">
         <span class="heading">Ув {{ $user['name']}} @if($user['couple'] == 1) и {{session('couple')->cname}} @endif </span><br><br>
         <span class="content">Мы приглашаем вас на нашу  <br>
              свадьбу <br>
               3 Июня 2017</span>
         <div class="buttons">
            <form action="{{route('register')}}" method="post">
               <button type="submit" name="coming" value="coming">Приду</button>
               <button type="submit"  name="coming" value="notComing" id="rightbutton">Не приду</button>
               <input type="hidden" name="_token" value="{{ Session::token() }}"/>
            </form>

         </div>
      </div>
   </div>

   @elseif($user['checked'] == 1 && $user['coming'] == 1)
         <div class="container2-coming">
            <div class="textbox">
            <span class="content">
            Мы очень рады что сможем увидеть вас на нашем празднике <br>
               С собой иметь замечательное настроение :) <br>

               <p><span class="content">Пожалуйста, заполните наш не большой опросник</span></p>
               <a href="{{route('questru')}}">Опросник</a>
               <p>Спасибо </p>
            </span>
            </div>
         </div>

   @elseif($user['checked'] == 1 && $user['coming'] == 0)
      <div class="container2-coming">
         <div class="textbox">
            <span class="content">
            Нам очень жаль что вы -ты не сможете -ешь учавствовать на нашем празднике <br>
               Но мы будем очень рады если вы всё таки будете с нами в этот день <br>
               Если планы поменяются просто дайте нам знать :)

            </span>
         </div>
      </div>

   @endif



   <div class="finish">
      <div class="finishwrapper">
         <div  id="first"  class="col4"><img src="../../images/scrollleft.png" alt=""></div>
         <div  id="third"  class="col4"><img src="../../images/finishphoto.jpg" alt=""></div>
         <div id="fourth" class="col4"><p> “Лучший праздник это ваше участие” <br> <br>

               Кликните на  <a href="{{route('detailsEnglish')}}">детали</a>  чтобы ознакомиться со всей информацией <br> <br>

               Дайте нам знать о своём решении как можно быстрее  <br>

               Ваши Никита и Катя</p></div>
         <div  id="second"   class="col4 scroll"><img src="../../images/scrollright.png" alt=""></div>
      </div>
   </div>

@endsection

