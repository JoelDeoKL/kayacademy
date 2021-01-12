@extends('layout')

@section('content')

<div class="formbanner container-fluid">
    <div class="container">
        <div class="row flex-center">
            <div class="col-lg-6">
                <div class="pull-right">
                    <img src="images/image_hp_banner.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-white rgba-black-light rounded container">
                    <h1 class="h1-responsive">Toutes les formations organisées chez nous</h1>
                </div>
                <div class="text-white">
                    <p>Sur la plateforme vous trouverez des cours en vidéo pour chaque module offert et vous aurez la possibilité de suivre le cours à tout moment le temps de la durée de la formation(.</p>
                    <div class="mt-4">
                        <a href="{{ url('videos') }}" class="btn btn-light kay-item shadow-md">ACCEDER A LA FORMATION</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:40px;">

<div class="container">
    <h2 class="item">Toutes les formations</h2>
</div>

<div class="container mt-5" style="margin-bottom:100px;"> 
    @foreach($cours as $cours)
        <div class="mt-5">
            <a href="/mes_cours/{{$cours->id}}">
                <div class="container shadow-md rounded">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{asset('storage/' . $cours->image)}}" class="img-fluid img-thumbnail mt-2" alt="">
                        </div>
                        <div class="col-lg-9" style="margin-left:-20px;">
                            <div class="container mt-3">
                                <h6 class="kay-item my-0">{{$cours->categorie->nom_categorie}}</h6>
                                <h4 class="my-0">{{$cours->titre_cours}}</h4>
                                <medium class="text-dark"><i class="fa fa-wifi"></i> {{$cours->niveau}}</medium><br>
                                <medium class="text-dark"><i class="fa fa-clock-o"></i>{{$cours->duree}}</medium>
                                <p class="text-dark mt-2">{{$cours->description}}</p>
                                <h1>50$</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
</div>

@endsection