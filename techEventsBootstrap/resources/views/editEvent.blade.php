@extends('layouts.app')
@section('content')
<form class="justify-content-center" method="post" action="{{ route('updateEvent', $event->id) }}">
    @method('PATCH')
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text"" class="form-control" id="exampleInputEmail1" aria-describedby="name" name="name" value="{{$event->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">descripcion</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description"value="{{$event->description}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">plazas</label>
    <input type="number"" class="form-control" id="exampleInputEmail2" aria-describedby="places" name="places" value="{{$event->places}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">imagen</label>
    <input type="text" class="form-control" id="exampleInputPassword2" name="img" value="{{$event->img}}">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="{{ route('home') }}" class="btn btn-primary float-right" >🔙</a>
</form>

@endsection
