@extends('layout')

@section('content')


<div class="container">
    <div class="row flex-center">
        <div class="col-lg-6">
            <div class="container">
                <h1 class="kay-item">{{$cours->titre_cours}}</h1>
                <p>{{$cours->description}}</p>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="images/pc.png" class="img-fluid" alt="">
        </div>
    </div>
</div>

<div class="container" style="margin-top:100px; margin-bottom:100px;">
    <div class="row">
        <div class="col-lg-3">
            <h4>Plan du cours</h4>
            <ul>
                @foreach($modules as $module)
                    <li class="mt-4">{{$module->titre_module}} : {{$module->description_module}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-6">
            <h4>{{$cours->titre_cours}}</h4>
            <p>Si vous suivez avec attention cette formation, vous aller acquerrir les connaissances requises en matière avec le cours de {{$cours->titre_cours}}.</p>
            <h6 style="font-weight:bolder;">PROGRAMME A SUIVRE</h6>
            @foreach($modules as $module)
                <div class="mt-5">
                    <a href="/le_module/{{$module->id}}"> <div class="container rounded shadow-md i-border-left pb-3 pt-2">
                        <h6 class="my-0">ETAPE {{$module->id}}</h6>
                        <h2 class="kay-item">{{$module->titre_module}}</h2>
                        <p class="my-0">{{$module->etat ? 'Disponible' : 'Indisponible'}}</p>
                        <medium><i class="fa fa-wifi"></i>Niveau {{$module->cours->niveau}}</medium>
                    </div></a>
                </div>
            @endforeach
        </div>
        <div class="col-lg-3">
            <h4>Formateur</h4>
            <img src="images/profil.jpg" class="img-fluid rounded" alt="">
            <h5 class="mt-3">$module->cours->titulaire}}</h5>
            <p>Formateur de l'equipe KayAcademy possedant des qualités énormes en $module->cours->titre_cours}}</p>
        </div>
    </div>
</div>


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
                <div class="mt-4">
                    <div class="md-form mb-0">
                        <label for="email" class="">Email</label>
                        <input type="email" id="name" name="email" class="form-control">
                    </div>
                </div>
                <div class="mt-4">
                    <div class="md-form mb-0">
                        <label for="email" class="">Password</label>
                        <input type="email" id="name" name="email" class="form-control">
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="" class="btn shadow-md kay-item" data-dismiss="modal">Se connecter</a>
                </div>
        </div>

        <!--Footer-->
        <div class="modal-footer flex-center">
            <p>Vous n'avez pas de compte ? | <a href="login.php" >Vous inscrire</a></p>
        </div>
        </div>
        <!--/.Content-->
    </div>
</div>
            
<!-- Central Modal Small -->


@endsection