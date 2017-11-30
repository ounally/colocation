@extends('front_office/layouts.app')
@section('title')
| listing recherche
@endsection
@section('css')
@endsection
@section('content')
<div class="page-title-container">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title">{{$nbr_colc}} recherches disponibles</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="{{route('home')}}">Accueil</a></li>
        <li class="active">Liste des recherches</li>
    </ul>
</div>
<div class="container">
    <form method="POST" action="{{ route('listing-saerch') }}" enctype="multipart/form-data" class="form_filter_search" id="form_filter_search">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-sm-12 box propriete" id="box_border"> 
            <div class="form-group column-3 no-column-bottom-margin">
                <div class="dropdown">
                    <label for="ville">Gouvernorat</label>
                    <select class="ville selector full-width" id="ville" name="ville_col" required>
                            <option value disabled selected  hidden>Gouvernorat</option>
                            <option value="Ariana">Ariana</option>
                            <option value="Béja">Béja</option>
                            <option value="Ben Arous">Ben Arous</option>
                            <option vlaue="Bizerte">Bizerte</option>
                            <option vlaue="Gabès">Gabès</option>
                            <option vlaue="Gafsa">Gafsa</option>
                            <option vlaue="Jendouba">Jendouba</option>
                            <option vlaue="Kairouan">Kairouan</option> 
                            <option vlaue="Kasserine">Kasserine</option>
                            <option vlaue="Kébili">Kébili</option>
                            <option vlaue="Mahdia">Mahdia</option>
                            <option vlaue="la Manouba">La Manouba</option>
                            <option vlaue="Kef">Le Kef</option>
                            <option vlaue="Médenine">Médenine</option>
                            <option vlaue="Monastir">Monastir</option>
                            <option vlaue="Nabeul">Nabeul</option>
                            <option vlaue="Sfax">Sfax</option>
                            <option vlaue="Sidi Bouzid">Sidi Bouzid</option>
                            <option vlaue="Siliana">Siliana</option>
                            <option vlaue="Sousse">Sousse</option>
                            <option vlaue="Tataouine">Tataouine</option>
                            <option vlaue="Tozeur">Tozeur</option>
                            <option vlaue="Tunis">Tunis</option>
                            <option vlaue="Zaghouan">Zaghouan</option> 
                    </select>
                </div>
                <div class="dropdown">
                <label for="type">type</label>
                    <select class="selector full-width" name="type_col" required>
                        <option value selected disabled  hidden>Type</option>
                        <option value="appartement">Appartement</option>
                        <option value="maison">Maison</option>
                        <option value="studio">Studio</option>
                    </select>
                </div>
                <div class="dropdown">
                <label for="type">type</label>
                    <select class="selector full-width" name="type_col" required>
                        <option value selected disabled hidden>Type</option>
                        <option value="appartement">Appartement</option>
                        <option value="maison">Maison</option>
                        <option value="studio">Studio</option>
                    </select>
                </div>
            </div>
            <div class="form-group column-3 no-column-bottom-margin">
                <div class="dropdown">
                    <label for="ville">Gouvernorat</label>
                    <select class="ville selector full-width" id="ville" name="ville_col" required>
                            <option value disabled selected hidden>Gouvernorat</option>
                            <option value="Ariana">Ariana</option>
                            <option value="Béja">Béja</option>
                            <option value="Ben Arous">Ben Arous</option>
                            <option vlaue="Bizerte">Bizerte</option>
                            <option vlaue="Gabès">Gabès</option>
                            <option vlaue="Gafsa">Gafsa</option>
                            <option vlaue="Jendouba">Jendouba</option>
                            <option vlaue="Kairouan">Kairouan</option> 
                            <option vlaue="Kasserine">Kasserine</option>
                            <option vlaue="Kébili">Kébili</option>
                            <option vlaue="Mahdia">Mahdia</option>
                            <option vlaue="la Manouba">La Manouba</option>
                            <option vlaue="Kef">Le Kef</option>
                            <option vlaue="Médenine">Médenine</option>
                            <option vlaue="Monastir">Monastir</option>
                            <option vlaue="Nabeul">Nabeul</option>
                            <option vlaue="Sfax">Sfax</option>
                            <option vlaue="Sidi Bouzid">Sidi Bouzid</option>
                            <option vlaue="Siliana">Siliana</option>
                            <option vlaue="Sousse">Sousse</option>
                            <option vlaue="Tataouine">Tataouine</option>
                            <option vlaue="Tozeur">Tozeur</option>
                            <option vlaue="Tunis">Tunis</option>
                            <option vlaue="Zaghouan">Zaghouan</option> 
                    </select>
                </div>
                <div class='form-group'>
                <label for="filter_price">Filtre de prix</label>
                    <div class='slider-label -thumb'>
                        <span class='center -price'>0</span>
                    </div>
                    <div class='form-slider -price' data-js-form-slider='true'>
                        <input class='field' max='600' min='50' type='range' value='200'>
                    <span class='fill'></span>
                    </div>
                    <div class='slider-label'>
                        <span class='left -price'>50</span>
                        <span class='right -price'>600</span>
                    </div>
                </div>
                <div class="form-group" style="text-align:right;">
                    <button type="submit" class="btn_add_prop">RECHERCHER</button>
                </div>
            </div>        
        </div>
    </form>
    <div class="row blog-posts">
        @foreach($colocataires as $colocataire)
            <div class="col-sms-6 col-sm-6 col-md-3">
                <article class="post post-grid">
                    <div class="post-image">
                        <div class="place">
                            {{$colocataire->budget}}<sub> TND</sub>
                        </div>
                        <div class="image">
                            <img src="/uploads/avatars/{{$colocataire->photo}}" alt="">
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-date"><span><i class="fa fa-location-arrow" aria-hidden="true"></i> {{$colocataire->country}}</span></div>
                        <h4 class="entry-title"><span class="name_user_pub">{{$colocataire->nom}}</span>, {{$colocataire->age}}</h4>
                        <div class="post-meta">
                            <span class="entry-author fn">
                                <i class="fa fa-briefcase" aria-hidden="true"></i> {{$colocataire->userType}}
                            </span>
                            <span class="post-comment">
                                <i class="fa fa-users" aria-hidden="true"></i> {{$colocataire->sitation}}
                            </span>
                        </div>
                        <p>{{$colocataire->description}}</p>
                        <div class="post-action">
                            <a href="/colocataire/search/{{$colocataire->id}}" class="link_tk_btn">Plus</a>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
    {{$colocataires->links()}}
</div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('temp/js/jquery.noconflict.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
@endsection 