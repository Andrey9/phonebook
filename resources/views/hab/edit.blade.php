@extends('hab.main')
@section('content')
    <div class="container">
        {!! Form::model($record,['method'=>'PATCH','url'=>'/record/'.$record->id]) !!}
        @include('hab.form')

        {!! Form::close() !!}


    </div>















@stop