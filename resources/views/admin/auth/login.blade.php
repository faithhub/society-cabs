@extends('admin.layout.base3')

@section('content')

<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="login-logo">
        <img src="{{ Setting::get('site_logo', asset('logo-black.png'))}}" style="max-height: 70px; max-width: 70px; margin-top:20px;" alt="logo">
    </div>
    <div class="login-logo">
        <a href="#"><b>{{ Setting::get('site_title', '') }}</b></a>
    </div>
    <div class="card-body login-card-body">

      <form role="form" method="POST" action="{{ url('/admin/login') }}">
        @csrf
        <div class="input-group mb-3">
            <input type="email" class="form-control"  name="email"  required="true"  id="email" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            @if ($errors->has('email'))
            <span class="help-block" style="margin-left: 55px;color: red;">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        <div class="input-group mb-3">
           <input type="password" name="password" required="true" class="form-control" id="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @if ($errors->has('password'))
                <span class="help-block" style="margin-left: 55px;color: red;">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                @lang('admin.remember_me')
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">@lang('admin.sign_in')</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
        
      <div class="social-auth-links text-center mb-3">
        <p>- @lang('admin.or') -</p>
        <a  href="{{ url('/account/login') }}" class="btn btn-block btn-info">
           @lang('admin.account_login')
        </a>
        <a href="{{ url('/fleet/login') }}" class="btn btn-block btn-info">
            @lang('admin.vendor_login')
        </a>
        <a href="{{ url('/dispatcher/login') }}" class="btn btn-block btn-info">
            @lang('admin.dispatcher_login')
        </a>
      </div>
    </div>
  </div>
</div>

 


@endsection

