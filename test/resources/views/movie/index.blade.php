@extends('Layouts.admin')
@include('alerts.success');
@section('content')
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Cast</th>
			<th>Languaje</th>
			<th>Genrer</th>
			<th>Duration</th>
			<th>Launch Date</th>
			<th>Edit</th>
		</thead>
		@foreach($movies as $movie)
		<tbody>
			<td>{{$movie ->name}}</td>
			<td>{{$movie ->cast}}</td>
			<td>{{$movie ->direction}}</td>
			<td>{{$movie ->genre}}</td>
			<td>{{$movie ->duration}}</td>
			<td>{{$movie ->created_at}}</td>
			<!-- <td>{{$movie ->updated_at}}</td> -->
			<td>{!!link_to_route('movie.edit', $title = 'Edit', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>			
		</tbody>
		@endforeach
	</table>
	{!!$movies->render()!!}
@stop