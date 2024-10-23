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
      <tr>
        <th scope="row">1</th>
        <td>Il padrino</td>
        <td></td>
      </tr>
    </tbody>
  </table>

@endsection
