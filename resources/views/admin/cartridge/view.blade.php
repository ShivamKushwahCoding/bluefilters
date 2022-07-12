@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 style="float: left">Cartridge View</h1>
                <a class="btn btn-primary" href="{{ route('admin.cartridges') }}" title="Go back" style="float: right"> <i
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
            <img class="img-fluid img-thumbnail" src="{{ asset('product/images/' . $cartridge->image) }}" height="50%" />

        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:{{ $cartridge->name }}</strong>

            </div>
            <div class="form-group">
                <strong>Description : {{ $cartridge->description }}</strong>

            </div>
            <div class="form-group">
                <strong>Price : {{ $cartridge->price }}</strong>

            </div>
            <div class="form-group">
                <strong>Category : {{ $cartridge->Category->name }}</strong>

            </div>
            <div class="form-group">
                <strong>Sub Category : {{ $cartridge->sub_category->name }}</strong>

            </div>
            <div class="form-group">
                <strong>Date Created : {{ date('d, M-Y, D', strtotime($cartridge->created_at)) }}</strong>

            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Discount : {{$cartridge->discount}}</strong>
    
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
