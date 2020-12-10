@extends('layout')

@section('content')

<div class="container mt-5" style="margin-bottom: 100px;">
            <div class="row">
                <div class="col-lg-8 rounded">
                    <video src="videos/r.mp4" controls poster="images/front-end-nd0011-hero-image.jpg" class="img-fluid rounded-top"></video>
                </div>
                <div class="col-lg-4">
                    <h2 class="text-primary">Détails de la video</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas iure, asperiores quam aperiam, modi saepe cupiditate dolor voluptate earum, eligendi laborum officiis aut quaerat dolorem et delectus accusamus commodi accusantium. : </p>
                    <ul>
                        <li>Eaque fuga non vel quae vitae alias, quod eligendi.</li>
                        <li>Eaque fuga non vel quae vitae alias, quod eligendi.</li>
                        <li>Eaque fuga non vel quae vitae alias, quod eligendi.</li>
                    </ul>
                </div>
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                    wolf  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                    wolf  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <h2 class="mt-5">Commentaires</h2>

                <div class="row mt-5">
                    <div class="col-2">
                        <img src="images/service.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-10">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, numquam non delectus cumque dicta quaerat vitae error. Officiis accusamus perspiciatis libero aut eum? Sapiente ab impedit quisquam tenetur cum corrupti!</p>
                        <a href="#form" class="mt-3" data-target="#form">Répondre</a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-2">
                        <img src="images/service.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-10">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, numquam non delectus cumque dicta quaerat vitae error. Officiis accusamus perspiciatis libero aut eum? Sapiente ab impedit quisquam tenetur cum corrupti!</p>
                        <a href="#form" class="mt-3" data-target="#form">Répondre</a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-2">
                        <img src="images/service.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-10">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, numquam non delectus cumque dicta quaerat vitae error. Officiis accusamus perspiciatis libero aut eum? Sapiente ab impedit quisquam tenetur cum corrupti!</p>
                        <a href="#form" class="mt-3" data-target="#form">Répondre</a>
                    </div>
                </div>


                <hr>

                <div class="mt-5" id="form">
                    <form action="" class="row pt-5">
                        <div class="col-lg-6">
                            <label for="">Email</label>
                            <input type="text" class="form-control" placeholder="Votre nom complet">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Mot de passe</label>
                            <input type="text" class="form-control" placeholder="Votre adresse email">
                        </div>
                        <div class="container mt-4">
                            <label for="">Votre commentaire</label>
                            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Votre commentaire ici"></textarea>
                            
                            <div class="mt-4">
                                <a href="" class="btn pbtn-primary">Commenter</a>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>

@endsection