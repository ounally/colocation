@extends('front_office/layouts.app')
@section('title')
- Mes colocation
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
@endsection
@section('content')
    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Mes colocations</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{route('home')}}">Accueil</a></li>
            <li class="active">Mes colocations</li>
        </ul>
    </div>
    <div class="container">
        <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 prf_left">
                @include('front_office/profile/layouts.aside')
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 prf_right">
                <table id="dataTable" class="display compact" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>titre</th>
                            <th>adresse</th>
                            <th>date</th>
                            <th>supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mycols as $mycol)
                            <tr>
                                <td>{{$mycol->titre}}</td>
                                <td>{{$mycol->adresse}}</td>
                                <td>{{Carbon\Carbon::parse($mycol->created_at)->format('d/m/Y')}}</td>
                                <td>
                                    <form method="POST" action="{{ route('mes_colocations', auth()->user()->id) }}" enctype="multipart/form-data" class="delete_local" id="delete_local">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id_of_local" value="{{ $mycol->id }}">
                                        <button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script>

</script>
@endsection 
@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endsection    