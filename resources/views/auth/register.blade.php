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
            <h1 class="entry-title">INSCRIPTION</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="{{route('home')}}">Accueil</a></li>
        <li class="active">Inscription</li>
    </ul>
</div>
<div class="container">
    <div class="row login register"> 
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well col-xs-12">
            <div class="modal-header">
                <h4 class="modal-title">Inscription</h4>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="col-md-12 dropdown">
                        <select autofocus name="sexe" class="selector full-width" required>
                            <option value="homme" selected>homme</option>
                            <option value="femme">femme</option>
                        </select>   
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="name" type="text" class="input-text full-width" name="name" value="{{ old('name') }}" required placeholder="Nom">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                             @endif
                    </div>
                </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="name" type="text" class="input-text full-width" name="prenom" value="{{ old('prenom') }}" required placeholder="Prénom"/>
                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="name" type="text" class="input-text full-width" name="tel" value="{{ old('tel') }}" required placeholder="Téléphone"/>
                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="email" type="email" class="input-text full-width" name="email" value="{{ old('email') }}" required placeholder="Email">
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

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="input-text full-width" name="password_confirmation" required placeholder="Confirmer le mot de passe">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn_fot_tlink">
                                    Inscription
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