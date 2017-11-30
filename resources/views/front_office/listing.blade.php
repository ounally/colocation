@extends('front_office/layouts.app')
@section('title')
| listing
@endsection
@section('css')
@endsection
@section('content')
<div class="page-title-container">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title">{{$nbr_room}} colocations disponibles</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="{{route('home')}}">Accueil</a></li>
        <li class="active">Liste des colocations</li>
    </ul>
</div>
<div class="container">
    <form method="POST" action="{{ route('listing') }}" enctype="multipart/form-data" class="form_filter_search" id="form_filter_search">
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
        <div class="iso-container iso-col-3 style-masonry has-column-width blog-posts">
            @foreach ($locals as $local)
                <a href="/colocation/pub/{{$local->id}}" id="hover_block">
                    <div class="iso-item">
                        <article class="post post-masonry">
                            <div class="post-image">
                                <div class="image">
                                    <img alt="" src="uploads/locals/{{$local->image}}">
                                    <div class="gouvernorat_col">
                                        <span>{{$local->gouvernorat}}</span>
                                    </div>
                                    <div class="price">
                                        <span>{{$local->prix}}</span><span class="currency">TND</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="post-author">
                                    <img alt="" src="/uploads/avatars/{{$local->photo}}">
                                </div>
                                <div class="post-meta">
                                    <div class="info_user_pub">
                                        <span class="name_user_pub">{{$local->nom.' '.$local->prenom}}</span>
                                        <span class="old_user_pub">{{$local->age}} ans</span>
                                        <span class="pro_user_pub">{{$local->profession}}</span>
                                    </div>
                                    <span class="local"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$local->adresse}}</span>
                                </div>
                                <h3 class="entry-title">{{$local->titre}}</h3>
                                <p>{{$local->description}}</p>
                            </div>
                            <div class="post-action">
                                @if($local->genre_prefer == 'male')
                                <span><img class="prop_female" src="{{asset('images/icons/female_off.png')}}" alt="Femelle"></span>
                                <span><img class="prop_male" src="{{asset('images/icons/male_on.png')}}" alt="Mâle"></span>
                                @elseif($local->genre_prefer == 'femelle')
                                    <span><img class="prop_female" src="{{asset('images/icons/female_on.png')}}" alt="Femelle"></span>
                                    <span><img class="prop_male" src="{{asset('images/icons/male_off.png')}}" alt="Mâle"></span>
                                @else
                                    <span><img class="prop_female" src="{{asset('images/icons/female_off.png')}}" alt="Femelle"></span>
                                    <span><img class="prop_male" src="{{asset('images/icons/male_off.png')}}" alt="Mâle"></span>
                                @endif
                                @if($local->climatiseur == 1)
                                    <span><img class="prop_clim" src="{{asset('images/icons/clim_on.png')}}" alt="Climatisation"></span>
                                @else
                                    <span><img class="prop_clim" src="{{asset('images/icons/clim_off.png')}}" alt="Climatisation"></span>
                                @endif
                                @if($local->chaufageCentral == 1)
                                    <span><img class="prop_rad" src="{{asset('images/icons/radiator_on.png')}}" alt="Chauffage central"></span>
                                @else
                                    <span><img class="prop_rad" src="{{asset('images/icons/radiator_off.png')}}" alt="Chauffage central"></span>
                                @endif
                                @if($local->type_chambre == 'individuelle')
                                    <span><img class="prop_indiv" src="{{asset('images/icons/indiv_on.png')}}" alt="Individuelle"></span>
                                @else
                                    <span><img class="prop_indiv" src="{{asset('images/icons/indiv_off.png')}}" alt="Individuelle"></span>
                                @endif
                                @if($local->wifi == 1)
                                    <span><img class="prop_wifi" src="{{asset('images/icons/wifi_on.png')}}" alt="Wifi"></span>
                                @else
                                    <span><img class="prop_wifi" src="{{asset('images/icons/wifi_off.png')}}" alt="Wifi"></span>
                                @endif    
                                @if($local->tabac == 'refuser')
                                    <span><img class="prop_smok" src="{{asset('images/icons/smoking_on.png')}}" alt="Tabac"></span>
                                @else
                                    <span><img class="prop_smok" src="{{asset('images/icons/smoking_off.png')}}" alt="Tabac"></span>
                                @endif  
                            </div>
                        </article>
                    </div>
                </a>
            @endforeach
        </div>
    {{$locals->links()}}
</div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('temp/js/jquery.noconflict.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
@endsection 