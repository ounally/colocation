<li>
<form method="POST" action="/adm_56ds68/user/{{$UserDetail->id}}/vehicule" enctype="multipart/form-data" class="update_user">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="col-md-12"> 
                        
        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-1 uk-grid-margin">
            <div class="advenced_profile"> 
            <img class="img_user_tk" src="{{asset('uploads/vehicules/default.png')}}">
            <div class="uk-form-file uk-text-primary">Choisir un fichier<input id="form-file" type="file" name="avatar"></div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>

        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2">
            <div class="uk-input-group">
                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">directions_car</i></span>
                <select id="val_select" name="marque">
                    <option value="">Marque</option>
                    <option value="Opel">Opel</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="FIAT">FIAT</option>
                </select>
            </div> 

            <div class="uk-input-group">
            <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">directions_car</i></span>
                <select id="val_select" name="model">
                    <option value="">Model</option>
                    <option value="Opel">Opel</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="FIAT">FIAT</option>
                </select>
            </div> 
            </div>
            <div class="uk-grid-margin">
                <button class="md-btn md-btn-primary" type="submit">Mise à jour</button>
            </div>


</form>
</li>