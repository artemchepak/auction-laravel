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
        </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td style="height: 100px"><img src="{{asset("storage/$product->image")}}" class="mh-100"></td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->condition}}</td>
                    <td class="text-end">{{$product->price}}</td>
                    <td class="text-end">{{$product->buy_now_price}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
