@extends('front_office/layouts.app')
@section('title')
| Inscription
@endsection
@section('css')
@endsection
@section('content')
<div class="page-title-container">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title">CONNEXION</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="{{route('home')}}">Accueil</a></li>
        <li class="active">CONNEXION</li>
    </ul>
</div>
<div class="container">
<div class="row login">
        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 well col-xs-12">
            <div class="modal-header">
            <h4 class="modal-title">Connexion</h4>
            </div>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="input-text" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="input-text" name="password" required placeholder="Mot de passe">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Se rappeler de moi</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn_fot_tlink">
                                    Connexion
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <a class="btn-link" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                            </div>
                        </div>
                </form>
                <div class="modal-footer">
                    Vous n'avez pas encore de compte ? <a class="btn-link" href="{{route ('register') }}">S'inscrire gratuitement</a>
                </div>
            </div>
        </div>
</div> 
@endsection
@section('js')
@endsection 
