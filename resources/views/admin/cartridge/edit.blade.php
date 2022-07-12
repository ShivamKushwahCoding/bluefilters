@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')

    <form
        action="{{ isset($cartridge) ? route('admin.cartridges.update', ['id' => $cartridge->id]) : route('admin.cartridges.store') }}"
        method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ isset($cartridge->name) ? $cartridge->name : old('name') }}"
                        class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" style="height:50px" name="description" placeholder="description">{{ isset($cartridge->description) ? $cartridge->description : old('description')  }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <input type="number" name="price" class="form-control" placeholder=""
                        value="{{ isset($cartridge->price) ? $cartridge->price : old('price')  }}">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Discount</strong>
                    <input type="number" name="discount" class="form-control" placeholder=""
                        value="{{isset($cartridge->discount) ? $cartridge->discount : ''}}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image</strong>

                    <input type="file" name="image" class="form-control" placeholder="" value="">
                </div>
                @if (isset($cartridge->description))
                    <img class="img-fluid img-thumbnail" src="{{ asset('product/images/' . $cartridge->image) }}">
                @endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category</strong>

                    <select name="category_id" id="category-dropdown" class="form-control"
                        placeholder="Select The Category">
                        @if (!empty($category))
                            <option value="" selected disabled>-- Select Category --</option>
                            @foreach ($category as $value)
                                @if (isset($cartridge) && $value->id == $cartridge->category_id)
                                    <option selected value="{{ $value->id }}">{{ $value->name }}</option>
                                @else
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endif
                            @endforeach
                        @else
                            <option value="" selected disabled>-- No Category Available --</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sub Category</strong>
                    <select id="sub-category-dropdown" name="sub_category_id" class="form-control"
                        placeholder="Select The Sub Category">
                        @if (!empty($sub_category))
                            @foreach ($sub_category as $value)
                                @if (isset($cartridge) && $value->id == $cartridge->sub_category_id)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @else
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endif
                            @endforeach
                        @else
                            <option value="" selected disabled>-- No Sub Category Available --</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="demo-inline-spacing">
                <div class="form-check form-switch">
                    <label class="form-check-label" for="customSwitch1">Status</label>

                    <input type="checkbox" name="status" class="form-check-input" id="customSwitch1"
                        {{ isset($cartridge) && $cartridge->status == 1 ? 'checked' : '' }}>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>


    <!-- Dashboard Ecommerce ends -->
@endsection
@push('custom-scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#category-dropdown').on('change', function() {
                var idCategory = this.value;
                $("#sub-category-dropdown").html('');
                $.ajax({
                    url: "{{ route('fetch-sub-category') }}",
                    type: "POST",
                    data: {
                        category_id: idCategory,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        if (result != '') {
                            $('#sub-category-dropdown').html(
                                '<option value="">-- Select Sub Category --</option>');
                            $.each(result, function(key, value) {
                                $("#sub-category-dropdown").append('<option value="' +
                                    value.id + '">' + value.name + '</option>');
                            });
                        } else {
                            $('#sub-category-dropdown').html(
                                '<option value="">-- No Sub Category Available--</option>');
                        }


                    }
                });
            });
        });
    </script>
@endpush
