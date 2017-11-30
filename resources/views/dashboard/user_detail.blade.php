@extends('dashboard/layouts.app')
<!-- section title -->
@section('title')
- Utilisateurs
@stop
<!-- end section title -->

<!-- section CSS -->
@section('css')
<!-- uikit -->
<link rel="stylesheet" href="{{asset('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">
<!-- altair admin -->
<link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}" media="all">
<link rel="stylesheet" href="{{asset('css/style.css')}}" media="all">
@stop
<!-- end section CSS -->

<!-- section content -->
@section('content')

<div id="page_content">
        <div id="page_content_inner">
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
                <div class="uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_menu" data-uk-dropdown="{pos:'left-top'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Action 1</a></li>
                                        <li><a href="#">Action 2</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="user_avatar">
                                <img src="/uploads/avatars/{{$UserDetail->photo}}" alt="user avatar"/>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b uk-margin-bottom"><span class="uk-text-truncate">{{$UserDetail->FullName()}}</span>
                                <span class="sub-heading">{{$UserDetail->adresse}}</span></h2>
                                <ul class="user_stats">
                                    <li>
                                        <h4 class="heading_a">2391 <span class="sub-heading">Posts</span></h4>
                                    </li>
                                    <li>
                                        <h4 class="heading_a">120 <span class="sub-heading">Photos</span></h4>
                                    </li>
                                    <li>
                                        <h4 class="heading_a">284 <span class="sub-heading">Following</span></h4>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="user_content">
                                @if(Session::has('flash_message'))
                                    <div class="uk-alert uk-alert-success" data-uk-alert="">
                                        <a href="#" class="uk-alert-close uk-close"></a> <p>{!! session('flash_message') !!}</p>
                                    </div>
                                @endif

                                @if(Session::has('flash_message-1'))
                                    <div class="uk-alert uk-alert-danger" data-uk-alert="">
                                        <a href="#" class="uk-alert-close uk-close"></a> <p>{!! session('flash_message-1') !!}</p>
                                    </div>
                                @endif
                            <ul id="user_profile_tabs" class="uk-tab" data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}" data-uk-sticky="{ top: 48, media: 960 }">
                                <li class="uk-active"><a href="#">Informations personnelles</a></li>
                                <li><a href="#">Vérification</a></li>
                                <li><a href="#">Véhicule</a></li>
                                <li><a href="#">Avis</a></li>
                                <li><a href="#">Commentaires</a></li>
                                <li><a href="#">Mot de passe</a></li>
                                <li><a href="#">Annonces</a></li>
                                <li><a href="#">Réservation</a></li>
                            </ul>
                            <ul id="user_profile_tabs_content" class="uk-switcher uk-margin">
                                @include('dashboard/edit-users.info-perso')
                                @include('dashboard/edit-users.verif')
                                @include('dashboard/edit-users.vehicule')
                                @include('dashboard/edit-users.avis')
                                @include('dashboard/edit-users.commentaires')
                                @include('dashboard/edit-users.mot-de-passe')
                                @include('dashboard/edit-users.annonces')
                                @include('dashboard/edit-users.reservation')
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
</div>     

@stop
<!-- end section content -->


<!-- section JS -->
@section('js')
   <script src="{{asset('bower_components/parsleyjs/dist/parsley.min.js')}}"></script>
   <script src="{{asset('assets/js/pages/forms_validation.min.js')}"></script>
@stop
<!-- end section JS -->