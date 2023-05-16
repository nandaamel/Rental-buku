@extends('layouts.master')

@section('title', 'edit')
@section('content')
<form action="{{route('users.update', $data->id)}}" method="post">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" value="{{$data->name}}" name="name" class="form-control" id="name" placeholder="Enter Your Name">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email </label>
    <input type="email" value="{{$data->email}}" name="email" class="form-control" id="email" placeholder="Enter Your Email">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Phone</label>
    <input type="number" value="{{$data->no_hp}}" name="no_hp" class="form-control" id="phone" placeholder="Enter Your Phone">
</div>
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" value="{{$data->address}}" name="address" class="form-control" id="address" placeholder="Enter Your Phone">
</div>
<button type="submit" class="btn btn-primary">save</button>
</form>
@endsection