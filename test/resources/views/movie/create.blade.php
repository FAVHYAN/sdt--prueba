@extends('Layouts.admin')
@section('content')
	@include('alerts.request')  
        {!!Form::open(['route'=>'movie.store', 'method' => 'POST'])!!} 
            @include('movie.forms.mov')
        {!!Form::submit('Registrer',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



@stop