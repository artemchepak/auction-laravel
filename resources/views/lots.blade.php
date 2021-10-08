@extends('layouts.app')

@section('content')
    <h1>All lots</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Condition</th>
            <th scope="col">Current Price</th>
            <th scope="col">Buy It Now Price</th>
            <th scope="col">Auction end date</th>
        </tr>
        </thead>
        <tbody>
            @foreach($lots as $lot)
                <tr>
                    <td class="align-middle">
                        <img style="max-height: 120px; width: 120px"  src="{{asset("storage/$lot->image")}}" class="mb-3">
                        <br><a href="{{route('lots.show', $lot->id)}}">View details</a>
                    </td>
                    <td class="align-middle">{{$lot->title}}</td>
                    <td class="align-middle">{{$lot->description}}</td>
                    <td class="align-middle">{{$lot->condition}}</td>
                    <td class="align-middle text-center">{{$lot->price}}</td>
                    <td class="align-middle text-center">{{$lot->buy_now_price}}</td>
                    <td class="align-middle text-center">{{$lot->auction_end_date}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
