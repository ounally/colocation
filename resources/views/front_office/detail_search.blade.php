@extends('front_office/layouts.app')
@section('title')

@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/popup.css')}}">
@endsection
@section('content')
<div class="col-md-12" style="padding:0;border-bottom: 3px solid #336aa0;">
<div id="map" class="gmap3" style="height:375px;"></div>
</div>
<div class="adreesse_serach">
<i class="fa fa-map-marker" aria-hidden="true"></i> 
@foreach($searchs as $search)
<span class="locate_map">{{$search->adresse}}</span>
@endforeach
| <span>Rayon de recherche: {{$rayon.' Km'}}</span>
</div>
<div class="height_20"></div>
<div class="container">
@foreach($searchs as $search)
    <div class="col-lg-3 col-xs-12">
      <div class="top_search_avatar">
        <img src="/uploads/avatars/{{ $search->photo }}" alt="">
        <div class="detail_user_b bg_trensparent">
          <i class="fa fa-user"></i><p class="name">{{ $search->nom.' '.$search->prenom }}</p>, <span>{{ $search->age.' ans'}}</span><br>
          <i class="fa fa-briefcase"></i><p class="profession">{{ $search->userType}}</p>
        </div>
      </div> 
      <div class="text_align_left">
        <i class="fa fa-check-circle" aria-hidden="true"></i> Téléphone vérifié<br>
        <i class="fa fa-check-circle" aria-hidden="true"></i> E-mail vérifié<br>
        <i class="fa fa-times-circle" aria-hidden="true"></i> Facebook non vérifié
      </div> 
    </div>
    <div class="top_search_data col-lg-6 col-xs-12">
      <div id="box_border">
        <h2>Budget: {{ $search->budget }} <sub>TND</sub></h3>
        <p><i class="fa fa-users" aria-hidden="true"></i> Je suis/Nous sommes: {{ $search->sitation }}</p>
        <p><i class="fa fa-clock-o" aria-hidden="true"></i> Publié le: {{ Carbon\Carbon::parse($search->created_at)->format('d/m/Y') }}</p>
        <h4>Description de la recherche:</h4>
        <p>{{ $search->description }}</p>
      </div>
    </div>
    <div class="top_search_contact col-lg-3 col-xs-12">
      <div id="box_border">
        <h4>Contacter <span class="capitalize">{{ $search->nom }}</span></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore</p>
        @if (!Auth::guest())
        <a href="#0" rel="popup_name" class="cd-popup-trigger" id="btn_contact">Afficher le numéro</a>
        <a href="mailto:{{$search->email}}" id="btn_contact">Envoyer un email</a>
          <!-- POPUP info-->
          <div class="cd-popup" role="alert">
            <div class="cd-popup-container">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="dta-for_usr">
                <p><i class="fa fa fa-phone"></i>{{ $search->telephone }}</p>
                <p><i class="fa fa-envelope"></i>{{ $search->email }}</p>
              </div>
              <a href="#0" class="cd-popup-close img-replace"></a>
            </div> <!-- cd-popup-container -->
          </div> <!-- cd-popup -->
          <!-- END POPUP info-->
        @endif  
        @if (Auth::guest())
          <a href="{{route('login')}}" class="link_to_log">Vous devez vous connecter pour contacter {{ $search->nom }}</a>
        @endif 
      </div>
    </div>
@endforeach
</div>
<script>
      var citymap = {
        position: {
          center: {lat: <?php echo $lat; ?>, lng: <?php echo $lag; ?>},
          /*population: 180*/
        },
      };

      function initAutocomplete() {
        // Create the map.
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: <?php 
            if(($rayon) == 1 ){
              echo 14;
            }elseif(($rayon) == 2 ){
              echo 13;
            }elseif(($rayon) == 3 ){
              echo 12;
            }elseif(($rayon) == 4 ){
              echo 12;
            }elseif(($rayon) == 5 ){
              echo 11;
            }elseif(($rayon) == 6 ){
              echo 11;
            }
          ?>,
          center: {lat: <?php echo $lat; ?>, lng: <?php echo $lag; ?>},
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        // Construct the circle for each value in citymap.
        // Note: We scale the area of the circle based on the population.
        for (var city in citymap) {
          // Add the circle for this city to the map.
          var cityCircle = new google.maps.Circle({
            strokeColor: '#1b4268',
            strokeOpacity: 0.7,
            strokeWeight: 2,
            fillColor: '#1b4268',
            fillOpacity: 0.35,
            map: map,
            center: citymap[city].center,
            radius: <?php echo $rayon; ?> * 1000
            /*radius: Math.sqrt(citymap[city].population) * 100*/
          });
        }
      }
    </script>
@endsection
@section('js')
<script src="{{asset('js/style_map.js')}}"></script>
<script src="{{asset('js/popup.js')}}"></script>
@endsection 