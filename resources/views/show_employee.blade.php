@extends('layouts.app')
@section('content')

<a href="/create"><button class="btn btn-success">Create Employee</button></a><br>
<h3>Employee List</h3>
@if (Session::get('status'))
<div class="alert alert-success" role="alert">
  {{Session::get('status')}}
</div>
@endif
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
    @php $i = 1 @endphp
        @foreach ($employees as $employee)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ucfirst($employee['name'])}}</td>
                <td>{{$employee['email']}}</td>
                <td>{{ucfirst($employee['address'])}}</td>
                <td>
                  <a href="/edit/{{$employee['id']}}"><button class="btn btn-sm btn-primary">Edit</button></a>
                  <a href="/delete/{{$employee['id']}}"><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection