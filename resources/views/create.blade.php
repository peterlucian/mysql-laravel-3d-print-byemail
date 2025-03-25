@extends('layouts.layout')


@section('content')
     <!--
      - PRODUCT
    -->

    <div class="product-box">

        <!--
        - PRODUCT GRID
        -->

        <div class="product-main">

            <h2 class="title">Add Product</h2>
            <div>
                <form  action="{{route('items.create')}}" method="post">
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="productName" class="search-field" placeholder="Enter product name...">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="productDescription" class="search-field" placeholder="Enter product description...">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="price" class="search-field" placeholder="Enter price.">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="imageUrl" class="search-field" placeholder="Enter image url...">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary" name="add_item"> Add item </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
