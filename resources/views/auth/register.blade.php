@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fName" type="text" class="form-control{{ $errors->has('fName') ? ' is-invalid' : '' }}" name="fName" value="{{ old('fName') }}" required autofocus>

                                @if ($errors->has('fName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lName" type="text" class="form-control{{ $errors->has('lName') ? ' is-invalid' : '' }}" name="lName" value="{{ old('lName') }}" required autofocus>

                                @if ($errors->has('lName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone1" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="phone1" type="text" class="form-control{{ $errors->has('phone1') ? ' is-invalid' : '' }}" name="phone1" value="{{ old('phone1') }}" required autofocus>

                                @if ($errors->has('phone1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone2" class="col-md-4 col-form-label text-md-right">{{ __('Cell Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone2" type="text" class="form-control{{ $errors->has('phone2') ? ' is-invalid' : '' }}" name="phone2" value="{{ old('phone2') }}" required autofocus>

                                @if ($errors->has('phone2'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label for="streetAddress" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="streetAddress" type="text" class="form-control{{ $errors->has('streetAddress') ? ' is-invalid' : '' }}" name="streetAddress" value="{{ old('streetAddress') }}" required autofocus>

                                @if ($errors->has('streetAddress'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('streetAddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="province" value="{{ old('province') }}" required autofocus>

                                @if ($errors->has('province'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal" class="col-md-4 col-form-label text-md-right">{{ __('Postal') }}</label>

                            <div class="col-md-6">
                                <input id="postal" type="text" class="form-control{{ $errors->has('postal') ? ' is-invalid' : '' }}" name="postal" value="{{ old('postal') }}" required autofocus>

                                @if ($errors->has('postal'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('postal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                 

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
