@extends('admin.layout.master')
@section('main')
    <!-- Dashboard Ecommerce Starts -->

    @include('errors.index')
    <section id="responsive-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Cartridge</h4>
                        <a href="{{ route('admin.cartridges.create') }}"
                            class="btn btn-primary waves-effect waves-float waves-light">Add New Cartridge</a>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table">
                            <thead>
                                <tr>
                                    <th>SR.NO</th>
                                    <th>Name</th>
                                    {{-- <th>Email</th>
                                            <th>Otp</th>
                                            <th>Emergency Status</th> --}}
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Ecommerce ends -->
@endsection
@push('custom-styles')
@endpush
@push('custom-scripts')
    {{-- <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script> --}}
    <script>
        var ajax_datatable = '{{ route('admin.cartridges.ajax') }}';
        var ajax_status_change = '{{ route('admin.cartridges.statuschange') }}';
    </script>
    <script src="{{ asset('js/admin/cartridges/list.js') }}"></script>
@endpush
