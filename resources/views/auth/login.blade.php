@extends('layouts.material', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('EECL Group')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Login') }}</strong></h4>
            <div class="social-line">
              <a href="/lineLogin" class="btn btn-just-icon btn-link btn-white">
                <i class="fab fa-line"></i>
              </a>
{{--              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">--}}
{{--                <i class="fab fa-facebook"></i>--} Maintenance}
{{--              </a>--}}
{{--              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">--}}
{{--                <i class="fab fa-google-plus"></i>--}}
{{--              </a>--}}
            </div>
          </div>
          @if (\Session::has('line'))
            <div class="error text-danger pl-3 text-center" style="display: block;">
              <strong>{!! \Session::get('line') !!}</strong>
            </div>
          @endif
          <div class="card-body">
            <p class="card-description text-center">{{ __('Contact ')}}<strong>admin@eecl.co.th</strong> {{ __('to get an account') }}</p>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input style="padding-left: 10px;" type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input style="padding-left: 10px;" type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}"  required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <br>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Lets Go') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6"></div>
        <div class="col-6 text-right">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-light">
                    <small>{{ __('Forgot password?') }}</small>
                </a>
            @endif
        </div>
        {{--<div class="col-6 text-right">--}}
            {{--<a href="{{ route('register') }}" class="text-light">--}}
                {{--<small>{{ __('Create new account') }}</small>--}}
            {{--</a>--}}
        {{--</div>--}}
      </div>
    </div>
  </div>
</div>
@endsection
