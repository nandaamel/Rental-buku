@extends('layouts.master')
@section  ('title', 'book')
@section('content')
<br><h1><strong>Data Books</strong></h1><br>
<a href="/book/form"><button class="btn btn-success">Create +</button></a> 
<br>
<table class="table dark">
  <thead>
      <tr style="text-align: center" class="table-striped">
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Writer</th>
          <th scope="col">Publisher</th>
          <th scope="col">Synopsis</th>
          <th scope="col">cover Book</th>
          <th scope="col">Action</th>
      </tr>
  </thead>
 <?php $i =1; ?>
  @foreach ($book as $item)
      <tbody>
          <tr style="text-align: center">
              <td>{{$i++}}</td>
              <td>{{ $item->title }} </td>
              <td>{{ $item->writer }} </td>
              <td>{{ $item->publisher }} </td>
              <td>{{ $item->synopsis }} </td>

                @if($item->image)
                <td class="image-table"><img src="/images/{{ $item['image'] }}"  style="width: 90px;"></td>
                @else
                <td>-</td>
                @endif
              
              <td>
                  <button type="submit" class="btn btn-primary text-white me-2">Edit</button>
                  <form action="/delete/{{ $item['id'] }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini ?')">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger text-white me-2">Delete</button>
                  </form>
              </td>
          </tr>
      </tbody>
  @endforeach
</table>
@endsection