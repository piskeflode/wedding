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
                <h1>Thank you for the filling  survey
                </h1>
                <a href="{{route('mainEnglish')}}" type="button"> Come back to to website</a>
            </div>
        </div>


    @else
    <div class="form">
        <div class="formwrapper">
            <form action="{{route('registerQuest')}}" method="post" class="white-pink " >

                <h1>Please fill out the survey <span> Fields marked with * sign is required</span></h1>

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
                            <span><p>Is {{$couple['cname']}} coming to our wedding with you ? *</p></span>
                        </label>
                        <input type="radio" name="coming" value="coming"> Coming
                        <input type="radio" name="coming" value="notcoming"> Not  coming

                        <hr>
                    </div>
                @endif



                <div class="forminside">
                    <label>
                        <span><p>Are you staying for the 2nd day at vila? *</p></span>
                    </label>
                    <input type="radio" name="staying" value="staying"> Staying
                    <input type="radio" name="staying" value="notstaying"> Not Staying

                    <hr>
                </div>

                <div class="forminside">
                    <label>
                        <span><p>What kind of alcohol do you prefer to drink?</p></span>
                    </label>
                    <input type="checkbox" name="alc[]" value="Beer">Beer<br>
                    <input type="checkbox" name="alc[]" value="Vodka">Vodka<br>
                    <input type="checkbox" name="alc[]" value="Wine">Wine<br>
                    <input type="checkbox" name="alc[]" value="Cognac">Cognac<br>
                    <hr>
                </div>

                <div class="forminside">
                    <label>
                        <span><p>When do you plan to arrive approximately ? *</p></span>
                    </label>
                    <input type="text" name="arrive" id="datepicker">

                    <hr>
                </div>

                <div class="forminside">
                    <label>
                        <span><p>Do you have any allergies or other food preferences (for example, lactose intolerance or vegatarian)?</p></span>
                    </label>
                    <textarea rows="4" cols="50" name="alergi" placeholder="Write here your preferences"></textarea>

                    <hr>
                </div>

                <div class="forminside">
                    <label>
                        <span><p>As we have 4 common buildings at villa, is it ok for you to share room with someone else? It will be approx 4 to 6 people in one big room with
                common bathroom and toilet. If you say no, then we will try to organize transportation in order to get you to a hotel or find another solution. * </p></span>
                    </label>

                    <input type="radio" name="building" value="yes"> Yes
                    <input type="radio" name="building" value="no"> No


                    <hr>
                </div>


                <div class="forminside">
                    <label>
                        <span><p>Any comments and questions can be added in this field.</p></span>
                    </label>

                    <textarea name="message" rows="4" cols="50" placeholder="Write here your comments"></textarea>


                    <hr>
                </div>



                <input type="hidden" name="_token" value="{{ Session::token() }}"/>

                <button type="submit" class="button">Submit</button>
            </form>

            <a href="{{route('mainEnglish')}}" type="button"> Come back to website</a>
        </div>
    </div>
    @endif
@endsection



