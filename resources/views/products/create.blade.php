@extends('layout.master')
@section('title','Create Product')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well">
            {{--form--}}
            <form method="post" enctype="multipart/form-data">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                    @endif
                <legend>Insert A New Product</legend>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Email address</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="price">Password</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <lable for="description">Description</lable>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Image</label>
                    <input type="file" name="file[]" id="exampleInputFile" multiple>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection