@extends('Layouts.admin')
@section('content')
	@include('alerts.request')
        {!!Form::open(['route'=>'user.store', 'method' => 'POST'])!!} 
            @include('user.forms.usr')
        {!!Form::submit('Registrer',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



@stop