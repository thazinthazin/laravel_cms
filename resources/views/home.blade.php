@extends('layout.master')

@section('title','Home')

@section('content')
    <div class="container-fluid">
        <div class="col-md-3">
            {{--sidebar--}}
            @include('layout.sidebar')
        </div>
        <div class="col-md-9">
            <h1>Content</h1>

            {{--content--}}
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <h3 style="text-align: center;">${{$product->price}}</h3>

                    {{--@foreach(unserialize($product->imgs) as $imgs)--}}
                    <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="img" style="200px;height: 220px;">
                    {{--@endforeach--}}

                    <div class="caption">
                        <h3 style="text-align: center;">{{$product->title}}</h3>
                        <p>{{substr($product->description,0,80)}}</p>
                        <p><a href="#" class="btn btn-primary" role="button">View Detail</a>
                            <a href="{{action('PageController@add',$product->id)}}" class="btn btn-info pull-right" role="button">Add to Cart</a></p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
