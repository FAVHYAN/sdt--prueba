@extends('Layouts.admin')

<?php $message = Session::get('message') ?>

@if($message == 'store')
<div class="alert alert-Success" role="alert">
  <strong>User success create </strong>.
</div>
@endif

@section('content')
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Operation</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user ->name}}</td>
			<td>{{$user ->email}}</td>
			<td></td>			
		</tbody>
		@endforeach
	</table>
@stop