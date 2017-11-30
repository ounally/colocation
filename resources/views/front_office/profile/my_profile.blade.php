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
                <h1 class="entry-title">{{Auth::user()->FullName()}}</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{route('home')}}">Accueil</a></li>
            <li class="active">Mon profil</li>
        </ul>
    </div>
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 prf_left">
                @include('front_office/profile/layouts.aside')
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 prf_right">

                <h4 class="text-default" role="alert">Informations générales</h4>
                <form method="POST" action="{{ route('myProfile', auth()->user()->id) }}" enctype="multipart/form-data" class="update_profile_info" id="update_profile_info">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="dropdown">
                        <label for="type">Sexe</label>
                            <select autofocus name="user_edit_sexe" id="sexe" class="selector full-width" value="{{Auth::user()->sexe}}">
                                <option value="{{Auth::user()->sexe}}" selected hidden>{{Auth::user()->sexe}}</option>
                                <option value="homme">homme</option>
                                <option value="femme">femme</option>
                            </select> 
                        </div>    
                    </div>
                    <div class="form-group column-2 no-column-bottom-margin">
                        <div class="form-group">
                            <label for="user">Nom</label>
                            <input class="input-text full-width" type="text" name="user_edit_name" id="name" value="{{Auth::user()->nom}}" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="user">Prénom</label>
                            <input class="input-text full-width" type="text" name="user_edit_prenom" id="prenom" value="{{Auth::user()->prenom}}" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="form-group column-2 no-column-bottom-margin">
                        <div class="form-group">
                            <label for="cin">CIN</label>
                            <input class="input-text full-width" type="text" name="user_edit_cin" id="cin" value="{{Auth::user()->cin}}" placeholder="CIN">
                        </div>
                        <div class="form-group">
                            <label for="tel">Téléphone</label>
                            <input class="input-text full-width" type="text" name="user_edit_tel" id="tel" value="{{Auth::user()->telephone}}" placeholder="Téléphone">
                        </div>
                    </div>
                    <div class="form-group column-2 no-column-bottom-margin">
                        <div class="form-group">
                            <div class="dropdown">
                                <label for="">Age</label>
                                <select class="selector full-width" name="user_edit_naissance">
                                    @for ($x = 18; $x < 100; $x++)
                                        <option 
                                        @if($x == Auth::user()->age) selected @endif
                                         value="{{$x}}">{{$x}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="adr">Votre profession</label>
                            <div class="dropdown">
                                <select class="selector full-width" name="user_edit_prof" required>
                                    <option selected hidden disabled>{{Auth::user()->profession}}</option>
                                    <option value="Étudiant">Étudiant</option>
                                    <option value="Salarié">Salarié</option>
                                    <option value="Retraité">Retraité</option>
                                    <option value="Autre">Autre</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                    <div class="form-group column-2 no-column-bottom-margin">
                        <div class="form-group">
                            <label for="adr">Adresse</label>
                            <input class="input-text full-width" type="text" name="user_edit_adr" id="adresse" value="{{Auth::user()->adresse}}" placeholder="Adresse">
                        </div>
                        <div class="form-group">
                            <label for="code">Code postal</label>
                            <input class="input-text full-width" type="text" name="user_edit_cpost" id="c_postal" value="{{Auth::user()->codepostal}}" placeholder="Code postal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <div class="dropdown">
                            <select class="ville selector full-width" id="ville" name="user_edit_ville" required>
                                <option value disabled selected>{{Auth::user()->ville}}</option>
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
                    </div>
                    <div class="form-group">
                        <label for="fb">Lien profil facebook</label>
                        <input class="input-text full-width" type="text" name="user_edit_facebook" id="idfb" value="{{Auth::user()->fbid}}" placeholder="https://www.facebook.com/Nom utilisateur">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="input-text full-width" rows="5" name="user_edit_bio" id="bio" placeholder="Bio...">{{Auth::user()->bio}}</textarea>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn_tlink btn-block" id="bnt_submit">Metrre à jour</button>
                    </div>
                </form>
            </div>
        </div><!--row-->
    </div><!--container-->  
    <script>
    
    </script> 
@endsection
@section('js')
<script src="{{asset('js/jquery.formatter.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/validator_form.js')}}"></script>
@endsection    