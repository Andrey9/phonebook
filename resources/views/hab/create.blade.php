@extends('hab.main')
@section('content')
    <div class="container">
        {!! Form::open(['url'=>'/record']) !!}
       @include('hab.form')
        <div class="form-group">
            {!! Form::input('date','year',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('save',['class'=>'form-control btn btn-success']) !!}

        </div>
        {!! Form::close() !!}


    </div>















    @stop