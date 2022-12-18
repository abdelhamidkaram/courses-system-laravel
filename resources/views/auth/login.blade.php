@extends('layouts.master')

@section('content')

<div class="uk-position-cover  uk-background-cover "style="background-image: url({{ asset('assets/b1.jpg') }}); ">

    <div class="uk-align-center uk-overlay uk-overlay-default uk-position-center" style="width: 70%;">
        <h1 class="uk-text-center">{{ config('app.name') }}</h1>

        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="uk:uk-legend">{{ __('account.login') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <h3 for="email">{{ __('account.email') }}</h3>

                            <div class="col-md-6">
                                <input id="email" type="email" class="uk-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <h3 for="password" class="col-md-4 col-form-label text-md-end">{{ __('account.password') }}</h3>

                            <div class="col-md-6">
                                <input id="password" type="password" class="uk-input" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="uk-margin-small-top">
                                <div class="form-check">
                                    <input class="uk-checkbox" type="checkbox" name="remember" checked='true' style="background-color: rgb(39, 29, 175)">

                                    <label class="form-check-label" for="remember">
                                        {{ __('account.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div class="uk-margin-medium-top">
                                    <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">
                                        {{ __('account.login') }}
                                    </button>                               
                             </div>
                               <div   >
                                @if (Route::has('password.request'))
                                <a class="uk-link-reset" href="{{ route('password.request') }}">
                                    {{ __('account.forgot_your_password') }}
                                </a>
                            @endif
                               </div>
                               <a class="uk-link-reset" href="{{ route('register')}}" > {{__('account.do_not_have_an_account')}} </a>

                            </div>
                         </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
