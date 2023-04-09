@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier une sauce') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sauces.edit', ['id' => $sauce->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="nameValue" type="text" class="form-control" name="name" required value="{{ $sauce->nom }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="manufacturer" class="col-md-4 col-form-label text-md-end">{{ __('Manufacturer') }}</label>

                            <div class="col-md-6">
                                <input id="manufacturerValue" type="text" class="form-control" name="manufacturer" value="{{ $sauce->manufacturer }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="descriptionValue" type="text" class="form-control" name="description" value="{{ $sauce->description }}"> </textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mainPepper" class="col-md-4 col-form-label text-md-end">{{ __('Main Pepper') }}</label>

                            <div class="col-md-6">
                                <input id="mainPepperValue" type="text" class="form-control" name="mainPepper" value="{{ $sauce->mainPepper }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="heat" class="col-md-4 col-form-label text-md-end">{{ __('Heat') }}</label>

                            <div class="col-md-6">
                                <input id="heatValue" type="range" min="0" max="10" value="5" class="form-control" name="heatValue" value="{{ $sauce->heat }}">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
