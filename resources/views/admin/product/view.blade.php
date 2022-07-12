@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 style="float: left">Product View</h1>
                <a class="btn btn-primary" href="{{ route('admin.products') }}" title="Go back" style="float: right"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        
    </div> --}}
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Image : </strong>
            </div>
            <img class="img-fluid img-thumbnail" src="{{ asset('product/images/' . $product->image) }}" height="50%" />

        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:{{ $product->name }}</strong>

            </div>
            <div class="form-group">
                <strong>Description : {{ $product->description }}</strong>

            </div>
            <div class="form-group">
                <strong>Price : {{ $product->price }}</strong>

            </div>
            <div class="form-group">
                <strong>Category : {{ $product->Category->name }}</strong>

            </div>
            <div class="form-group">
                <strong>Sub Category : {{ $product->sub_category->name }}</strong>

            </div>
            <div class="form-group">
                <strong>Date Created : {{ date('d, M-Y, D', strtotime($product->created_at)) }}</strong>

            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Discount : {{$product->discount}}</strong>

        </div>
    </div> --}}
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        
    </div> --}}
    </div>
    <!-- Dashboard Ecommerce ends -->
@endsection
