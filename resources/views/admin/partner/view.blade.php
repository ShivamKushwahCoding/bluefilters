@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')



<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1 style="float: left">Partner view</h1>
        {{-- </div>
        <div class="pull-right" style="float: right"> --}}
            <a class="btn btn-primary" href="{{route('admin.partner')}}" title="Go back" style="float: right"><i class="fas fa-backward "></i> go back</a>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 10%">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <center><strong>Partner Name : {{$partner->name}}</strong></center>

        </div>
    </div>
    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description : {{$partner->description}}</strong>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image : </strong>
        </div>
            <img class="img-fluid img-thumbnail" src="{{asset('product/images/'.$partner->image)}}" />
        
    </div> --}}
</div>

     <!-- Dashboard Ecommerce ends -->
@endsection