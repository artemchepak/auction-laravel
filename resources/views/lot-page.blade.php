@extends('layouts.app')

@section('content')

    @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif

    <div class="d-flex flex-row justify-content-around">
        <div class="w-50 mr-5">
            <img class="mw-100" src="{{asset("storage/$lot->image")}}">
        </div>
        <div class="px-5 text-end">
            <h2 class="mb-3">{{$lot->title}}</h2>
            <h5 class="text-secondary">Description:</h5>
            <p>{{$lot->description}}</p>
            <h5 class="text-secondary">Condition:</h5>
            <p>{{$lot->condition}}</p>
            <h5 class="text-danger">Auction end date:</h5>
            <p>{{$lot->auction_end_date}}</p>
            <h5 class="text-secondary">Lot price:</h5>
            <p class="text-primary">{{$lot->price}}</p>

            @if(isset($lot->buy_now_price) && Auth::id() != $lot->seller_id)
                <p class="text-success">Buy now for {{$lot->buy_now_price}}</p>
            @endif
            <p>{{$bids->count()}} bids (0 yours)</p>
            @if(Auth::id() != $lot->seller_id)
                <form action="{{route('makeBid', $lot->id)}}" method="POST"
                      class="row align-items-center bg-success p-3">
                    @csrf
                    <div class="input-group">
                        <input type="hidden" name="lot_id" value="{{$lot->id}}">
                        <input type="number" class="form-control" name="bid_price" id="bid_price"
                               placeholder="Make your bid">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
    <p>
        Bed history:
    <ul class="list-group">
        @foreach($bids as $bid)
            <li class="list-group-item">{{Auth::user()->name}} make bid {{$bid->bid_price}} ({{$bid->created_at}})</li>
        @endforeach
    </ul>

    </p>
@endsection
