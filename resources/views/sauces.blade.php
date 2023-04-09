@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row row-cols-8">
                @foreach ($sauces as $sauce)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ URL('/img' . '/' . $sauce->imageUrl) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $sauce->name }}</h5>
                            <p class="card-text"> {{ $sauce->description }} </p>
                        </div>
                        <a href="{{ route('sauces.show', ['id' => $sauce->id]) }}" class="btn btn-primary">Voir</a>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('sauces.insert') }}" class="btn btn-primary">Ajouter</a>
        </div>
    </div>
    </div>
@endsection

