@extends('hab.main')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Список номерів</div>

        <!-- Table -->
        <table class="table">
            <thead>
            <tr>
                <td>Ім'я</td>
                <td>Прізвище</td>
                <td>Ромер</td>
                <td>Дата народження</td>

            </tr>


            </thead>
            @if(!$records)
                <tr>
                <td colspan="4">Немає записів</td>
                </tr>
            @else

            @foreach($records as $record)

            <tr>
                <td>{{$record->name}}</td>
                <td>{{$record->surname}}</td>
                <td>{{$record->number}}</td>
                <td>{{$record->year->format('d.m.Y')}}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'url' => '/record/'.$record->id,'class'=>'pull-right']) !!}
                    {!! Form::button('<span class="glyphicon glyphicon-remove"></span>',['class' => 'btn btn-default','type'=>'submit']) !!}
                    {!! Form::close() !!}

                    <a href="{{url('/record/'.$record->id.'/edit')}}" class="btn btn-default pull-right">
                        <span class="glyphicon glyphicon-edit"></span></a>
                </td>
            </tr>
            @endforeach

                @endif

        </table>
    </div>
</div>
    @stop