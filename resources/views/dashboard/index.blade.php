@extends('layouts.master')

@section('title', 'Dashboard')
@section('content')
<center><h3>Selamat Datang Dihalaman Admin</h3></center>
<div class="row my-5">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                <i class="bi bi-book"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Books
                    </div>
                    <div class="card-count">
                        18
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-lg-6">
                <i class="bi bi-journal-bookmark-fill"></i> 
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Category
                    </div>
                    <div class="card-count">
                        02
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-lg-6">
                <i class="bi bi-person-fill"></i> 
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        User
                    </div>
                    <div class="card-count">
                        06
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection