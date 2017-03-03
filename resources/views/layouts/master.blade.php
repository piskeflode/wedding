<!DOCTYPE html>
<html>
<head>
    <title>Nikita and Katia Weddings </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">


        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/fonts.css') }}">
        {{--<link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/fonts.css">--}}
        <link rel='shortcut icon' type='image/x-icon' href="{{ URL::asset('/img/favicon.ico') }}" />
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        @yield('styles')

</head>
<body>

@yield('content')

</body>

<script src="{{ URL::asset('/js/TimeCount.js') }}"></script>
<script src="https:/maps.googleapis.com/maps/api/js?key=AIzaSyBPr5BfZcRMmrD1Mic_STg4htF0_yFueMo&callback=myMap"></script>


</html>