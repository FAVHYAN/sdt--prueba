@extends('Layouts.admin')
@section('content')
  
  {!!Form::model($user,['route'=>['user.update', $user->id], 'method' => 'PUT'])!!} 
            @include('user.forms.usr')  
        {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}

  {!!Form::close()!!}  



{!!Form::open(['route'=>['user.destroy', $user->id], 'method' => 'DELETE'])!!}  
        {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
  {!!Form::close()!!}  

@stop