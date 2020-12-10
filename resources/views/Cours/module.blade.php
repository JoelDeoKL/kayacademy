@extends('layout')

@section('content')

<div class="formbanner container-fluid">
    <div class="container">
        <div class="row flex-center">
            <div class="col-lg-6">
                <div class="pull-right">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-white rgba-black-light rounded container">
                    <h1 class="h1-responsive">Tous les modules qui sont contenus dans cette formations</h1>
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
        <h3>Voici les modules offert dans la formation {{$cours->titre_cours}}</h3>
    </div>
    <div class="container mt-5" style="margin-bottom:100px;"> 

        @foreach($modules as $module)

            <div class="mt-5">
                <a href="/module2/{{$module->id}}">
                    <div class="container shadow-md rounded">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{asset('storage/' . $module->image)}}" class="img-thumnail" width=200 alt="categorie-image">
                            </div>
                            <div class="col-lg-9" style="margin-left:-20px;">
                                <div class="container mt-3">
                                    <h6 class="kay-item my-0">{{$module->titre_module}}</h6>
                                    <h4 class="my-0">{{$module->description_module}}</h4>
                                    <span class="badge badge-success">{{$module->etat ? 'Disponible' : 'Indisponible'}}</span>
                                    <p></i>{{$module->created_at}}</p>
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