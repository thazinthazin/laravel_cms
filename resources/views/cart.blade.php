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

            {{--product show--}}
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs">
                                    <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="..." class="img-responsive"/>
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin">{{$product->title}}</h4>
                                    <p>{{substr($product->description,0,100)}}</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{$product->price}}</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td data-th="Subtotal" class="text-center">1.99</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center"><strong>Total 1.99</strong></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                        <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    </tr>
                    </tfoot>
                </table>
        </div>
    </div>
@endsection
