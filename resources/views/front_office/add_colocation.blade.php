@extends('front_office/layouts.app')
@section('title')
| Ajouter une annonce
@endsection
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
<div class="page-title-container">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title">Publier une colocation</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="{{route('home')}}">Accueil</a></li>
        <li class="active">publier une colocation</li>
    </ul>
</div>
<div class="container">
    <form method="POST" action="{{ route('add_colocation') }}" enctype="multipart/form-data" class="add_colocation" id="add_colocation">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h4>Informations générale</h4>
        <div class="col-sm-12 box info_generale" id="box_border">
            <div class="form-group">
                <label for="titre">Titre*</label>
                <input class="input-text full-width" id="titre" type="text" name="titre_col" placeholder="Appartement S+2 à louer" autofocus required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse*</label>
                <input class="input-text full-width" id="autocomplete" type="text" name="adresse_col" placeholder="Cité la Gazelle, Ariana" required>
            </div>
            <div class="form-group column-2 no-column-bottom-margin">
                <div class="dropdown">
                    <label for="ville">Gouvernorat*</label>
                    <select class="ville selector full-width" id="ville" name="ville_col" required>
                        <option value disabled selected>Gouvernorat</option>
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
                    <label for="type">type*</label>
                    <select class="selector full-width" name="type_col" required>
                        <option value selected disabled>Type</option>
                        <option value="appartement">Appartement</option>
                        <option value="maison">Maison</option>
                        <option value="studio">Studio</option>
                    </select>
                </div>
            </div>
            <div class="form-group column-2 no-column-bottom-margin">
                <div class="form-group">
                    <label for="titre">Prix par mois (en TND)* <sub>min 50 DNT / max 600 TND</sub></label>
                    <input class="input-text full-width" id="price" type="number" name="price_col" >
                </div>
                <div class="form-group">
                    <label for="titre">Surface (en m²)*</label>
                    <input class="input-text full-width" id="surface" type="number" name="surface_col" placeholder="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="titre">Description <sub>max 1000 caractères</sub></label>
                <textarea rows="6" class="input-text full-width" placeholder="Description" name="description_col"></textarea>
            </div>
        </div>
        <h4>À propos de la propriété</h4>
        <div class="col-sm-12 box propriete" id="box_border"> 
            <div class="form-group column-3 no-column-bottom-margin">
                <div class="dropdown">
                    <label for="nbr_room">Nombre de chambres</label>
                    <select class="chambre selector full-width" name="nbr_rooms" id="nbr_room" required>
                        <option value="1 Chambre" selected>1 Chambre</option>
                        <option value="2 Chambres">2 Chambres</option>
                        <option value="3 Chambres">3 Chambres</option>
                        <option value="4 Chambres">4 Chambres</option>
                        <option value="5 Chambres">5 Chambres</option>
                        <option value="+5 chambres">+5 Chambres</option>
                    </select>
                </div>
                <div class="dropdown">
                    <label for="nbr_room">Nombre de places</label>
                    <select class="chambre selector full-width" name="nbr_places" id="nbr_room" required>
                        <option value="1 place" selected>1 place</option>
                        <option value="2 places">2 places</option>
                        <option value="3 places">3 places</option>
                        <option value="4 places">4 places</option>
                        <option value="5 places">5 places</option>
                        <option value="+5 places">+5 places</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="meublee">Meublé ou non meublé</label>
                    <div class="radio-tile-group" id="meublee">
                        <div class="input-container col-sm-6">
                            <input id="walk" class="radio-button" value="meuble" type="radio" name="meuble_col"/>
                            <div class="radio-tile">
                                <label for="walk" class="radio-tile-label">Meublé</label>
                            </div>
                        </div>
                        <div class="input-container col-sm-6">
                            <input id="fly" class="radio-button" value="non meuble" type="radio" name="meuble_col" checked/>
                            <div class="radio-tile">
                                <label for="fly" class="radio-tile-label">Non meublé</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group column-2 no-column-bottom-margin">
                <div class="form-group">
                <label for="meublee">Animaux</label>
                    <div class="radio-tile-group" id="meublee">
                        <div class="input-container col-sm-6">
                            <input id="walk" class="radio-button" value="accepter" type="radio" name="animaux_col" checked/>
                            <div class="radio-tile">
                                <label for="walk" class="radio-tile-label">Accepter</label>
                            </div>
                        </div>
                        <div class="input-container col-sm-6">
                            <input id="fly" class="radio-button" value="refuser" type="radio" name="animaux_col" />
                            <div class="radio-tile">
                                <label for="fly" class="radio-tile-label">Réfuser</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                <label for="meublee">Tabac</label>
                    <div class="radio-tile-group" id="meublee">
                        <div class="input-container col-sm-6">
                            <input id="walk" class="radio-button" value="accepter" type="radio" name="tabac_col" checked/>
                            <div class="radio-tile">
                                <label for="walk" class="radio-tile-label">Accepter</label>
                            </div>
                        </div>
                        <div class="input-container col-sm-6">
                            <input id="fly" class="radio-button" value="refuser" type="radio" name="tabac_col" />
                            <div class="radio-tile">
                                <label for="fly" class="radio-tile-label">Réfuser</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
            <label for="meublee">Type de la propriété</label> 
                <div class="radio-tile-group" id="meublee">
                    <div class="input-container col-sm-6">
                        <input id="walk" class="radio-button" value="individuelle" type="radio" name="indivi_col" checked/>
                        <div class="radio-tile">
                            <label for="walk" class="radio-tile-label">Individuelle</label>
                        </div>
                    </div>
                    <div class="input-container col-sm-6">
                        <input id="fly" class="radio-button" value="partagee" type="radio" name="indivi_col" />
                        <div class="radio-tile">
                            <label for="fly" class="radio-tile-label">Partagée</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4>Équipements</h4>
        <div class="col-sm-12 box services_col" id="box_border"> 
        <label for="box_border">Sélectionner les services de la propriété</label><br>
            <div class="form-group column-4 no-column-bottom-margin">
                <div class="form-group">
                    <label class="btn-check">
                        <img src="{{asset('images/air-conditioner.png')}}" alt="..." class="img-check">
                        <span>Climatiseur</span>
                        <input type="checkbox" name="clim_col" id="item4" value="1" class="hidden" autocomplete="off">
                    </label>
                </div> 
                <div class="form-group">
                    <label class="btn-check">
                        <img src="{{asset('images/wifi.png')}}" alt="..." class="img-check">
                        <span>Wifi</span>
                        <input type="checkbox" name="wifi_col" id="item4" value="1" class="hidden" autocomplete="off">
                    </label>
                </div> 
                <div class="form-group">
                    <label class="btn-check">
                        <img src="{{asset('images/radiator.png')}}" alt="..." class="img-check">
                        <span>Chaufage central</span>
                        <input type="checkbox" name="radiator_col" id="item4" value="1" class="hidden" autocomplete="off">
                    </label>
                </div> 
                <div class="form-group">
                    <label class="btn-check">
                        <img src="{{asset('images/gas-pipe.png')}}" alt="..." class="img-check">
                        <span>Gaz de ville</span>
                        <input type="checkbox" name="gaz_col" id="item4" value="1" class="hidden" autocomplete="off">
                    </label>
                </div>    
            </div> 
            <div class="form-group column-4 no-column-bottom-margin">
                <div class="form-group">
                    <label class="btn-check">
                        <img src="{{asset('images/elevator.png')}}" alt="..." class="img-check">
                        <span>Ascenseur</span>
                        <input type="checkbox" name="ascenseur" id="item4" value="1" class="hidden" autocomplete="off">
                    </label>
                </div> 
                <div class="form-group">
                    <label class="btn-check">
                        <img src="{{asset('images/balcony.png')}}" alt="..." class="img-check">
                        <span>Balcon</span>
                        <input type="checkbox" name="balcon" id="item4" value="1" class="hidden" autocomplete="off">
                    </label>
                </div> 
                <div class="form-group">
                    <label class="btn-check">
                        <img src="{{asset('images/parking.png')}}" alt="..." class="img-check">
                        <span>Parking</span>
                        <input type="checkbox" name="parking" id="item4" value="1" class="hidden" autocomplete="off">
                    </label>
                </div> 
                <div class="form-group">
                    <label class="btn-check">
                        <img src="{{asset('images/jardin.png')}}" alt="..." class="img-check">
                        <span>Jardin</span>
                        <input type="checkbox" name="jardin" id="item4" value="1" class="hidden" autocomplete="off">
                    </label>
                </div>    
            </div>   
        </div>
        <h4>Colocataires préférés</h4>
        <div class="col-sm-12 box services_col" id="box_border"> 
            <div class="form-group column-2 no-column-bottom-margin">
                <div class="form-group">
                <label for="prof">Genre préféré de colocataire</label>
                    <div class="radio-tile-group" id="profession">
                        <div class="input-container col-sm-4">
                            <input id="etudiant" class="radio-button" value="male" type="radio" name="g-prefer"/>
                            <div class="radio-tile">
                                <label for="etudiant" class="radio-tile-label">Mâle</label>
                            </div>
                        </div>
                        <div class="input-container col-sm-4">
                            <input id="pro" class="radio-button" value="femelle" type="radio" name="g-prefer" />
                            <div class="radio-tile">
                                <label for="pro" class="radio-tile-label">Femelle</label>
                            </div>
                        </div>
                        <div class="input-container col-sm-4">
                            <input id="x" class="radio-button" value="Pas d'importance" type="radio" name="g-prefer" checked/>
                            <div class="radio-tile">
                                <label for="pasimprotance" class="radio-tile-label">Pas d'importance</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                <label for="prof">Profession préféré de colocataire</label>
                    <div class="radio-tile-group" id="profession">
                        <div class="input-container col-sm-4">
                            <input id="etudiant" class="radio-button" value="Étudiant" type="radio" name="profession"/>
                            <div class="radio-tile">
                                <label for="etudiant" class="radio-tile-label">Étudiant</label>
                            </div>
                        </div>
                        <div class="input-container col-sm-4">
                            <input id="pro" class="radio-button" value="Professionnel" type="radio" name="profession" />
                            <div class="radio-tile">
                                <label for="pro" class="radio-tile-label">Professionnel</label>
                            </div>
                        </div>
                        <div class="input-container col-sm-4">
                            <input id="fly" class="radio-button" value="Pas d'importance" type="radio" name="profession" checked/>
                            <div class="radio-tile">
                                <label for="pasimprotance" class="radio-tile-label">Pas d'importance</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group column-3 no-column-bottom-margin">
                <div class="form-group">
                    <div class="dropdown">
                        <label for="">Age minimum de colocataire</label>
                        <select class="selector full-width" name="min_age_col">
                            @for ($x = 18; $x < 100; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="dropdown">
                        <label for="">Age maximum de colocataire</label>
                        <select class="selector full-width" name="max_age_col">
                            @for ($x = 18; $x < 100; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Date de début de disponibilité</label>
                    <input type="text" name="despo_col" id="datepicker" class="input-text full-width date_dispo_local"/>
                </div>
            </div>
            <div class="form-group column-2 no-column-bottom-margin">
                <div class="form-group">
                    <label for="file" class="label-file">Téléchargez une image de votre propriété</label>
                    <input id="file" class="input-file" type="file" name="image_col" accept="image/*">
                </div> 
                <div class="form-group" style="text-align:right;">
                    <button type="submit" class="btn_add_prop">publier votre colocation</button>
                </div>
            </div>
        </div>
    </form>
</div> 
<script>
    function initAutocomplete() {
        var input_dep = document.getElementById('autocomplete');
        var searchBox_dep = new google.maps.places.SearchBox(input_dep);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input_dep);
    }
</script>
@endsection
@section('js')
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/validator_form.js')}}"></script>
@endsection 