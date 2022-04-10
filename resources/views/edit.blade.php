@extends('layouts.app')
@section('content')
<h3>Update Employee</h3>
<form class="col-sm-6" action="" method="post">
    @method('PUT')
    @csrf
    <label for="">Name</label>
    <input type="hidden"  value="{{$employees['id']}}" name="id">
    <input type="text" name="name" value="{{$employees['name']}}" placeholder="Enter name" class="form-control" required>
    <label for="">Email</label>
    <input type="text" name="email" value="{{$employees['email']}}" placeholder="Enter email" class="form-control" required>
    <label for="">Address</label>
    <input type="text" name="address" value="{{$employees['address']}}" placeholder="Enter address" class="form-control"><br>
    <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection