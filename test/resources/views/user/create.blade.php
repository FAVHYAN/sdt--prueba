@extends('Layouts.admin')
@section('content')
  
        {!!Form::open(['route'=>'user.store', 'method' => 'POST'])!!} 
            @include('user.forms.usr')
        {!!Form::submit('Registrer',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



@stop