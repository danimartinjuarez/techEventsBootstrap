@extends('layouts.app')
@section('content')
<form action="{{ route('storeEvent') }}" method="post" class="justify-content-center">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="nombre de evento">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    <div class="mb-3">
        <label for="places" class="form-label">Nombre</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="places">
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Link de la imagen</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="img">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="cancel" class="btn btn-primary">cancel</button>

</form>
@endsection

