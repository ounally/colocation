@extends('front_office/layouts.app')
@section('title')

@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/popup.css')}}">
@endsection
@section('content')
<div class="height_20"></div>
<div class="container">
    @foreach($det_col as $det)
        <div class="col-lg-8 col-xs-12 div_margin_bottom">
            <div id="box_border">
                <span class="adr-local_detail"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$det->adresse}}</span>
                <div class="img-local_detail">
                    <p id="price">{{$det->prix}} <sub>TND  par mois</sub></p>
                    <p id="type">
                    @if($det->type_chambre == 'partagee')
                    Chambre partagée
                    @else
                    Chambre individuelle
                    @endif
                    </p>
                    <img src="/uploads/locals/{{$det->image}}">
                    <span class="date_pub">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        Publiée le: {{ Carbon\Carbon::parse($det->created_at)->format('d/m/Y') }}
                        @if (!empty ( $det->disponibilite ))
                        {{'| Disponible le: '.Carbon\Carbon::parse($det->disponibilite)->format('d/m/Y') }}
                        @endif
                    </span>
                </div>
                <div class="height_40"></div>
                <div class="descript_of_local_detail">
                    <i class="fa fa-check-circle-o i_detail_of_local" aria-hidden="true"></i><span class="title_block">Description</span>
                    <p class="line_height">{{$det->description}}</p>
                </div>
                <div class="height_30"></div>
                <div class="option_of_log">
                    <i class="fa fa-check-circle-o i_detail_of_local" aria-hidden="true"></i><span class="title_block">A propos de la colocation</span>
                    <div class="col-md-12 block_propos">
                        <div class="col-md-6 col-sms-6 col-xs-12">
                            <span class="first_puce">Gouvernorat: </span>
                            <span class="content">{{$det->gouvernorat}}</span><br>
                            <span class="first_puce">Type: </span>
                            <span class="content">{{$det->type_proporiete}}</span><br>
                            <span class="first_puce">Surface: </span>
                            <span class="content">{{$det->surface.' m²'}}</span><br>
                            <span class="first_puce">Chambres: </span>
                            <span class="content">{{$det->nbr_chambre}}</span>
                        </div>
                        <div class="col-md-6 col-sms-6 col-xs-12">
                            <span class="first_puce">Places: </span>
                            <span class="content">{{$det->nbr_places}}</span><br>
                            <span class="first_puce">Animaux: </span>
                            <span class="content">{{$det->animaux}}</span><br>
                            <span class="first_puce">Tabac: </span>
                            <span class="content">{{$det->tabac}}</span><br>
                            <span class="first_puce">Meublée: </span>
                            <span class="content">
                                @if($det->meublee == 'meuble' )
                                Oui
                                @else
                                Non
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <div class="height_30"></div>
                <div class="option_of_colocataires">
                    <i class="fa fa-check-circle-o i_detail_of_local" aria-hidden="true"></i><span class="title_block">Colocataires recherchés</span>
                    <div class="col-md-12 block_propos">
                        <div class="col-md-6 col-sms-6 col-xs-12">
                            <span class="first_puce">Genre préféré: </span>
                            <span class="content">
                                @if($det->genre_prefer == 'male') Homme
                                @elseif($det->genre_prefer == 'femelle') Femme
                                @else Pas de préférence
                                @endif
                            </span><br>
                            <span class="first_puce">Âge minimum: </span>
                            <span class="content">{{$det->age_min.' ans'}}</span><br>
                        </div>
                        <div class="col-md-6 col-sms-6 col-xs-12">
                            <span class="first_puce">Profession préféré: </span>
                            <span class="content">
                                @if($det->profession_prefer == 'etudiant') Étudiant
                                @elseif($det->profession_prefer == 'professionnel') Professionnel
                                @else Pas de préférence
                                @endif
                            </span><br>
                            <span class="first_puce">Âge maximum: </span>
                            <span class="content">{{$det->age_max.' ans'}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="height_30"></div>
            <div id="box_border">
                <div class="equipement_of_col">
                    <i class="fa fa-check-circle-o i_detail_of_local" aria-hidden="true"></i><span class="title_block">Équipement</span>
                    <div class="col-md-12 col_12_equip">
                        <div class="col-md-6 col-sms-6 col-xs-12">
                            <div>
                                @if($det->jardin == 1)
                                    <img src="/images/equipements/jardin.png" class="taille_20"> <span>Jardin<span>
                                @else
                                    <img src="/images/equipements/jardin_off.png" class="taille_20"> <span class="line-through">Jardin<span>
                                @endif 
                            </div>
                            <div>
                            @if($det->parking == 1)
                                <img src="/images/equipements/parking.png" class="taille_20"> <span>Parking<span>
                            @else
                                <img src="/images/equipements/parking_off.png" class="taille_20"> <span class="line-through">Parking<span>
                            @endif
                            </div>
                            <div>
                            @if($det->wifi == 1)
                                <img src="/images/equipements/wifi.png" class="taille_20"> <span>Wifi<span>
                            @else
                                <img src="/images/equipements/wifi_off.png" class="taille_20"> <span class="line-through">Wifi<span>
                            @endif
                            </div>
                            <div>
                            @if($det->climatiseur == 1)
                                <img src="/images/equipements/clim.png" class="taille_20"> <span>Climatisation<span>
                            @else
                                <img src="/images/equipements/clim_off.png" class="taille_20"> <span class="line-through">Climatisation<span>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-sms-6 col-xs-12">
                            <div>
                                @if($det->balcon == 1)
                                    <img src="/images/equipements/balcony.png" class="taille_20"> <span>Balcon/Terrasse<span>
                                @else
                                    <img src="/images/equipements/balcony_off.png" class="taille_20"> <span class="line-through">Balcon/Terrasse<span>
                                @endif 
                            </div>
                            <div>
                                @if($det->ascenseur == 1)
                                    <img src="/images/equipements/ascenseur.png" class="taille_20"> <span>Ascenseur<span>
                                @else
                                    <img src="/images/equipements/ascenseur_off.png" class="taille_20"> <span class="line-through">Ascenseur<span>
                                @endif 
                            </div>
                            <div>
                                @if($det->balcon == 1)
                                    <img src="/images/equipements/gas.png" class="taille_20"> <span>Gaz de ville<span>
                                @else
                                    <img src="/images/equipements/gas_off.png" class="taille_20"> <span class="line-through">Gaz de ville<span>
                                @endif 
                            </div>
                            <div>
                                @if($det->chaufageCentral == 1)
                                    <img src="/images/equipements/radiator.png" class="taille_20"> <span>Chauffage central<span>
                                @else
                                    <img src="/images/equipements/radiator_off.png" class="taille_20"> <span class="line-through">Chauffage central<span>
                                @endif 
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="col-lg-4 col-xs-12">
            <div id="box_border">
                <div class="detail_local_user col-md-5 col-xs-12">
                    <img src="/uploads/avatars/{{ $det->photo }}" alt="">
                </div> 
                <div class="verif_data col-md-7 col-xs-12">
                    <div class="detail_user_b">
                        <span class="name capitalize">{{ $det->nom.' '.$det->prenom }}</span> <span>{{'. '.$det->age.' ans'}}</span><br>
                        <span class="profession">{{ $det->profession}}</span>
                    </div>
                    <i class="fa fa-check-circle" aria-hidden="true"></i> Téléphone vérifié<br>
                    <i class="fa fa-check-circle" aria-hidden="true"></i> E-mail vérifié<br>
                    <i class="fa fa-times-circle" aria-hidden="true"></i> Facebook non vérifié
                </div> 
                <div class="map_detail_col">
                    <iframe width="100%" height="300" frameborder="0" style="border:0" src={{$true_adr.'&z=15'}}></iframe>
                </div><br>
                <div class="contact_user_of_col">
                    <h4>Contacter <span class="capitalize">{{ $det->nom }}</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore</p>
                    @if (!Auth::guest())
                    <a href="#0" rel="popup_name" class="cd-popup-trigger" id="btn_contact">Afficher le numéro</a>
                    <a href="mailto:{{$det->email}}" id="btn_contact">Envoyer un email</a>
                        <!-- POPUP info-->
                            <div class="cd-popup" role="alert">
                                <div class="cd-popup-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    <div class="dta-for_usr">
                                        <p><i class="fa fa fa-phone"></i>{{ $det->telephone }}</p>
                                        <p><i class="fa fa-envelope"></i>{{ $det->email }}</p>
                                    </div>
                                    <a href="#0" class="cd-popup-close img-replace"></a>
                                </div> <!-- cd-popup-container -->
                            </div> <!-- cd-popup -->
                        <!-- END POPUP info-->
                    @endif  
                    @if (Auth::guest())
                        <a href="{{route('login')}}" class="link_to_log">Vous devez vous connecter pour contacter <span class="capitalize">{{ $det->nom }}</span></a>
                    @endif 
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
@section('js')
<script src="{{asset('js/popup.js')}}"></script>
@endsection 