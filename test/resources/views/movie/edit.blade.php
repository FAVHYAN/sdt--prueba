@extends('Layouts.admin')
@section('content')
  
  {!!Form::model($movie,['route'=>['movie.update', $movie->id], 'method' => 'PUT'])!!} 
            @include('movie.forms.mov')  
        {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



{!!Form::open(['route'=>['movie.destroy', $movie->id], 'method' => 'DELETE'])!!}  
        {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
  {!!Form::close()!!}  

@stop