@extends('master')
@section("content")
<div class="custom-product">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        @foreach ($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="slider-img">
                    <div class="carousel-caption">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
    </div>

    <div class="trending-wrapper">
        <h3 class="ml-3 mb-2 mt-5">Trending Products</h3>
        <div class="d-flex">
        @foreach($products as $item)
        <div class="trending-item d-flex flex-column">
            <a href="detail/{{$item['id']}}">
                <div class="d-flex justify-content-center">
                    <img class="trending-image" src="{{$item['gallery']}}">
                </div>
                <div class="">
                    <h5 class="text-center">{{$item['name']}}</h5>
                    <!-- <p>{{$item['description']}}</p> -->
                </div>
            </a>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection