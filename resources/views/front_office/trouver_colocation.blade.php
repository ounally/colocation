@extends('front_office/layouts.app')
@section('title')
| Ajouter une annonce
@endsection
@section('css')
@endsection
@section('content')
<div class="page-title-container">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title">Trouver une colocation</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="{{route('home')}}">Accueil</a></li>
        <li class="active">trouver une colocation</li>
    </ul>
</div>
<div class="container">
    <form method="POST" action="{{ route('trouver_colocation') }}" enctype="multipart/form-data" class="seach_colocation" id="seach_colocation">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h4>Commencez votre recherche</h4>
        <div class="col-sm-12 box info_generale" id="box_border">
            <div class="form-group column-2 no-column-bottom-margin">
                <div class="form-group">
                    <label for="titre">Votre bugdet (en TND)* <sub>min 50 DNT / max 600 TND</sub></label>
                    <input class="input-text full-width" id="price" type="number" name="budget" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse*</label>
                    <input class="input-text full-width" id="autocomplete" type="text" name="adresse_search" placeholder="Cité la Gazelle, Ariana" required>
                </div>
            </div>
            <div class="form-group column-3 no-column-bottom-margin">
                <div class="dropdown">
                    <label for="type">Rayon de recherche</label>
                    <select class="selector full-width" name="rayon" required>
                        <option selected value="1">1 Km</option>
                        <option value="2">2 Km</option>
                        <option value="3">3 Km</option>
                        <option value="4">4 Km</option>
                        <option value="5">5 Km</option>
                        <option value="6">6 Km</option>
                    </select>   
                </div>
                <div class="dropdown">
                    <label for="type">Sitation/Profession</label>
                    <select class="selector full-width" name="typeUser" required>
                        <option value selected disabled hidden>Sitation/Profession</option>
                        <option value="Étudiant">Étudiant</option>
                        <option value="Salarié">Salarié</option>
                        <option value="Retraité">Retraité</option>
                        <option value="autre">Autre</option>
                    </select>   
                </div>
                <div class="dropdown">
                    <label for="type">Je suis/Nous sommes</label>
                    <select class="selector full-width" name="sitation" required>
                        <option value selected disabled hidden>Je suis/Nous sommes</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Famille">Famille</option>
                        <option value="Groupe">Groupe</option>
                    </select>   
                </div>
            </div>
            <div class="form-group">
                <label for="titre">Description <sub>max 1000 caractères</sub></label>
                <textarea rows="6" class="input-text full-width" placeholder="Description" name="description_trv"></textarea>
            </div>
            <div class="form-group" style="text-align:right;">
                <button type="submit" class="btn_add_prop">publier votre recherche</button>
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