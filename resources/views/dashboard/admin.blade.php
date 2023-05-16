@extends('layouts.main')

@section('content')
@section('tittle', 'Create-Book')

<style>
/* Style inputs */
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Style the submit button */
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Add a background color to the submit button on mouse-over */
input[type=submit]:hover {
  background-color: #45a049;
}
</style>

<div class="container">
  <form action="{{ route('createbook') }}" method="post">
    @csrf
    <label for="fname"> Name</label>
    <input type="text"  name="tittle" autofocus required>
  
    <label for="name">Author</label>
    <input type="text"  name="author" required>

    <label for="name">Publisher</label>
    <input type="text" name="publisher" required>
    <label for="name">Release Date</label>
    <input type="text"  name="release_date" required>
    <label for="name">Choose File for cover book:</label> <br>
    <input type="file"  name="cover" required>
    <input type="submit" value="Submit">
  </form>
</div>

@endsection