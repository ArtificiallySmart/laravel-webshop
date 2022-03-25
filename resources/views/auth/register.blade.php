@extends('layouts.app')
@section('content')
<div id="app">

    <body>
        <div class="header">


            <navbar-component></navbar-component>
            <img src="/images/logo.png" alt="logo">
        </div>

        <div class="container">


            <div class="row justify-content-center">


                <div class="card">



                    <div class="card-header">{{ __('Register') }}</div>


                    <div class="card-body">



                        <form method="POST" action="{{ route('register') }}">


                            @csrf
                            <div class="test">
                                <div class="row ">

                                    <div class="col-md-6">
                                        <img class="t-shirt" src="./images/tshirtssmallerCopy.png">
                                    </div>
                                </div>

                                <div class=" col-md-6">
                                    <div class="row mb-3">

                                        <label for="name" class="col-md-5 col-form-label text-md-end">{{ __('First name') }}</label>

                                        <div class="col-md-6">
                                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="last_name" class="col-md-5 col-form-label text-md-end">{{ __('Last name') }}</label>

                                        <div class="col-md-6">
                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="row mb-3">
                                        <label for="email" class="col-md-5 col-form-label text-md-end">{{ __('Email Address') }}</label>


                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">

                                        <label for="password" class="col-md-5 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-5 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-6">

                                        <div class="col-md-9 offset-md-9">



                                            <button type="submit" class="btn btn-primary register">
                                                {{ __('Register') }}
                                            </button>
                                        </div>


                                    </div>



                                </div>
                            </div>






                        </form>






                    </div>




                </div>

                <footer-component></footer-component>
            </div>

        </div>
    </body>
</div>
@endsection