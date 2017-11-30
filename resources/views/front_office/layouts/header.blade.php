<header id="header" class="header-color-white">
    <div class="container">
        <div class="header-inner">
            <div class="branding">
                <h1 class="logo">
                	<a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
            	</h1>
        	</div>
        	<nav id="nav">
				<ul class="header-top-nav">
					<li class="visible-mobile">
                        <a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
                    </li>
				</ul>
                <ul id="main-nav" class="hidden-mobile">
					<li id="prop_col">
                        <a href="{{ route('trouver_colocation') }}">Trouver une colocation</a>
                    </li>
                    <li id="prop_col">
                        <a href="{{ route('add_colocation') }}">Publier une colocation</a>
                    </li>
					@if (!Auth::guest())
						<li class="menu-item-has-children" id="li_user">
							<a href="#" id="li_user_a">
								<img class="md-user-tk" src="/uploads/avatars/{{ Auth::user()->photo }}" alt="">
								<span>{{ Auth::user()->FullName() }}<span><span class="caret"></span>
							</a>
							<ul class="sub-nav full_wd">
								<li><a href="{{ route('myProfile', auth()->user()->id) }}">Mon profil</a></li>
								<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">Déconnexion</a></li>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</ul>
						</li>
					@endif
					@if (Auth::guest())
						<li>
							<a href="{{ route('login') }}"><i class="fa fa-lock" aria-hidden="true"></i>Connexion</a>
						</li>
						<li
						>
							<a href="{{ route('register') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Inscription</a>
						</li>
					@endif
                </ul>
            </nav>
        </div>
    </div>
    <div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
        <ul class="mobile-nav">
			<li>
                <a href="{{ route('trouver_colocation') }}">Trouver une colocation</a>
            </li>
            <li>
                <a href="{{ route('add_colocation') }}">Proposer une colocation</a>
            </li>
			@if (!Auth::guest())
				<li class="menu-item-has-children">
					<span class="open-subnav"></span>
					<a href="{{ route('myProfile', auth()->user()->id) }}">
						<img class="md-user-tk" src="/uploads/avatars/{{ Auth::user()->photo }}" alt="">
						<span>{{ Auth::user()->FullName() }}<span><span class="caret"></span>
					</a>
					<ul class="sub-nav">
						<li><a href="{{ route('myProfile', auth()->user()->id) }}">Mon profil</a></li>
						<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">Déconnexion</a></li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</ul>
				</li>
			@endif
			@if (Auth::guest())
				<li class="menu-item-has-children">
					<a href="{{ route('login') }}"><i class="fa fa-lock" aria-hidden="true"></i>Connexion</a>
				</li>
				<li class="menu-item-has-children">
					<a href="{{ route('register') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Inscription</a>
				</li>
			@endif
        </ul>
    </div>
</header>