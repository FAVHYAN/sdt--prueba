@extends('Layouts.admin')
@section('content')
  
        {!!Form::open(['route'=>'theater.store', 'method' => 'POST'])!!} 
            @include('theater.forms.thr')
        {!!Form::submit('Registrer',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



@stop