@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL('/img' . '/' . $sauce->imageUrl) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $sauce->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Heat : {{ $sauce->heat }} / 10</h6>
                        <p class="card-text"> {{ $sauce->description }} </p>
                        <button type="button" class="btn btn-primary">Modifier</button>
                        <form action="{{ route('sauces.destroy', $sauce->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
