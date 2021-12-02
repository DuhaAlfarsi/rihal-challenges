@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="card-deck ">
  <div class="card text-white bg-primary mb-3">
    <div class="card-body">
      <h5 class="card-title">students per class</h5>
      <p class="card-text">{{$student}}</p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3">
    <div class="card-body">
      <h5 class="card-title">students per country</h5>
      <p class="card-text">{{$country}}</p>
    </div>
  </div>
  <div class="card text-white bg-warning mb-3">
    <div class="card-body">
      <h5 class="card-title">average age</h5>
      <p class="card-text"></p>
    </div>
</div>
    </div>
@endsection
