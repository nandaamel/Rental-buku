@extends('layouts.master')

@section('title', 'user')
@section('content')
<center><h2>Selamat Datang Dihalaman User</h2></center>

<table class="table">
    <thead>
        <tr class="table-warning">
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach($data as $dt)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$dt->name}}</td>
            <td>{{$dt->email}}</td>
            <td>{{$dt->phone}}</td>
            <td>{{$dt->address}}</td>
            <td>
            <form action="{{route('indexEditUser', $dt->id)}}" class="d-inline">
                <button type="submit" class="bi bi-pencil-square btn btn-warning"> edit</button>
                </form>
                <form action="{{route('users.destroy',$dt->id)}}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="bi bi-trash btn btn-danger"> delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection