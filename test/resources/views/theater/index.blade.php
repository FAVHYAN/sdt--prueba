@extends('Layouts.admin')
@include('alerts.success');
@section('content')
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Location</th>
			<th>Genre</th>
			<th>Edit</th>
		</thead>
		@foreach($theaters as $theater)
		<tbody>
			<td>{{$theater->name}}</td>
			<td>{{$theater->location}}</td>
			<td>{{$theater->genre}}</td>
			<td>{!!link_to_route('theater.edit', $title = 'Edit', $parameters = $theater->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>			
		</tbody>
		@endforeach
	</table>
	{!!$theaters->render()!!}
@stop