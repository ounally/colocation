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

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

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

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn_fot_tlink">               
                            Envoyer un lien de réinitialisation
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
