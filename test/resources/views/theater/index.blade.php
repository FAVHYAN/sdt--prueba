@extends('Layouts.admin')
@if(Session::has('message'))
<div class="alert alert-Success" role="alert">
  <strong>{{Session::get('message')}}</strong>.
</div>
@endif

@section('content')
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Location</th>
			<th>Genre</th>
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
	{!!$users->render()!!}
@stop