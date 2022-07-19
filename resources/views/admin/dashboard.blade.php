@extends('admin.layout.master')
@section('main')

                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-analytics">
                    <div class="row match-height">
                        <!-- Greetings Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="{{route('admin.products')}}">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Products</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="{{route('admin.category')}}">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Categories</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="{{route('admin.sub-category')}}">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Sub-categories</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="{{route('admin.cartridges')}}">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Cartridges</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="{{route('admin.products')}}">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Filters</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="{{route('admin.orders')}}">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Orders</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="#">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total delivery boy</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="#">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Support Member</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Appointment</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div> -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="#">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Doctor Appointment</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="#">
                                    <div class="card-header flex-column align-items-start pb-0">    
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Lab Appointment</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="#">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Total Order</p>
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="#">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="users" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"></h2>
                                        <p class="card-text">Today’s new patient</p>    
                                    </div>
                                </a>
                                <div id="gained-chart"></div>
                            </div>
                        </div> --}}
                        <!-- Orders Chart Card ends -->
                    </div>
                    <!-- List DataTable -->
                
                    <!--/ List DataTable -->
                </section>             
                <!-- Dashboard Ecommerce ends -->

@endsection
