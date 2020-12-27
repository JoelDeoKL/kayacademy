@extends('layout')

@section('content')

<div class="container-fluid" style="background:url(images/her.jpg)no-repeat center top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                
            </div>
            <div class="col-lg-6">
                <div class="kaybanner container rounded text-white">
                    <div class="p-lg-5">
                        <h1><strong>L'informatique pour tous</strong></h1>
                        <p><em>Etudiez l'informatique chez vous, sur votre SmartPhone sur votre Ordinateur portable quand vous voulez où vous voulez.<br>Formez-vous et informez les autres :)</em></p>
                        <form action="" class="shadow">
                            <input type="search" class="form-control" placeholder=" Que veux-tu étudiez aujourd'hui?" name="" id="">
                        </form>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-university mt-5"></i> Initiation à L'infrormatique</li>
                            <li><i class="fa fa-university mt-4"></i> Initiation à la Bureautique</li>
                            <li><i class="fa fa-university mt-4"></i> Initiation à la Programmation Web</li>
                            <li><i class="fa fa-university mt-4"></i> Initiation au Design...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:200px;">
    <div class="row flex-center">
        <div class="col-lg-5">
            <img src="images/home_illustration.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7">
            <h3>Formations en ligne</h3>
            <p>Nous sommes une plate forme qui offre des formations en ligne. Et ces formations sont centrés sur le domaine Informatique.
                <br>En faisant ca nous sommes en train de proumoir cette science partout dans le monde en général et en Afrique en particulier (Plus particulièrement en République Démocratique Du Congo)</p>
            <div class="mt-3">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('register'))
                        <a class="btn pbtn-primary shadow" href="{{ route('register') }}">{{ __("Se connecter") }}</a>
                    @endif
                @else
                    <a href="{{ url('formations') }}" class="btn pbtn-primary shadow">Acceder</a>
                @endguest
            </div>
        </div>
    </div>
</div>

<div class="container mt-5" style="margin-bottom: 100px;">
    <div class="row">
        <div class="col-lg-8 rounded">
            <video src="videos/r.mp4" controls poster="images/front-end-nd0011-hero-image.jpg" class="img-fluid rounded-top"></video>
        </div>
        <div class="col-lg-4">
            <h2 class="text-primary">Tous savoir sur nous</h2>
            <p>Dans cette petite vidéo nous vous montrons tous ce que vous devez savoir pour commencer avec nous à savoir :</p>
            <ul>
                <li>Comment faire votre inscription</li>
                <li>Comment effectuer votre paiement en toute sécurité</li>
                <li>Comment fonctionne nos formations</li>
            </ul>
        </div>
    </div>
</div>


<div class="container" style="margin-top:150px;">
    <div class="text-center pb-5">
        <h2>Voici les domaines qu'inclus notre applications :</h2>
    </div>

    <div class="row">
        @foreach($categories as $categorie)
        <div class="col-lg-6 mt-5">
            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-5">
                    <img src="{{asset('storage/' . $categorie->image)}}" class="img-thumnail" width=200 alt="categorie-image">
                    </div>
                    <div class="col-lg-2 mt-2" style="margin-left:-63px;">
                    </div>
                    <div class="col-lg-6" style="margin-left:-30px;">
                        <div class="container mt-3">
                            <h5 class="item">{{$categorie->nom_categorie}}</h5>

                            <p>{{$categorie->description_categorie}}</p>
                            <div>
                                <a href="{{ url('formations') }}" class="shadow btn">Voir les formations</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container-fluid" style="background:#dcf0fb; margin-top:100px;">
    <div class="container" style="padding-top:70px;padding-bottom:70px;">
        <div class="text-center">
            <h2 class="text-primary mb-4">Pourquoi Kay Academy</h2>
            <div class="col-lg-8 m-auto">
                    <p>Vous pouriez peut etre vous posez la question pourquoi choisir kaySoftAcademy au lieu d'un plateforme?<br/>Et bien vous n'avez pas fait un mauvais choix. Vous etes au bon endroit et au bon moment!</p>
            </div>
        </div>
        <div class="">
            <div class="shadow rounded" style="background:white;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="container mt-4">
                                <h3>Les avantages de KaySoftACADEMY</h3>
                            <ul class="list-unstyled">
                                <li class="mt-2"><i class="text-primary fa fa-check"></i> La bonne organisation des cours.</li>
                                <li class="mt-2"><i class="text-primary fa fa-check"></i> La possibilité de poser des questions.</li>
                                <li class="mt-2"><i class="text-primary fa fa-check"></i> Vous étudiez quand vous voulez.</li>
                                <li class="mt-2"><i class="text-primary fa fa-check"></i> Les cours sont donnés par des spécialistes.</li>
                                <li class="mt-2"><i class="text-primary fa fa-check"></i> Vous avez la possibilité de travailler apres formation.</li>
                                <li class="mt-2"><i class="text-primary fa fa-check"></i> Une bonne formation.</li>

                                <div class="mt-3">
                                    <a href="/about" class="btn pbtn-primary shadow pl-lg-5 pr-lg-5">En savoir plus</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('images/card-why-udacity.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-formations" style="margin-top:150px;margin-bottom:150px;">
    <div class="row">
        <div class="col-lg-3">
            <h2>Vous verez ici nos nouvelles formations </h2>
            <p>Soyez le premier à acceder à ces nouveaux formations qui vous sont proposer.<br/>Vous avez aussi la possibilité de voir les cours les plus populaires.</p>
            <div class="mt-3">
                <a href="/formations" style="letter-spacing:2px;" class="btn shadow pl-lg-5 pr-lg-5">Toutes les formations</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row container pull-right">
                @foreach($cours as $cours)
                    <div class="col-lg-4 mt-2">
                        <div class="shadow-md rounded">
                            <div class="view">
                                <img src="{{asset('storage/' . $cours->image)}}" class="img-thumnail" width=200 alt="cours-image">
                                <div class="mask rgba-black-light flex-center">
                                    <div class="container text-white">
                                        <a href="formation.php" class="text-white">
                                        <p style="text-transform : uppercase;">{{$cours->categorie->nom_categorie}}</p>
                                        <span style="background:orange;" class="container rounded mt-3">NOUVEAU</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <h5><a href="formation.php" class="text-dark" style="font-weight: bolder; text-transform : uppercase;">{{$cours->titre_cours}}</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container bl-rounded br-rounded" style="background:white; margin-bottom:-100px; color:#2f3d4a;">
    <div class="container pt-5" style="background:white;">
        <div class="row pt-5">
            <div class="col-lg-4 bl-rounded" style="background:white;">
                <div class="text-center col-lg-9 m-auto pb-5">
                    <i class="fa fa-university fa-3x"></i>
                    <h1 class="mt-3">{{DB::table('users')->count() ?? '0'}}+</h1>
                    <p style="font-weight:bolder;">Etudiants à travers le monde depuis le lancement officiel</p>
                </div>
            </div>
            <div class="col-lg-4" style="background:white;">
                <div class="text-center col-lg-9 m-auto">
                    <i class="fa fa-book fa-3x"></i>
                    <h1 class="mt-3">{{DB::table('cours')->count() ?? '0'}}+</h1>
                    <p style="font-weight:bolder;">Formations dans des domaines différents</p>
                </div>
            </div>
            <div class="col-lg-4 br-rounded" style="background:white;">
                <div class="text-center col-lg-9 m-auto">
                    <i class="fa fa-user-o fa-3x"></i>
                    <h1 class="mt-3">40+</h1>
                    <p style="font-weight:bolder;">Formateurs spécialistes venus de 4 coins du monde</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection