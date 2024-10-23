@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel model controller
</h1>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col"></th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr>
            <th scope="row">{{ $movies->id }}</th>
            <td>{{ $movies->title }}</td>
            <td></td>
          </tr>
        @endforeach
      
    </tbody>
  </table>

@endsection
