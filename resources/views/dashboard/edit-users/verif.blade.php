<li>
        <div class="uk-grid" data-uk-grid-margin>

                        <div class="uk-width-medium-1-1">
                            <span>Facebook Vérification</span>
                            @if ($UserDetail->fbverification == 1)
                            <span><i class="md-list-addon-icon material-icons" style="color:green">verified_user</i></span>
                            @endif
                            @if ($UserDetail->fbverification == 0)
                            <span><i class="md-list-addon-icon material-icons" style="color:red">clear</i></span>
                            @endif
                        </div>
                        <div class="uk-width-medium-1-1">
                            <span>Mail Vérification</span>
                            @if ($UserDetail->mailverification == 1)
                            <span><i class="md-list-addon-icon material-icons" style="color:green">verified_user</i></span>
                            @endif
                            @if ($UserDetail->mailverification == 0)
                            <span><i class="md-list-addon-icon material-icons" style="color:red">clear</i></span>
                            @endif
                        </div>
                        <div class="uk-width-medium-1-1">
                            <span>Téléphone Vérification</span>
                            @if($UserDetail->telephoneverification == 1)
                            <span><i class="md-list-addon-icon material-icons" style="color:green">verified_user</i></span>
                            @endif
                            @if ($UserDetail->telephoneverification == 0)
                            <span><i class="md-list-addon-icon material-icons" style="color:red">clear</i></span>
                            @endif
                        </div>    
                        <div class="uk-width-medium-1-1">
                            <span>Id Vérification</span>
                            @if($UserDetail->idverification == 1)
                            <span><i class="md-list-addon-icon material-icons" style="color:green">verified_user</i></sspan>
                            @endif
                            @if ($UserDetail->idverification == 0)
                            <span><i class="md-list-addon-icon material-icons" style="color:red">clear</i></span>
                            @endif
                        </div>      
                        <div class="uk-width-medium-1-1">
                            <span>Charte Vérification</span>
                            @if($UserDetail->charteverification == 1)
                            <span><i class="md-list-addon-icon material-icons" style="color:green">verified_user</i></span>
                            @endif
                            @if($UserDetail->charteverification == 0)
                            <span><i class="md-list-addon-icon material-icons" style="color:red">clear</i></span>
                            @endif
                        </div>
                        
</li>