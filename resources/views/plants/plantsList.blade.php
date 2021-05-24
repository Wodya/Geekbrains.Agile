@extends('layouts.main')
@section('content')
    <h2>Каталог комнатных растений</h2>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @forelse ($plantsList as $plant)
            <div class="col">
                <div class="card">
                    <img src="{{$plant->photoSmallPath}}" class="card-img-top" alt="{{$plant->name}}" width=100%
                         height="180">
                    <div class="card-body">
                        <h5 class="card-title">{{$plant->name}}</h5>
                        <p class="card-text">{{$plant->shortInfo}}</p>
                        <a href="/plants/show" class="btn btn-primary">Подробнее</a>
                        <p class="card-text">{{$plant->tags}}</p>
                    </div>
                </div>
            </div>
        @empty
            <h2>Что-то сломалось =(</h2>
        @endforelse

    </div>
@endsection
