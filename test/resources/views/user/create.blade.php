@extends('Layouts.admin')
@section('content')
     

<form action="">
    <div class="form-group">
        <label for="">Name: </label>
        <input type="text" name="form-control">
    </div>
    <div class="form-group">
        <label for="">Email: </label>
        <input type="text" name="form-control">
    </div>
    <div class="form-group">
        <label for="">Password: </label>
        <input type="password" name="form-control">
    </div>
    <button class="btn btn-primary">Register</button>
</form>
    <div class="clearfix"></div>

@stop