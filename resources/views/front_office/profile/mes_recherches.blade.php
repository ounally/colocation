@extends('front_office/layouts.app')
@section('title')
- Mes recherches
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Mes recherches</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{route('home')}}">Accueil</a></li>
            <li class="active">Mes recherches</li>
        </ul>
    </div>
    <div class="container">
        <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 prf_left">
                @include('front_office/profile/layouts.aside')
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 prf_right">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection    