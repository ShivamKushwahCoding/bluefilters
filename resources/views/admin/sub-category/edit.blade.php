@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')

<h1>Sub-Category Edit</h1>

<form class="form form-vertical" id="medicine-form" method="post" role="form" enctype="multipart/form-data"
        action="{{ isset($sub_category_data) ? route('admin.sub-category.update', $sub_category_data->id) : route('admin.sub-category.store') }}">
        @csrf

        <div class="col-12">
            <div class="mb-1">
                <input type="text" id="medicine_name" class="form-control" required
                    value="{{ isset($sub_category_data) ? $sub_category_data->name : old('name') }}" name="name"
                    placeholder="Enter Sub Category Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category</strong>
                
                    <select name="category_id" id="category-dropdown" class="form-control" placeholder="Select The Category">
                        @if(!empty($category))
                        <option value="" selected disabled>--  Select Category --</option>
                        @foreach($category as $value)
                            @if(isset($sub_category_data) && $value->id == $sub_category_data->category_id)
                                <option selected value="{{$value->id}}">{{$value->name}}</option>
                            @else
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endif
                        @endforeach
                        @else
                        <option value="" selected disabled>--  No Category Available --</option>
                        @endif
                        </select>
            </div>
        </div>
        

        <div class="demo-inline-spacing">
            <div class="form-check form-switch">
                <label class="form-check-label" for="customSwitch1">Status</label>

                <input type="checkbox" name="status" class="form-check-input" id="customSwitch1"
                    {{ isset($sub_category_data) && $sub_category_data->status == 1 ? 'checked' : '' }}>
            </div>

        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-1 mt-3 waves-effect waves-float waves-light">
                Submit
            </button>
            <button class="btn btn-outline-secondary waves-effect mt-3" type="button"
                onclick="window.location = '{{ route('admin.sub-category') }}';">Cancel
            </button>
        </div>


    </form>

     <!-- Dashboard Ecommerce ends -->
@endsection