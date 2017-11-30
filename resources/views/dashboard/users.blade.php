@extends('dashboard/layouts.app')
<!-- section title -->
@section('title')
- Utilisateurs
@stop
<!-- end section title -->

<!-- section CSS -->
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" media="all">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" media="all">
@stop
<!-- end section CSS -->

<!-- section content -->
@section('content')

<div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container uk-margin-bottom">
                        
                        <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nom et Prénom</th>
                                    <th>E-mail</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>CIN</th>
                                    <th>Ville</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nom et Prénom</th>
                                    <th>E-mail</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>CIN</th>
                                    <th>Ville</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><a href="/adm_56ds68/user/{{$user->id}}">{{$user->FullName()}}</a></td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->telephone}}</td>
                                        <td>{{$user->adresse}}</td>
                                        <td>{{$user->cin}}</td>
                                        <td>{{$user->ville}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>     
</div>
@stop
<!-- end section content -->


<!-- section JS -->
@section('js')
    <!--  datatables functions -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
     <script>
        
	    	jQuery( document ).ready(function( $ ) {
			    $('#example').DataTable( {
			        columnDefs: [
			            {
			                targets: [ 0, 1, 2 ],
			                className: 'mdl-data-table__cell--non-numeric'
			            }
			        ]
			    });
			});

    </script>
@stop
<!-- end section JS -->