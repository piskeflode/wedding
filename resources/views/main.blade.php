@extends('layouts.master')

@section('content')

    <img src="/images/main.png" class="bg">


        <div class="main-inside">
            <a href="{{route('mainEnglish')}}" class="main-btn">English</a>
            <a href="{{route('mainRussian')}}" class="main-btn">Russian</a>
        </div>

@endsection