@extends('Layouts.admin')
@include('alerts.success');
@section('content')
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Operation</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{!!link_to_route('user.edit', $title = 'Edit', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>			
		</tbody>
		@endforeach
	</table>
	{!!$users->render()!!}
@stop