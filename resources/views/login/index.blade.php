@extends('layouts.main')
@section('login')
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-t-33 p-b-50">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session ('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <span class="login100-form-title p-b-41">
                        Login
                    </span>
                    <form class="login100-form validate-form p-b-20 p-t-5" action="{{ route('loginStore') }}" method="POST">

                        <div class="wrap-input100 validate-input" data-validate = "Enter email">
                            <input class="input100" type="text" name="email" placeholder="Email" autocomplete="off">
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        </div>

                        <div class="container-login100-form-btn m-t-32">
                            <button class="login100-form-btn">
                                Login
                            </button>
                            @csrf
                        </div>
                    </form>
                    <a href="{{ route('register') }}" style="color:gray; text-decoration: none;">Not have an account?</a>
                </div>
            </div>
        </div>
@endsection
