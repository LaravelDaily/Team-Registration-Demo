@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">
            {{ trans('global.register') }}
        </p>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div>
                <div class="form-group has-feedback">
                    <input type="text" name="name" class="form-control" required="autofocus" placeholder="{{ trans('global.user_name') }}">
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" required placeholder="{{ trans('global.login_email') }}">
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" required placeholder="{{ trans('global.login_password') }}">
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
                    @if($errors->has('password_confirmation'))
                        <p class="help-block">
                            {{ $errors->first('password_confirmation') }}
                        </p>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="team_name" class="form-control" required placeholder="{{ trans('global.login_team_name') }}">
                    @if($errors->has('team_name'))
                        <p class="help-block">
                            {{ $errors->first('team_name') }}
                        </p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">

                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.register') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection