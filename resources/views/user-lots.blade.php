@extends('layouts.app')

@section('content')
    <h1>My lots</h1>

    <a class="btn btn-primary" href="{{route('lots.create')}}" role="button">Add new lot</a>
@endsection
