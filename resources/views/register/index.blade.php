@extends('layouts.main')
@section('container')
        <div class="row justify-content-center">
            <div class="col-lg-5">
                {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('regSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('regSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container">
                    <main class="form-register">
                        <form action="{{ route('registerStore') }}" method="POST">
                           @csrf
                            <h1 class="h3 mb-3 fw-normal">Register</h1>

                            <div class="form-floating">
                                <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control mt-2" id="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>

                        </form>
                        <small class="d-block text-center mt-3">Sudah punya akun? <a href="{{ route('login') }}">Login</a></small>
                    </main>
                </div>
            </div>
        </div>
@endsection
@extends('layouts.main')
@section('login')
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-t-33 p-b-50">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            @if (session('regSuccess'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('regSuccess') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <span class="login100-form-title p-b-41">
                        Register
                    </span>
                    <form class="login100-form validate-form p-b-20 p-t-5" action="{{ route('registerStore') }}" method="POST">

                        <div class="wrap-input100 validate-input" data-validate = "Enter name">
                            <input class="input100" type="text" name="email" placeholder="Name" autocomplete="off">
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Enter email">
                            <input class="input100" type="email" name="email" placeholder="Email address" autocomplete="off">
                            <span class="focus-input100" data-placeholder="&#xe7ec;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        </div>

                        <div class="container-login100-form-btn m-t-32">
                            <button class="login100-form-btn">
                                Register
                            </button>
                            @csrf
                        </div>
                    </form>
                    <a href="{{ route('login') }}" style="color:gray; text-decoration: none;">Have an account?</a>
                </div>
            </div>
        </div>
@endsection
