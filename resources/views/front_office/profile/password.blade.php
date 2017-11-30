@extends('front_office/layouts.app')
@section('title')
- {{Auth::user()->FullName()}}
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Mot de passe</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{ redirect()->back()->getTargetUrl() }}">Mon profile</a></li>
            <li class="active">mot de passe</li>
        </ul>
    </div>
    <div class="container">
        <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 prf_left">
                @include('front_office/profile/layouts.aside')
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 prf_right">
                
                @if(Session::has('flash_message'))
                    <br>
                    <div class="alert alert-success" data-uk-alert="">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                        <p style="color:#fff;">{!! session('flash_message') !!}</p>
                    </div>
                @endif

                @if(Session::has('flash_message-1'))
                    <br>
                    <div class="alert alert-danger" data-uk-alert="">
                        <a style="color: #ff6363;" href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                        <p style="color:#fff;">{!! session('flash_message-1') !!}</p>
                    </div>
                @endif
                @if(Session::has('flash_message-2'))
                    <br>
                    <div class="alert alert-danger" data-uk-alert="">
                        <a style="color: #ff6363;" href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                        <p style="color:#fff;">{!! session('flash_message-2') !!}</p>
                    </div>
                @endif

                <h4 class="text-default" role="alert">Mot de passe</h4>
                <form method="POST" action="{{ route('password', auth()->user()->id) }}" enctype="multipart/form-data" class="update_profile_info">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group column-2 no-column-bottom-margin">
                        <div class="form-group">
                            <input class="input-text full-width" type="password" name="old" id="old" placeholder="Actuel">
                        </div>
                        <div class="form-group">
                            <input class="input-text full-width" type="password" name="password" id="password" placeholder="Nouveau mot de passe">
                        </div>
                    </div>
                    <div class="form-group column-2 no-column-bottom-margin">
                        <div class="form-group">
                            <input class="input-text full-width" type="password" name="password_confirmation" id="password_confirmation" placeholder="Comfirmer mot de passe">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn_tlink btn-block">Metrre à jour</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
@endsection
@section('js')
@endsection    