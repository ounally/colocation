<div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <span class="glyphicon glyphicon-menu-hamburger">
                        </span>Menu</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                </span>Mon compte</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="{{ route('myProfile', auth()->user()->id) }}">Modifier profil</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            <a href="{{ route('password', auth()->user()->id) }}">Changer mot de passe</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                </span>Colocations</a>
                            </h4>
                        </div>
                        <table class="table">
                            <tr>
                                <td>
                                     <i class="fa fa-home" aria-hidden="true"></i>
                                     <a href="{{ route('mes_colocations', auth()->user()->id) }}">Mes colocations</a>
                                     <span class="badge">3</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                     <i class="fa fa-search" aria-hidden="true"></i>
                                     <a href="{{ route('mes_recherches', auth()->user()->id) }}">Mes recherches</a>
                                     <span class="badge">5</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                    <a href="{{ route('wishlist', auth()->user()->id) }}">Mes colocations sauvegardées</a>
                                    <span class="badge">23</span>
                                </td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        