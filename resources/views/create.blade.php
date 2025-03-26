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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form  action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="name" class="search-field" placeholder="Enter product name...">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="description" class="search-field" placeholder="Enter product description...">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="price" class="search-field" placeholder="Enter price.">
                    </div>
                    <div class="form-group mb-3">
                        <label for="thumbnail_path" class="form-label" >Upload a thumbnail, for main listing</label>
                        <input id="thumbnail_path" class="form-control form-control-lg" type="file" name="thumbnail_path" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="image_resource_path" class="form-label">Upload the images, for the description rail</label>
                        <input id="image_resource_path" class="form-control form-control-lg" type="file" name="image_resource_path[]" multiple required>
                    </div>
                    <div class="form-group mb-3" >
                        <button type="submit" class="btn btn-primary form-control" name="add_item"> Add item </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
