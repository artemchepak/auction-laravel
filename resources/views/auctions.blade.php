@extends('layouts.app')

@section('content')
    <h1>My auctions</h1>

    <a class="btn btn-primary" href="{{route('products.create')}}" role="button">Add new auction</a>
@endsection
