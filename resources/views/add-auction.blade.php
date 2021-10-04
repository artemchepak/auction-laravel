@extends('layouts.app')

@section('content')
    <h1>Add new auction</h1>


    <div class="row justify-content-center align-items-center h-100">
        <div class="bd-example w-50 pt-5 justify-content-center">
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" style="height: 100px" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="condition" class="form-label">Condition</label>
                    <input type="text" class="form-control" id="condition" name="condition">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="price" class="form-label">Starting price</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="buynowprice" class="form-label">"Buy it now" price <i>(optional)</i></label>
                        <input type="number" class="form-control" id="buynowprice" name="buynowprice">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
