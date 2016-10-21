<div class="form-group">
    {!! Form::text('name',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::text('surname',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::text('number',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::input('date','year',$record->year->format('Y-m-d'),['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::submit('save',['class'=>'form-control btn btn-success']) !!}

</div>
@if ($errors->any())
    @foreach($errors as $error)
{{$error}}
        @endforeach
    @endif