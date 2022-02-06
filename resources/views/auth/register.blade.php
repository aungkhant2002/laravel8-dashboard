@extends('master')
@section('title') Register @endsection

@section('content')

    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-12 col-lg-4">
                <div class="">
                    <!--                <img src="images/logos/logo.PNG" class="d-block w-50 mx-auto" alt="">-->

                    <div class="sign-in-form ">
                        <h3 class="fw-bold text-center">Sign Up</h3>
                        <p class="text-center">
                            Already have an account?
                            <a href="{{ route('login') }}">Sign in here</a>
                        </p>

                        <a href="#" class="btn btn-lg rounded btn-outline-dark w-100">
                            Sign in with Google
                        </a>

                        <hr class="my-4">

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="name">
                                    <i class="fas fa-user"></i>
                                    Full Name
                                </label>
                                <input id="name" type="text" class="form-control form-control-lg rounded @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">
                                    <i class="fas fa-envelope"></i>
                                    Email
                                </label>
                                <input id="email" type="email" class="form-control form-control-lg rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">
                                    <i class="fas fa-lock"></i>
                                    Password
                                </label>
                                <input id="password" type="password" class="form-control form-control-lg rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password-confirm">
                                    <i class="fas fa-lock"></i>
                                    Confirm Password
                                </label>
                                <input id="password-confirm" type="password" class="form-control form-control-lg rounded" name="password_confirmation" required autocomplete="new-password">
                            </div>


                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I accept the Term and Condition
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg rounded w-100">Sign Up</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
