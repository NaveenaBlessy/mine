<!--<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
  
            <div class="content">
            <h1>Contact Page</h1>
            <h2>{{$name}} {{$office}}</h2>
            </div>
        </div>
    </body>
</html>-->
@extends('layouts.app')

@section('content')
 <h1>Post Page {{$name}} {{$office}}</h1>
@stop

@section('footer')