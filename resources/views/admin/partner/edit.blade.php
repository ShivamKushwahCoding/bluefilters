@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')

    <form class="form form-vertical" id="medicine-form" method="post" role="form" enctype="multipart/form-data"
        action="{{ isset($partner_data) ? route('admin.partner.update', $partner_data->id) : route('admin.partner.store') }}">
        @csrf

        <div class="col-12">
            <div class="mb-1">
                <input type="text" id="medicine_name" class="form-control" required
                    value="{{ isset($partner_data) ? $partner_data->name : old('name') }}" name="name"
                    placeholder="Enter Partner Name">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" style="height:50px" name="description" placeholder="description">{{ isset($partner_data) ? $partner_data->description : old('description')  }}</textarea>
            </div>
        </div>
        

        <div class="demo-inline-spacing">
            <div class="form-check form-switch">
                <label class="form-check-label" for="customSwitch1">Status</label>

                <input type="checkbox" name="status" class="form-check-input" id="customSwitch1"
                    {{ isset($partner_data) && $partner_data->status == 1 ? 'checked' : '' }}>
            </div>

        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-1 mt-3 waves-effect waves-float waves-light">
                Submit
            </button>
            <button class="btn btn-outline-secondary waves-effect mt-3" type="button"
                onclick="window.location = '{{ route('admin.partner') }}';">Cancel
            </button>
        </div>


    </form>

    <!-- Dashboard Ecommerce ends -->
@endsection
