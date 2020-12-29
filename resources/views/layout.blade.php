<!DOCTYPE html>
<html>
<head>
	<title>Kay ACADEMY - L'informatique pour tous</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/fontawesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/md.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="icon" type="icon" href="{{asset('images/icone.png')}}" src="{{asset('images/images(21).jpg')}}">
</head>
<body>


<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background:#ffff;">
        <div class="container pt-2 pb-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}" alt="KAY SOFT ACADADEMY"></a>
            <div class="collapse navbar-collapse" id="navbarNav" style="font-family:Calibri; font-size:20px;">
                <ul class="navbar-nav ml-auto flex-center">
                    <li class="nav-item mr-lg-3 ">
                        <a class="item" href="{{ url('/') }}">Accueil</a>
                    </li>

                    <li class="nav-item mr-lg-3 ">
                        <a class="item" href="{{ url('toutes_formations') }}">Nos formations</a>
                    </li>

                    <li class="nav-item ml-lg-3">
                        <a href="{{ url('quide') }}" class="item">Comment ça marche ?</a>
                    </li>

                    <li class="nav-item mr-lg-3 ml-lg-3 item">|</li>

                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a href="" class="btn pbtn-primary shadow" data-toggle="modal" data-target="#modalPush">{{ __('Se conncter') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Se Déconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center d-flex justify-content-center">
                <h2 class="kay-item">Se connecter</h2>
            </div>
            <!--Body-->
            <div class="modal-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <div class="md-form mb-0">
                            <label for="email" class="">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="md-form mb-0">
                            <label for="email" class="">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Se connecter') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <p>Vous n'avez pas de compte ? | <a href="{{ route('register') }}">Vous inscrire</a></p>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>




<footer style="background: #2f3d4a;">
    <div class="container" style="padding-top:150px;padding-bottom:20px;">
        <div class="row text-white">
            <div class="col-lg-3">
                <img src="{{asset('images/logo-footer.png')}}" alt="">
                <div class="mt-4">
                    <a href="" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="" class="social"><i class="fa fa-whatsapp"></i></a>
                    <a href="" class="social"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <h5>A PROPOS</h5>
                <ul class="list-unstyled">
                    <li class="mt-2"> <a href="{{ url('about') }}" class="text-muted"> Nos valeurs</a></li>
                    <li><a href="{{ url('team') }}" class="text-muted"> Notre équipe</a></li>
                    <li><a href="{{ url('quide') }}" class="text-muted"> Comment ça marche ?</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5>SUPPORT</h5>
                <ul class="list-unstyled">
                    <li> <a href="{{ url('formations') }}" class="text-muted"> modules</a></li>
                    <li><a href="{{ url('contact') }}" class="text-muted"> Contact</a></li>
                    <li><a href="{{ url('certification') }}" class="text-muted"> Certification </a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5>CONTACT</h5>
                <ul class="list-unstyled">
                    <li> <a href="" class="text-muted"> <i class="fa fa-phone"></i> Téléphone</a></li>
                    <li><a href="" class="text-muted"> <i class="fa fa-envelope"></i> Email</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="rgba-black-light">
        <div class="container pt-3 pb-3">
            <small class="text-muted"><a href="{{ url('utilisation') }}" class="text-muted">Copyright © KaySoftADADEMY 2019 | Tous droits réservés </a></small>
            <medium class="pull-right text-muted"> <a href="{{ url('condition') }}" class="text-muted"> Conditions d'utilisations </a></medium>
        </div>
    </div>
</footer>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('js/scrollax.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>