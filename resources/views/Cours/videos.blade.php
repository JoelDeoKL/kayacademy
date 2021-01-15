@extends('layout')

@section('content')

    @foreach($chapitres as $chapitre)
        <div class="container mt-5" style="margin-bottom: 100px;">
            <h3>Ce chapitre parler de {{$chapitre->titre_chapitre}}</h3>
            <div class="row">
                <div class="col-lg-8 rounded">
                    <video src="videos/r.mp4" controls poster="{{asset('images/front-end-nd0011-hero-image.jpg')}}" class="img-fluid rounded-top"></video>
                </div>
                <div class="col-lg-4">
                    <h2 class="text-primary">Détails de la video</h2>
                        <p>{{$chapitre->description_chapitre}}</p>
                </div>
                <div class="col-lg-8 mt-5">
                    <nav>
                        <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                            <!-- Accordion card -->
                        <div class="card">
                                <div class="card-header" role="tab" id="headingTwo3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo22"
                                        aria-expanded="false" aria-controls="collapseTwo2">
                                        <h5 class="mb-0">
                                            Texte de la vidéo <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapseTwo22" class="collapse" role="tabpanel" aria-labelledby="headingTwo3" data-parent="#accordionEx1" >
                                    <div class="card-body" style="overflow-y: scroll; height: 200px;">
                                        {{$chapitre->texte}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <h2 class="mt-5">Commentaires</h2>
                    @foreach($commentaires as $commentaire)
                    <div class="row mt-5">
                        <div class="col-2">
                            <img src="{{asset('images/service.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <p>{{$commentaire->commentaire}}</p>
                            <a href="#form" class="mt-3" data-target="#form">Répondre</a>
                        </div>
                    </div>
                    @endforeach

                    <hr>

                    <div class="mt-5" id="form">
                        <form action="{{route('commentaire.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="container mt-4">
                                <label for="">Identification</label>
                                <input type="text" name="nom_complet" id="nom_complet" class="form-control @error('nom_complet') is-invalid @enderror" placeholder="Votre nom complet">
                                @error('nom_complet')
                                <div class="is-invalid">
                                    {{ $errors->first('nom_complet')}}
                                </div>
                                @enderror
                            </div>
                            <div class="container mt-4">
                                <label for="">Votre commentaire</label>
                                <textarea name="commentaire" id="commentaire" cols="30" rows="5" class="form-control  @error('commentaire') is-invalid @enderror" placeholder="Votre commentaire ici"></textarea>
                                @error('commentaire')
                                <div class="is-invalid">
                                    {{ $errors->first('commentaire')}}
                                </div>
                                @enderror
                            </div>
                            <div class="container mt-4">                        
                                @foreach($chapitres as $chapitre)
                                    <input type="hidden" value="{{$chapitre->id}}" id="chapitres_id" name="chapitres_id" class="form-control @error('chapitres_id') is-invalid @enderror">
                                @endforeach

                                @error('chapitres_id')
                                <div class="is-invalid">
                                    {{ $errors->first('chapitres_id') }}
                                </div>
                                @enderror
                                <div class="mt-4">
                                    <input type="submit" value="Commenter" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mt-5" id="form">
                        <div>
                            <a href="/question/{{$chapitre->id}}" class="btn btn-primary">Passez au QUIZ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
@endsection