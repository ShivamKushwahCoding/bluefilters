@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')

    <form class="form form-vertical" method="post" role="form" enctype="multipart/form-data"
        action="{{ isset($news_data) ? route('admin.news.update', $news_data->id) : route('admin.news.store') }}">
        @csrf

        <div class="col-12">
            <div class="mb-1">
                <input type="text" class="form-control" required
                    value="{{ isset($news_data) ? $news_data->name : old('name') }}" name="name"
                    placeholder="Enter News Name">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" style="height:50px" name="description" placeholder="description">{{ isset($news_data) ? $news_data->description : old('description')  }}</textarea>
            </div>
        </div>

        <div class="demo-inline-spacing">
            <div class="form-check form-switch">
                <label class="form-check-label" for="customSwitch1">Status</label>

                <input type="checkbox" name="status" class="form-check-input" id="customSwitch1"
                    {{ isset($news_data) && $news_data->status == 1 ? 'checked' : '' }}>
            </div>

        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-1 mt-3 waves-effect waves-float waves-light">
                Submit
            </button>
            <button class="btn btn-outline-secondary waves-effect mt-3" type="button"
                onclick="window.location = '{{ route('admin.orders') }}';">Cancel
            </button>
        </div>


    </form>

    <!-- Dashboard Ecommerce ends -->
@endsection
