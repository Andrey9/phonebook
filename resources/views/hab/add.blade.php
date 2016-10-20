@extends('hab.main')
@section('content')
    <div class="container">
    <form action="{{url ('/main')}}" class="col-lg-4 col-lg-offset-4">

        <div class="form-group">
            <input type="text" class="form-control" placeholder="name">

        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="surname">

        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="nomer">

        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="year">

        </div>

        <div class="form-group">
            <input type="submit" class="form-control btn btn-success" value="add">

        </div>
    </form>
    </div>















    @stop