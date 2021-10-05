@extends('layouts.app')

@section('content')
    <h1>{{$product->title}}</h1>

    <div class="d-flex flex-row">
        <div class="w-50">
            <img class="mw-100" src="{{asset("storage/$product->image")}}">
        </div>
        <div class="w-50 px-5 text-end">
            <h2 class="mb-3">{{$product->title}}</h2>
            <h5 class="text-secondary">Description:</h5>
            <p>{{$product->description}}</p>
            <h5 class="text-secondary">Condition:</h5>
            <p>{{$product->condition}}</p>
            <h5 class="text-danger">Auction end date:</h5>
            <p>{{$product->auction_end_date}}</p>
        </div>
    </div>
@endsection
