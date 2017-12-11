@extends('Layouts.admin')
@section('content')
  
  {!!Form::model($user,['route'=>['user.update', $user->id], 'method' => 'PUT'])!!} 
            @include('user.forms.usr')  
        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



@stop