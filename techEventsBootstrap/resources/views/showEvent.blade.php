@extends('layouts.app')
@section('content')
<div class="card" style="width: 18rem;">
  <img src="{{ $event->img }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $event->name }}</h5>
    <p class="card-text">{{ $event->description }}</p>
    <p class="card-text">{{ $event->places }} places</p>

    <a href="{{ route('home') }}" class="btn btn-primary float-right">Volver</a>
  </div>
</div>

@endsection
