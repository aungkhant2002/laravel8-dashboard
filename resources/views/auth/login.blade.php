@extends('master')
@section('title') Login @endsection

@section('content')

    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-12 col-lg-4">
                <div class="">
                    <!--                <img src="images/logos/logo.PNG" class="d-block w-50 mx-auto" alt="">-->

                    <div class="sign-in-form ">
                        <h3 class="fw-bold text-center">Sign In</h3>
                        <p class="text-center">
                            Doesn't have an account yet?
                            <a href="{{ route('register') }}">Sign up here</a>
                        </p>

                        <a href="#" class="btn btn-lg rounded btn-outline-dark w-100">
                            Sign in with Google
                        </a>

                        <hr class="my-4">

                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="email">
                                    <i class="fas fa-user"></i>
                                    Email
                                </label>
                                <input type="text" id="email"
                                       class="form-control form-control-lg rounded @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       autofocus>
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
                                <input type="password" id="password"
                                       class="form-control form-control-lg rounded @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember Me
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg rounded w-100">Sign In</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
