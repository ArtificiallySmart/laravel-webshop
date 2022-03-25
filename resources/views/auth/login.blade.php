@extends('layouts.app')

@section('content')

<div id="app">

    <div class="header">

        <navbar-component></navbar-component>
        <img src="/images/logo.png" alt="logo">

    </div>

    <div class="container">
        <div class="row justify-content-center">

            <div class="card">


                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div claas=test>


                            <div class="row">
                                <div class="col-md-6">

                                <div class ="images">
                                    <div class="parent">
                                        <img class="image1" src="./images/skeletonTshirtforLogin.png">
                                    </div>
                                    <div class="children">
                                        <img class="image2" src="./images/martialartsLogin.png">
                                        <img class="image3" src="./images/warriorflowerforLogin.png">

                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>




                        <div class="row mb-2">

                            <label for="email" class="col-md-5 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>





                        <div class="row mb-2">
                            <label for="password" class="col-md-5 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class=" row mb-2 col-md-6 offset-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="offset-md-3">
                                <button type="submit" class="btn btn-primary sumbit">
                                    {{ __('Login / Join') }}
                                </button>



                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<footer-component></footer-component>





@endsection