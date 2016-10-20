@extends('hab.main')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Список номерів</div>

        <!-- Table -->
        <table class="table">
            <th>
                <td>Ім'я</td>
                <td>Прізвище</td>
                <td>Ромер</td>
                <td>Дата народження</td>
                <td>
                    Керування
                </td>
            </th>
            @if(!$records)
                <td colspan="5">Немає записів</td>
            @else

            @foreach($records as $record)

            <tr>
                <td>{{$record->name}}</td>
                <td>{{$record->surname}}</td>
                <td>{{$record->number}}</td>
                <td>{{$record->year}}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'url' => '/record/'.$record->id]) !!}
                    {!! Form::button('<span class="glyphicon glyphicon-remove"></span>',['class' => 'button','type'=>'submit']) !!}
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