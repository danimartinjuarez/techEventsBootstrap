@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div>
    <a href="{{ route('createEvent') }}">
        <p>Create a new event</p>
    </a>
</div>
<div class="row row-cols-1 row-cols-md-4 g-2">

    @foreach ($events as $event)
    <div class="col">
        <div class="card" style="width: 18rem;">
            <a href="{{ route('showEvent', $event->id) }}">ver
                <img src="{{ $event->img }}" class=" card-img-top" alt="...">
                <div class="card-body">

                    <h1 class="card-title">{{ $event->name }}</h1>
                    <p class=" card-text">{{ $event->description }}</p>
                    <p class="card-text">{{ $event->places }}</p>
                </div>
                </a>
            <form action="{{ route('delete', ['id'=>$event->id]) }}" method="post">
                @method ('delete')
                @csrf
                <button type="submit" name="delete" class="btn btn-primary"
                    onclick="return confirm('Estas seguro que quieres borrar? {{$event->name}}  {{$event->id}}')">
                    <img
                        src="htps://www.ordenencasa.shop/wp-content/uploads/2020/05/papelera-redonda-en-madera-de-bambu.jpg" />
                </button>
                <a href="{{ route('editEvent',['id' => $event->id]) }}">✏️</a>
            </form>
        </div>

    </div>
    @endforeach
</div>
@endsection
