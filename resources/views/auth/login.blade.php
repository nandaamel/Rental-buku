@extends('layouts.main')
@section('konten')
        <div class="row justify-content-center">
            <div class="col-lg-5">
                {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container">
                    <main class="form-register">
                        <form action="{{route('login-auth')}}" method="POST">
                           @csrf
                            <h1 class="text-center">LOGIN HERE</h1>

                            <div class="form-floating">
                                <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                                <label for="name">Name</label>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                </div>
            </div>
        </div>
@endsection
