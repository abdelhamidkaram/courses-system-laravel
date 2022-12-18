@extends('layouts.master')

@section('content')
<div class="uk-position-cover  uk-background-cover "style="background-image: url({{ asset('assets/b1.jpg') }}); ">
    <div   class="uk-align-center uk-overlay uk-overlay-default uk-position-center">  
        <h1 class="uk-text-center">{{ config('app.name') }}</h1>

        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 >{{ trans('account.resetPassword') }}</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="row mb-3">
                            <label for="email" class="">{{ __('account.email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="uk-input" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                        <strong class="uk-text-danger	">{{ $message }}</strong>
                                    
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="">{{ __('account.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="uk-input" name="password" required autocomplete="new-password">

                                @error('password')
                                <strong class="uk-text-danger	">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="">{{ __('account.confirm_password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="uk-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom " >
                                {{ __('account.resetPassword') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
