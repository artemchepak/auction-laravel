@extends('layouts.app')

@section('content')
<h2>Last added lots</h2>

<div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($lastLots as $lot)
            <a href="{{route('lots.show', $lot->id)}}" class="carousel-item @if ($loop->first) active @endif" style="background-image: url({{asset("storage/$lot->image")}}); background-position: center; background-size: cover; height: 450px;">
                <div class="card bg-dark text-white">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{$lot->title}}</h5>
                        <p class="card-text">Description: {{$lot->description}}</p>
                        <p class="card-text">Condition: {{$lot->description}}</p>
                        <p class="card-text">Starting price: {{$lot->price}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


@endsection

