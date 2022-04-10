@extends('layouts.app')
@section('content')
<h3>Create Employee</h3>
<form class="col-sm-6" action="" method="POST">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Enter name" class="form-control" required>
    <label for="">Email</label>
    <input type="text" name="email" placeholder="Enter email" class="form-control" required>
    <label for="">Address</label>
    <input type="text" name="address" placeholder="Enter address" class="form-control"><br>
    <button class="btn btn-primary" type="submit">Create</button>
</form>
@endsection