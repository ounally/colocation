<li>
<form method="POST" action="/adm_56ds68/user/{{$UserDetail->id}}" enctype="multipart/form-data" class="update_user">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<br>
<h4 class="full_width_in_card heading_c">Préférences</h4>
    

    <div class="uk-grid" data-uk-grid-margin>

                        
                        
                        
                        <div class="uk-width-medium-1-5">
                            <input type="checkbox" data-switchery  id="switch_demo_1" />
                            <span class="uk-form-help-block">
                                <img src="{{asset('img/pref/speech-bubble.png')}}" width="50">
                            </span>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <input type="checkbox" data-switchery  id="switch_demo_1" />
                            <span class="uk-form-help-block">
                                <img src="{{asset('img/pref/musical-note.png')}}" width="50">
                            </span>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <input type="checkbox" data-switchery  id="switch_demo_1" />
                            <span class="uk-form-help-block">
                                <img src="{{asset('img/pref/genders.png')}}" width="50">
                            </span>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <input type="checkbox" data-switchery  id="switch_demo_1" />
                            <span class="uk-form-help-block">
                                <img src="{{asset('img/pref/cigar.png')}}" width="50">
                            </span>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <input type="checkbox" data-switchery  id="switch_demo_1" />
                            <span class="uk-form-help-block">
                                <img src="{{asset('img/pref/dog.png')}}" width="50">
                            </span>
                        </div>
                    </div>


                    <div class="uk-grid-margin">
                        <button class="md-btn md-btn-primary" type="submit">Mise à jour</button>
                     </div>

</form>
</li>