@extends('layouts.master')

@section('content')
<div class="uk-position-cover  uk-background-cover "style="background-image: url({{ asset('assets/b1.jpg') }}); ">
<div   class="uk-align-center uk-overlay uk-overlay-default uk-position-center">  
    <h1 class="uk-text-center">{{ config('app.name') }}</h1>

    
    <div class="">
        <div class="">
            <div class="">
                <strong class="">{{ trans('account.verifyYourEmailAddress') }}</strong>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="uk-alert-success" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        {{ __('account.resendVerifyMSG') }}
                    </div>
                    @endif

                    {{ __('account.verifyYourEmailMessage') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="uk-button uk-button-primary uk-margin" >{{ __('account.resendVerifyBtn') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
