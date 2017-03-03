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



   <div class="container2">
      <div class="content">
         <div class="row">
            <div class="image">
               <img src="../images/young-foto.png" alt="">
            </div>
            <div class="text"><h1>How we met</h1><p>Every lovely morning, lonely, yet beautiful blue eyed young lady has been heading toward her school. All looks great and sweet, but her face reflected all the shades of sadness.
                  Was it due to lack of interest in school or perhaps due to absence of that special someone that would enlighten her mornings with a kiss ... is a mystery.       </p></div>
         </div>

         <div class="row margined">
            <div class="text "><p>Every morning, one young man has been taking the same path but in oppositive direction. It took him a little time to study her gestures and features to realize that he cannot let the
                  sadness to take over her. This is when he took an action, results of which you see seven and a half years latter</p></div>
            <div class="image"><img src="../images/young-foto2.png" alt=""></div>
         </div>
      </div>
   </div>

 {{--Invintation div--}}
   @if($user['checked'] == 0)
   <div class="container3">

      <div class="textbox">
         <span class="heading">Dear {{ $user['name']}} @if($user['couple'] == 1) and {{session('couple')->cname}} @endif,</span><br><br>
         <span class="content">We would like to invite you <br>
              to our special day on <br>
               3 June 2017</span>
         <div class="buttons">
            <form action="{{route('register')}}" method="post">
               <button type="submit" name="coming" value="coming">Coming</button>
               <button type="submit"  name="coming" value="notComing" id="rightbutton">Not coming</button>
               <input type="hidden" name="_token" value="{{ Session::token() }}"/>
            </form>

         </div>
      </div>
   </div>

   @elseif($user['checked'] == 1 && $user['coming'] == 1)
         <div class="container2-coming">
            <div class="textbox">
            <span class="content">
            We are happy to see you at our weddings! <br>
               Bring with you awesome dance moves :) <br>

               <p><span class="content">Please,fill in the short survey</span></p>
               <a href="{{route('questen')}}">Survey</a>
               <p>Thank you </p>
            </span>
            </div>
         </div>

   @elseif($user['checked'] == 1 && $user['coming'] == 0)
      <div class="container2-coming">
         <div class="textbox">
            <span class="content">
            We are sorry to hear that you can not join us <br>
               But you are welcome anyway if you change <br>
               your mind just let us know

            </span>
         </div>
      </div>

   @endif

   <div class="finish">
      <div class="finishwrapper">
         <div  id="first"  class="col4"><img src="../../images/scrollleft.png" alt=""></div>
         <div  id="third"  class="col4"><img src="../../images/finishphoto.jpg" alt=""></div>
         <div id="fourth" class="col4"><p>“ The Best Gift Is Your Participation” <br> <br>

            Click on <a href="{{route('detailsEnglish')}}">details</a>  for more information <br> <br>

            Let’s us know as soon as possible <br>
            if you can join our wedding <br>

            Your Nikita & Katia</p></div>
         <div  id="second"   class="col4 scroll"><img src="../../images/scrollright.png" alt=""></div>
      </div>
   </div>

@endsection

