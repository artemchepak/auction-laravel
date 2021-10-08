@extends('layouts.app')

@section('content')
    <h1>My bids</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Lot title</th>
                <th scope="col">Description</th>
                <th scope="col">Condition</th>
                <th scope="col">Your bid</th>
                <th scope="col">Auction end date</th>
                <th scope="col">Actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($userBids as $bid)
                @php
                    $lot = $bid->lots;
                @endphp
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$lot->title}}</td>
                    <td>{{$lot->description}}</td>
                    <td>{{$lot->condition}}</td>
                    <td>{{$bid->bid_price}}</td>
                    <td>{{$lot->auction_end_date}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('lots.show', $lot->id)}}">View</a>
                        <form action="{{route('deleteBid', $bid->id)}}" method="post" style="display: inline">
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection
