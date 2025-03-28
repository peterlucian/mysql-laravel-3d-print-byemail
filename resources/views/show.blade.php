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

            <div class="carousel-container">
                <div class="carousel">
                    @forelse ( $item_images as $image)
                    <img src="{{ asset($image->image_resource_path)}}" alt="carousel" class="{{ $loop->first ? 'active' : '' }}">
                    @empty
                        <p>No images available</p>
                    @endforelse
                </div>
                    <div class="buttons">
                        <button onclick="prevSlide()">&#10094;</button>
                        <button onclick="nextSlide()">&#10095;</button>
                    </div>

            </div>



            <div class="mt-5">
                <div class="form-group mb-3">
                <a href="">{{$item->name}}</a>
                </div>
                <div class="form-group mb-3">
                <a href="#">
                    <h3 >{{$item->description}}</h3>
                </a>
                </div>
                <div class="mb-3 d-flex flex-row">
                    <ion-icon class="p-2" name="star"></ion-icon>
                    <ion-icon class="p-2" name="star"></ion-icon>
                    <ion-icon class="p-2" name="star"></ion-icon>
                    <ion-icon class="p-2" name="star-outline"></ion-icon>
                    <ion-icon class="p-2" name=" star-outline"></ion-icon>
                </div>

                <div class="form-group mb-3">
                    <p >{{$item->price}} €</p>
                </div>

            </div>



        </div>

    </div>

@endsection
