@extends('layouts.master')

@section('content')
<div class="uk-position-cover  uk-background-cover "style="background-image: url({{ asset('assets/b1.jpg') }}); ">
<div class="uk-align-center uk-overlay uk-overlay-default uk-position-center">
    <h1 class="uk-text-center">{{ config('app.name') }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 >{{ trans('account.resetPassword') }}</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="uk-alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                           

                            <h5 for="email">{{ __('account.email') }}</h5>
                                <input id="email" type="email" class="uk-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                
                                    <span  >
                                        
                                        <strong style="color: rgb(114, 37, 23)" >{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                            <div class="uk-margin">
                                <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom " >
                                    {{ __('account.sendPasswordResetLink') }}
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
