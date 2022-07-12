@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')

    <form class="form form-vertical" id="medicine-form" method="post" role="form" enctype="multipart/form-data"
        action="{{ isset($category_data) ? route('admin.category.update', $category_data->id) : route('admin.category.store') }}">
        @csrf

        <div class="col-12">
            <div class="mb-1">
                <input type="text" id="medicine_name" class="form-control" required
                    value="{{ isset($category_data) ? $category_data->name : old('name') }}" name="name"
                    placeholder="Enter Category Name">
            </div>
        </div>
        

        <div class="demo-inline-spacing">
            <div class="form-check form-switch">
                <label class="form-check-label" for="customSwitch1">Status</label>

                <input type="checkbox" name="status" class="form-check-input" id="customSwitch1"
                    {{ isset($category_data) && $category_data->status == 1 ? 'checked' : '' }}>
            </div>

        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-1 mt-3 waves-effect waves-float waves-light">
                Submit
            </button>
            <button class="btn btn-outline-secondary waves-effect mt-3" type="button"
                onclick="window.location = '{{ route('admin.category') }}';">Cancel
            </button>
        </div>


    </form>

    <!-- Dashboard Ecommerce ends -->
@endsection
