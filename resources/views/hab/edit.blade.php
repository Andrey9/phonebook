@extends('hab.main')
@section('content')
    <div class="container">
        {!! Form::model($record,['method'=>'PATCH','url'=>'/record/'.$record->id]) !!}
        @include('hab.form')
        <div class="form-group">
            {!! Form::input('date','year',$record->year->format('Y-m-d'),['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('save',['class'=>'form-control btn btn-success']) !!}

        </div>
        {!! Form::close() !!}


    </div>















@stop