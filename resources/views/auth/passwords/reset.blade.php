@extends('front_office/layouts.app')
@section('title')
| Reset
@endsection
@section('css')
@endsection
@section('content')
<div class="page-title-container">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title">Réinitialiser le mot de passe</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="{{route('home')}}">Accueil</a></li>
        <li class="active">Réinitialiser le mot de passe</li>
    </ul>
</div>
<div class="container">
    <div class="row login register"> 
        <div class="col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2 well col-xs-12">
                <div class="modal-header">
                    <h4>Réinitialiser le mot de passe</h4>
                </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="email" type="email" class="input-text full-width" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="password" type="password" class="input-text full-width" name="password" required placeholder="Mot de passe">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="input-text full-width" name="password_confirmation" required placeholder="Confirmer le mot de passe">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn_fot_tlink">       
                                Réinitialiser
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection 