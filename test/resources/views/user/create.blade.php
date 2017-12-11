@extends('Layouts.admin')
@section('content')
  
  {!!Form::open(['route'=>'user.store', 'method' => 'POST'])!!} 
    <div class="form-group">
        {!!Form::label('Name:')!!}
        {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Add user'])!!}
    </div> 
    <div class="form-group">
        {!!Form::label('Email:')!!}
        {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Add email'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('PassWord:')!!}
        {!!Form::password('password',['class'=>'form-control'])!!}
    </div>

        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



@stop