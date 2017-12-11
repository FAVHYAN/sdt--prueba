@extends('Layouts.admin')
@section('content')  
	@include('alerts.request')
  {!!Form::model($theater,['route'=>['theater.update', $theater->id], 'method' => 'PUT'])!!} 
            @include('theater.forms.thr')  
        {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



{!!Form::open(['route'=>['theater.destroy', $theater->id], 'method' => 'DELETE'])!!}  
        {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
  {!!Form::close()!!}  

@stop