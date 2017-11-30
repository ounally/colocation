@extends('front_office/layouts.app')
@section('content')
    <div id="cover_index">
        <div class="bg-cover"> 
            <div class="container" id="content_top_page">
                <div class="top_cover">
                    <a href="{{route('home')}}" id="logo_cover">
                        <img src="{{asset('images/home-sketch.png')}}">
                    </a>
                    <h1>Trouver une colocation</h1>
                    <h4>et les personnes avec qui la partager</h4>
                </div>
                <div class="buttom_cover">
                    
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group dropdown">
                                <select class="selector full-width" required>
                                    <option selected hidden>Type</option>
                                    <option value="appartement">Appartement</option>
                                    <option value="maison">Maison</option>
                                    <option value="studio">Studio</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            @include('front_office/layouts.ville')
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            <button type="submit" class="btn_tlink_full">Rechercher</button>
                        </div>
                </div>
            </div>
            <div class='icon-scroll'><a href="#section2"></a></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="section2">
                <div class="heading-box">
                    <h2 class="box-title">Consectetur adipisicing elit sed</h2>
                    <p class="desc-lg">consectetur adipisicing elit sed do eiusmod consectetur</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box style-boxed-4 animated box" data-animation-type="fadeInUp" data-animation-delay="0">
                        <div class="icon-container">
                            <i class="fa fa-info-circle"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Premium Quality</h4>
                            <p>Class aptent taciti sociosqu tora torquent conubia nostreptos himenaeos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box style-boxed-4 animated box" data-animation-type="fadeInUp" data-animation-delay="0">
                        <div class="icon-container">
                            <i class="fa fa-user-circle-o"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Premium Quality</h4>
                            <p>Class aptent taciti sociosqu tora torquent conubia nostreptos himenaeos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box style-boxed-4 animated box" data-animation-type="fadeInUp" data-animation-delay="0">
                        <div class="icon-container">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Premium Quality</h4>
                            <p>Class aptent taciti sociosqu tora torquent conubia nostreptos himenaeos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box style-boxed-4 animated box" data-animation-type="fadeInUp" data-animation-delay="0">
                        <div class="icon-container">
                            <i class="fa fa-commenting"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Premium Quality</h4>
                            <p>Class aptent taciti sociosqu tora torquent conubia nostreptos himenaeos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
            <div id="section3" class="parallax parallax-image1" data-stellar-background-ratio="0.1">
                <div class="container">
                    <div class="row">
                    <div class="heading-box">
                        <h2 class="box-title">Consectetur adipisicing elit sed</h2>
                        <p class="desc-lg">4,633 colocataires recherchant une colocation</p>
                    </div>
                        <div class="row blog-posts">
                            @foreach($users_colocataires as $users_colocataire)
                                <div class="col-sms-6 col-sm-6 col-md-3">
                                    <article class="post post-grid">
                                        <div class="post-image">
                                        <div class="place">
                                            {{$users_colocataire->budget}}<sub> TND</sub>
                                        </div>
                                            <div class="image">
                                                <img src="/uploads/avatars/{{$users_colocataire->photo}}" alt="">
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-date"><span><i class="fa fa-location-arrow" aria-hidden="true"></i> {{$users_colocataire->country}}</span></div>
                                                <h4 class="entry-title"><span class="name_user_pub">{{$users_colocataire->nom}}</span>, {{$users_colocataire->age}}</h4>
                                            <div class="post-meta">
                                                <span class="entry-author fn">
                                                    <i class="fa fa-briefcase" aria-hidden="true"></i> {{$users_colocataire->userType}}
                                                </span>
                                                <span class="post-comment">
                                                    <i class="fa fa-users" aria-hidden="true"></i> {{$users_colocataire->sitation}}
                                                </span>
                                            </div>
                                            <p>{{$users_colocataire->description}}</p>
                                            <div class="post-action">
                                                <a href="/colocataire/search/{{$users_colocataire->id}}" class="link_tk_btn">Plus</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        <a href="/listing_search" class="btn-bg-wt">VOIR PLUS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cintainer">
    <div class="row">
    <div class="image-banner banner-image1">
        <div class="banner-color1">
            <div class="section container">
                <h1>Perfect for Mobile Devices</h1>
            </div>
            <div class="image-container fixed style-abs position-right">
                <img src="{{asset('temp/images/pages/homepage/6/iphone.png')}}" alt="">
            </div>
            <div class="container">
                <div class="col-sm-7 col-md-6">
                    <div class="icon-box style-side-6 block animated" data-animation-type="fadeInLeft" data-animation-delay="0">
                        <div class="icon-container">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="box-title"><a href="#">Retina Ready Graphics</a></h4>
                            <p>Quisque tellus risus, adipiscing in viverra et, bibendum eu urna. Vestibulum fermentum risus at magna. Morbi tincidunt libero dolor, at scelerisque odio lacinia aliquet. Proin pellentesque magna at est laoreet mollis. Nullam a gravida eros, eget commodo velit.</p>
                        </div>
                    </div>
                    <div class="icon-box style-side-6 block animated" data-animation-type="fadeInLeft" data-animation-delay="0">
                        <div class="icon-container">
                            <i class="fa fa-tablet"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="box-title"><a href="#">Multi-Purpose Layout</a></h4>
                            <p>Quisque tellus risus, adipiscing in viverra et, bibendum eu urna. Vestibulum fermentum risus at magna. Morbi tincidunt libero dolor, at scelerisque odio lacinia aliquet. Proin pellentesque magna at est laoreet mollis. Nullam a gravida eros, eget commodo velit.</p>
                        </div>
                    </div>
                    <div class="icon-box style-side-6 block animated" data-animation-type="fadeInLeft" data-animation-delay="0">
                        <div class="icon-container">
                            <i class="fa fa-umbrella"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="box-title"><a href="#">Awesome Support</a></h4>
                            <p>Quisque tellus risus, adipiscing in viverra et, bibendum eu urna. Vestibulum fermentum risus at magna. Morbi tincidunt libero dolor, at scelerisque odio lacinia aliquet. Proin pellentesque magna at est laoreet mollis. Nullam a gravida eros, eget commodo velit.</p>
                        </div>
                    </div>
                    <div class="icon-box style-side-6 block animated" data-animation-type="fadeInLeft" data-animation-delay="0">
                        <div class="icon-container">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="box-title"><a href="#">Weekly Updates</a></h4>
                            <p>Quisque tellus risus, adipiscing in viverra et, bibendum eu urna. Vestibulum fermentum risus at magna. Morbi tincidunt libero dolor, at scelerisque odio lacinia aliquet. Proin pellentesque magna at est laoreet mollis. Nullam a gravida eros, eget commodo velit.</p>
                        </div>
                    </div>
                    <div class="block">
                        <a href="{{route('register')}}" class="btn_device">Inscription</a>
                        <a href="{{route('add_colocation')}}" class="btn_device">Publier une annonce</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="latest_3">
        <div class="heading-box">
            <h2 class="box-title">Consectetur adipisicing elit sed</h2>
            <p class="desc-lg">consectetur adipisicing elit sed do eiusmod consectetur</p>
        </div>
        <div class="iso-container iso-col-3 style-masonry has-column-width blog-posts">
            @foreach ($latests as $latest)
            <a href="/colocation/pub/{{$latest->id}}" id="hover_block">
                <div class="iso-item">
                    <article class="post post-masonry">
                        <div class="post-image">
                            <div class="image">
                                <img alt="" src="uploads/locals/{{$latest->image}}">
                                <div class="gouvernorat_col">
                                    <span>{{$latest->gouvernorat}}</span>
                                </div>
                                <div class="price">
                                    <span>{{$latest->prix}}</span><span class="currency">TND</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-author">
                                <img alt="" src="/uploads/avatars/{{$latest->photo}}">
                            </div>
                            <div class="post-meta">
                                <div class="info_user_pub">
                                    <span class="name_user_pub capitalize">{{$latest->nom.' '.$latest->prenom}}</span>
                                    <span class="old_user_pub">{{$latest->age}} ans</span>
                                    <span class="pro_user_pub capitalize">{{$latest->profession}}</span> 
                                </div>
                                <span class="local"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$latest->adresse}}</span>
                            </div>
                            <h3 class="entry-title">{{$latest->titre}}</h3>
                            <p>{{$latest->description}}</p>
                        </div>
                        <div class="post-action">
                            @if($latest->genre_prefer == 'male')
                                <span><img class="prop_female" src="{{asset('images/icons/female_off.png')}}" alt="Femelle"></span>
                                <span><img class="prop_male" src="{{asset('images/icons/male_on.png')}}" alt="Mâle"></span>
                            @elseif($latest->genre_prefer == 'femelle')
                                    <span><img class="prop_female" src="{{asset('images/icons/female_on.png')}}" alt="Femelle"></span>
                                    <span><img class="prop_male" src="{{asset('images/icons/male_off.png')}}" alt="Mâle"></span>
                            @else
                                    <span><img class="prop_female" src="{{asset('images/icons/female_off.png')}}" alt="Femelle"></span>
                                    <span><img class="prop_male" src="{{asset('images/icons/male_off.png')}}" alt="Mâle"></span>
                            @endif
                            @if($latest->climatiseur == 1)
                                <span><img class="prop_clim" src="{{asset('images/icons/clim_on.png')}}" alt="Climatisation"></span>
                            @else
                                <span><img class="prop_clim" src="{{asset('images/icons/clim_off.png')}}" alt="Climatisation"></span>
                            @endif
                            @if($latest->chaufageCentral == 1)
                                <span><img class="prop_rad" src="{{asset('images/icons/radiator_on.png')}}" alt="Chauffage central"></span>
                            @else
                                <span><img class="prop_rad" src="{{asset('images/icons/radiator_off.png')}}" alt="Chauffage central"></span>
                            @endif
                            @if($latest->type_chambre == 'individuelle')
                                <span><img class="prop_indiv" src="{{asset('images/icons/indiv_on.png')}}" alt="Individuelle"></span>
                            @else
                                <span><img class="prop_indiv" src="{{asset('images/icons/indiv_off.png')}}" alt="Individuelle"></span>
                            @endif
                            @if($latest->wifi == 1)
                                <span><img class="prop_wifi" src="{{asset('images/icons/wifi_on.png')}}" alt="Wifi"></span>
                            @else
                                <span><img class="prop_wifi" src="{{asset('images/icons/wifi_off.png')}}" alt="Wifi"></span>
                            @endif    
                            @if($latest->tabac == 'refuser')
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
        <a href="/listing" class="link_tk_btn cntr">VOIR PLUS</a>
    </div>   
@endsection 
@section('js')

@endsection