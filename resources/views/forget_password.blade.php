@extends('master')
@section('main')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <div class="alert-body">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if (\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert-body">
                            <li>{!! \Session::get('success') !!}</li>
                        </div>
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        <div class="alert-body">
                            <li>{!! \Session::get('error') !!}</li>
                        </div>
                    </div>
                @endif
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="{{ route('reset-password') }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Password Reset </p>

                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg"
                                placeholder="Enter Your email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" name="password" value="{{ old('password') }}"
                                    id="form3Example4c" class="form-control" />
                                <label class="form-label" for="form3Example4c">New Password</label>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                                    id="form3Example4c" class="form-control" />
                                <label class="form-label" for="form3Example4c">Confirm Password</label>
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Reset</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{ route('register') }}" class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
            </div>
            <!-- Copyright -->

           
        </div>
    </section>
@endsection
