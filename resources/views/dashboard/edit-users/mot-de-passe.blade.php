
<li>
<form method="POST" action="/adm_56ds68/user/{{$UserDetail->id}}/mot-de-passe" enctype="multipart/form-data" class="update_user">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="uk-width-1-2">
        <h4 class="full_width_in_card heading_c">Mot de passe</h4>

        @if(Session::has('flash_message'))
            <div class="uk-alert uk-alert-success" data-uk-alert="">
                <a href="#" class="uk-alert-close uk-close"></a> <p>{!! session('flash_message') !!}</p>
            </div>
        @endif

        @if(Session::has('flash_message-1'))
            <div class="uk-alert uk-alert-danger" data-uk-alert="">
                <a href="#" class="uk-alert-close uk-close"></a> <p>{!! session('flash_message-1') !!}</p>
            </div>
        @endif

            <div class="uk-grid-margin">
                <div class="uk-input-group">
                    <span class="uk-input-group-addon">
                    <i class="material-icons">beenhere</i>
                    </span>
                    <div class="md-input-wrapper md-input-filled">
                        <label>Nouveau</label>
                        <input class="md-input" name="password" type="password">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <span class="md-input-bar"></span>
                    </div>
                </div>
            </div>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <p>{{ $errors->first('password') }}</p>
                    </span>
                @endif

            <div class="uk-grid-margin">
                <div class="uk-input-group">
                    <span class="uk-input-group-addon">
                        <i class="material-icons">beenhere</i>
                    </span>
                    <div class="md-input-wrapper md-input-filled">
                        <label>Confirmer</label>
                        <input class="md-input" name="password_confirmation" type="password">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <span class="md-input-bar"></span>
                    </div>
                </div>
            </div>

            @if ($errors->has('password_confirmation')) 
                <span class="help-block">
                    <p>{{ $errors->first('password_confirmation') }}</p>
                </span>
            @endif

            <br><br>
            <button class="md-btn md-btn-file_up" type="submit" data-message="Top Center">Changer</button>
    </div>
</form>
</li>