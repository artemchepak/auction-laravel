@extends('layouts.app')

@section('content')
    <h1>Products page</h1>

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
            @foreach($products as $product)
                <tr>
                    <td style="height: 120px" class="align-middle">
                        <img src="{{asset("storage/$product->image")}}" class="h-100 mb-3">
                        <br><a href="#">View details</a>
                    </td>
                    <td class="align-middle">{{$product->title}}</td>
                    <td class="align-middle">{{$product->description}}</td>
                    <td class="align-middle">{{$product->condition}}</td>
                    <td class="align-middle text-center">{{$product->price}}</td>
                    <td class="align-middle text-center">{{$product->buy_now_price}}</td>
                    <td class="align-middle text-center">{{$product->auction_end_date}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
