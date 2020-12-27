@extends('master')
@section("content")
<div class="custom-product">
    <div class="ml-3 mt-3">
        <a href="#">Filter</a>
    </div>

    <div class="">
        <div class="trending-wrapper">
            <h2 class="ml-3 mb-2 mt-3">Searched Products</h2>
            <div class="d-flex">
            @foreach($products as $item)
            <div class="searched-item d-flex flex-column col-sm-4">
                <a href="detail/{{$item['id']}}">
                    <div class="d-flex justify-content-center">
                        <img class="trending-image" src="{{$item['gallery']}}">
                    </div>
                    <div class="">
                        <h5 class="text-center">{{$item['name']}}</h5>
                        <h5>{{$item['description']}}</h5>
                    </div>
                </a>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection