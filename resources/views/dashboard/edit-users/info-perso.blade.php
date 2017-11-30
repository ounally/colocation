<li>
                                    <form method="POST" action="/adm_56ds68/user/{{$UserDetail->id}}/info-perso" enctype="multipart/form-data" class="update_user">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <br>
                                    <h4 class="full_width_in_card heading_c">Bio</h4>
                                    <div class="uk-width-1-1">
                                        <label for="user_edit_personal_info_control">Bio</label>
                                        <textarea class="md-input" name="user_edit_bio" id="user_edit_personal_info_control" cols="30" rows="4">{{$UserDetail->bio}}</textarea>
                                    </div>
                                    <br>
                                    <div class="uk-width-1-1">
                                        <h4 class="full_width_in_card heading_c">Contact Info</h4>

                                        <div class="uk-grid-margin">
                                        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2">

                                            <div class="uk-input-group uk-grid-margin">
                                                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">mail</i></span>
                                                <label>Email</label>
                                                <input type="text" class="md-input" name="user_edit_email" value="{{$UserDetail->email}}" />
                                                @if ($errors->has('user_edit_email'))
                                                    <span class="help-block">
                                                        {{ $errors->first('user_edit_email') }}
                                                    </span>
                                                @endif
                                            </div>
                                            

                                            <div class="uk-input-group uk-grid-margin">
                                                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">phone</i></span>
                                                <label>Téléphone</label>
                                                <input type="text" class="md-input" name="user_edit_phone" value="{{$UserDetail->telephone}}" />
                                                @if ($errors->has('user_edit_phone'))
                                                    <span class="help-block">
                                                        {{ $errors->first('user_edit_phone') }}
                                                    </span>
                                                @endif
                                            </div>
                                            
                                            <div class="uk-input-group uk-grid-margin">
                                                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">person_pin_circle</i></span>
                                                <label>Adresse</label>
                                                <input type="text" class="md-input" name="user_edit_adresse" value="{{$UserDetail->adresse}}" />
                                                @if ($errors->has('user_edit_adresse'))
                                                    <span class="help-block">
                                                        {{ $errors->first('user_edit_adresse') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="uk-input-group uk-grid-margin">
                                                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">credit_card</i></span>
                                                <label>CIN</label>
                                                <input type="text" class="md-input" name="user_edit_cin" value="{{$UserDetail->cin}}" />
                                                @if ($errors->has('user_edit_cin'))
                                                    <span class="help-block">
                                                        {{ $errors->first('user_edit_cin') }}
                                                    </span>
                                                @endif
                                            </div>

                                        </div> 
                                        </div>

                                        <div class="uk-grid-margin">
                                        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2">
                                            <div class="uk-input-group uk-grid-margin">
                                                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">place</i></span>
                                                <label>Ville</label>
                                                <input type="text" class="md-input" name="user_edit_ville" value="{{$UserDetail->ville}}" />
                                                @if ($errors->has('user_edit_cin'))
                                                    <span class="help-block">
                                                        {{ $errors->first('user_edit_ville') }}
                                                    </span>
                                                @endif
                                            </div>

                                            

                                            <div class="uk-input-group uk-grid-margin">
                                                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">markunread_mailbox</i></span>
                                                <label>Code postal</label>
                                                <input type="text" class="md-input" name="user_edit_post" value="{{$UserDetail->codepostal}}" />
                                                @if ($errors->has('user_edit_post'))
                                                    <span class="help-block">
                                                        {{ $errors->first('user_edit_post') }}
                                                    </span>
                                                @endif
                                            </div>

                                            
                                            <div class="uk-input-group uk-grid-margin">
                                                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">wc</i></span>
                                                <select id="val_select" required data-md-selectize name="user_edit_sexe">
                                                    <option value="">Sexe</option>
                                                    <option value="Homme"
                                                    @if ($UserDetail->sexe == 'Homme')
                                                    echo selected
                                                    @endif
                                                    >Homme</option>
                                                    <option value="Femme"
                                                    @if ($UserDetail->sexe == 'Femme')
                                                    echo selected
                                                    @endif
                                                    >Femme</option>
                                                </select>
                                            </div>

                                            <div class="uk-input-group uk-grid-margin">
                                                <span class="uk-input-group-addon"><i class="md-list-addon-icon material-icons">event</i></span>
                                                <label for="uk_dp_1">Naissance</label>
                                                <input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" name="user_edit_date" value="{{$UserDetail->naissance}}">
                                                <span class="md-input-bar"></span>
                                                @if ($errors->has('user_edit_date'))
                                                    <span class="help-block">
                                                        {{ $errors->first('user_edit_date') }}
                                                    </span>
                                                @endif
                                                </div>
                                                </div> 
                                            </div>

                                            

                                            <div class="uk-grid-margin">
                                            <button class="md-btn md-btn-primary" type="submit">Mise à jour</button>
                                            </div> 

                                            </form>
                                        </li>