@extends('hab.main')
@section('content')
    <div class="container">
        {!! Form::open(['url'=>'/record']) !!}
       @include('hab.form')

        {!! Form::close() !!}


    </div>















    @stop