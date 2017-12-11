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
			<th>Launch Date</th>
			<th>Languaje</th>
		</thead>
		@foreach($movie as $movie)
		<tbody>
			<td>{{$movie ->name}}</td>
			<td>{{$movie ->cast}}</td>
			<td>{{$movie ->direction}}</td>
			<td>{{$movie ->genre}}</td>
			<td>{{$movie ->duration}}</td>
			<td>{{$movie ->created_at}}</td>
			<td>{{$movie ->updated_at}}</td>
			<td>{!!link_to_route('movie.edit', $title = 'Edit', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>			
		</tbody>
		@endforeach
	</table>
@stop