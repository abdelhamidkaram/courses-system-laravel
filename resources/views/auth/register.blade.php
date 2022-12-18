@extends('layouts.master')

@section('content')

<div class="uk-position-cover  uk-background-cover "style="background-image: url({{ asset('assets/b1.jpg') }}); ">
<div  class=" uk-align-center uk-overlay uk-overlay-default uk-position-center" style="width: 80%;">
    <h1 class="uk-text-center">{{ config('app.name') }}</h1>
    <div class="">
        <div class="row justify-content-center">
            <div class="card">
                <h2 class="uk-legend">{{ trans('account.register_new_account') }}</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3 for="name">{{ trans('account.account_type') }}</h3>
                        <select class="uk-select" name="account_type">
                            <option value="student">{{ trans('account.student') }} </option>
                            <option value="teacher">{{ trans('account.teacher') }}</option>
                        </select>
                       <div  class="uk-column-1-2"  >
                        <div >
                            <h3 > {{ trans('account.first_name') }}</h3>
                            <div class="col-md-6">
                                <input type="text" class="uk-input" name="first_name">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div >
                            <h3>{{ trans('account.last_name') }}</h3>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="uk-input" name="last_name" value="{{ old('last name') }}" required autocomplete="last name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       </div>
                        <div  class="uk-column-1-1" >
                            <h3 for="email" >{{ trans('account.email') }}</h3>
                            <div >
                                <input id="email" class="uk-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="uk-column-1-2">
                            <div >
                                <h3 for="password">{{ __('account.password') }}</h3>
                                    <div>
                                <input id="password" type="password" class="uk-input" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                          </div>
                            <div>
                                <h3 for="password-confirm" >{{ __('account.confirm_password') }}</h3>
                                <div>
                                    <input id="password-confirm" type="password" class="uk-input" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>    
                          </div>
                        
                         
                            <div class="uk-margin-medium-top">
                                <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">
                                    {{ __('account.register') }}
                                </button>
                                <a class="uk-link-reset" href="{{ route('login') }}">{{ __('account.have_an_account')}}</a>
                           
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
