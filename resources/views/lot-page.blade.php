@extends('layouts.app')

@section('content')

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
            <p class="text-success">Buy now for {{$lot->buy_now_price}}</p>
            <p>0 bids (0 yours)</p>
            <form class="row align-items-center bg-success p-3">

                    <div class="input-group">
                        <input type="number" class="form-control" name="bid" id="bid" placeholder="Make your bid">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>

            </form>
        </div>
    </div>
    <p>
        Bed history:

    </p>
@endsection
