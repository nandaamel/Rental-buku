@extends('layouts.master')
@section('title', 'Book')
@section('content')

<div class="container">
    <div class="row">
      <div class="col">
        <h1><center> Add New Books</center></h1>
        <br>
        <form action="" method="get">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Title Book</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Add Title Book" value="">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Writer</label>
            <input type="text" class="form-control" id="writer" name="writer" placeholder="Add Writer" value="">
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Add publisher" value="">
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Synopsis</label>
            <input type="text" class="form-control" id="synopsis" name="synopsis" placeholder="Add Synopsis"value="">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Cover Book</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Add Cover Book" value="">
        </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
      </div>

  @endsection