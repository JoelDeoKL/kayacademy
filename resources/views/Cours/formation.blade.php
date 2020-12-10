@extends('layout')

@section('content')


<div class="container">
    <div class="row flex-center">
        <div class="col-lg-6">
            <div class="container">
                <h1 class="kay-item">Initiation à la Programmtion Web</h1>
                <p>La formation en Programmation Web consiste à vous apprende les bases pour créer des pages web, des sites internet, des application Web, des blog et plein d'autres trucs si vous suivez toutes les séries des formations qui seront organisées.
                Et tous cela juste en apprenant le deux langages des bases que nous allonsapprendre avec vous.
                </p>
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
                <li class="mt-4">Introduction</li>
                <li class="mt-4">Avoir les bons outils</li>
                <li class="mt-4">Apprenez les bases</li>
                <li class="mt-4">Les balises</li>
                <li class="mt-4">Coder</li>
            </ul>
        </div>
        <div class="col-lg-6">
            <h4>Initiation à la Programmation Web.</h4>
            <p>Si vous suivez avec attention nos formations vous serais capable dans 3 mois des créer des pages Web complètes.</p>
            <h6 style="font-weight:bolder;">PROGRAMME RECOMMANDE</h6>
            <div class="mt-5">
                <a href="" data-toggle="modal" data-target="#myModal3"> <div class="container rounded shadow-md i-border-left pb-3 pt-2">
                    <h6 class="my-0">ETAPE 1</h6>
                    <h2 class="kay-item">Chapitre I Avoir les bons Outils</h2>
                    <p class="my-0">Quels sont les prérequis pour commencer à créer des pages web</p>
                    <medium><i class="fa fa-wifi"></i> Niveau 1</medium>
                </div></a>
            </div>
            <div class="mt-5">
                <a href="" data-toggle="modal" data-target="#centralModalSm"> <div class="container rounded shadow-md i-border-left pb-3 pt-2">
                    <h6 class="my-0">ETAPE 2</h6>
                    <h2 class="kay-item">Chapitre I Les balises</h2>
                    <p class="my-0">Les balises ouvrantes et les balises fermantes.</p>
                    <medium><i class="fa fa-wifi"></i> Niveau 1</medium>
                </div></a>
            </div>
            <div class="mt-5">
                <a href="" data-toggle="modal" data-target="#centralModalSm"> <div class="container rounded shadow-md i-border-left pb-3 pt-2">
                    <h6 class="my-0">ETAPE 3</h6>
                    <h2 class="kay-item">Chapitre I Le Style</h2>
                    <p class="my-0">Faire vivre votre site avec du style</p>
                    <medium><i class="fa fa-wifi"></i> Niveau 2</medium>
                </div></a>
            </div>
            <div class="mt-5">
                <a href="" data-toggle="modal" data-target="#centralModalSm"> <div class="container rounded shadow-md i-border-left pb-3 pt-2">
                    <h6 class="my-0">ETAPE 4</h6>
                    <h2 class="kay-item">Chapitre I Bootstrap</h2>
                    <p class="my-0">Faitez des très beau sites responsives avec Bootstap</p>
                    <medium><i class="fa fa-wifi"></i>Niveu 3</medium>
                </div></a>
            </div>
        </div>
        <div class="col-lg-3">
            <h4>Formateur</h4>
            <img src="images/profil.jpg" class="img-fluid rounded" alt="">
            <h5 class="mt-3">Joel DEO</h5>
            <p>Sit amet consectetur adipisicing elit. Veniam quisquam expedita,</p>
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

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content modal-info">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
        </div>
        <div class="container-fluid">
            <form class="form ml-5" method="post">
            <label>Choisissez le mode de paiemant:</label>
            <span class="d-block money">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="radio" id="airtel-money" name="money">
                        <label class="mr-3" for="airtel-money"><img class="img-fluid" src="images/airtel-money.png" style="width:50px;"></label>
                    </div>
                    <div class="col-lg-4">
                        <input type="radio" id="orange-money" name="money"><label class="mr-3" for="orange-money">
                        <img class="img-fluid" src="images/orange-money.png" style="width:50px;"></label>
                    </div>

                    <div class="col-lg-4">
                        <input type="radio" id="m-pesa" name="money">
                        <label for="m-pesa"><img class="img-fluid" src="images/m-pesa.png" style="width:50px;"></label>
                    </div>
                </div>
            </span>
            <div class="row container-fluid" style="margin-top:25px;">
                <div class="col-lg-8">
                    <span>
                        <label for="sender_name">Numéro de téléphone</label>
                        <div class="row">
                            <div class="col-lg-1">
                                <div class="input-group-text"><i class="fa fa-user fa-1x"></i></div>
                            </div>
                            <div class="col-lg-11">
                                <input style="width:300px;" class="form-control" type="text" id="sender_number" name="sender_name">
                            </div>
                        </div>
                        <label for="sender_number" style="margin-top:10px;">Mot de passe</label>
                        <div class="row">
                            <div class="col-lg-1">
                                <div class="input-group-text"><i class="fa fa-lock fa-1x"></i></div>
                            </div>
                            <div class="col-lg-11">
                                <input style="width:300px;" class="form-control" type="password" id="sender_number" name="sender_name">
                            </div>
                        </div>
                    </span>
                </div>
                <div class="col-lg-4">
                    <img src="images/logo.png" class="img-fluid">
                </div>
            </div>
            <div class="ml-3 mt-3">
                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal4">Valider</a>
            </div>
            <span class="row col-12">
                <p class="grey-text mt-5">N.B : Rassurez-vous que la transaction soit faite avec succès. <br>Vous recevrez ensuite dans les 30 miniutes, un mail de la part du dépôt pharmaceutique...</p>
            </span>
        </form>
        </div>
    </div>
</div>
    <!-- //Commander -->

<!-- Comfirmation -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                    </div>
                    <div class="container-fluid">
                        <form class="form ml-5" method="post">
                        <label>Comfirmation du Paiement</label>
                        <p>Vous devez entrer votre Numero de téléphone et le nouveau mot de passe que nous vous avons envoyez par SMS</p>
                        <div class="row container-fluid" style="margin-top:25px;">
                            <div class="col-lg-8">
                                <span>
                                    <label for="sender_name">Numéro de téléphone</label>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="input-group-text"><i class="fa fa-user fa-1x"></i></div>
                                        </div>
                                        <div class="col-lg-11">
                                            <input style="width:300px;" class="form-control" type="text" id="sender_number" name="sender_name">
                                        </div>
                                    </div>
                                    <label for="sender_number" style="margin-top:10px;">Mot de passe</label>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="input-group-text"><i class="fa fa-lock fa-1x"></i></div>
                                        </div>
                                        <div class="col-lg-11">
                                            <input style="width:300px;" class="form-control" type="password" id="sender_number" name="sender_name">
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <div class="col-lg-4">
                                <img src="images/logo.png" class="img-fluid">
                            </div>
                            <div class="ml-3 mt-3">
                                    <a href="partie1.php" class="btn btn-success btn-sm">Valider</a>
                            </div>
                            <span class="row col-12">
                                    <p class="grey-text mt-5">N.B : Si vous avez bien effectuez la transaction et bien entrez le mot de passe vous allez etre rédiriger vers la page de la formation...!</p>
                                    <p> </p>
                                    <p> </p>
                                </span>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
</div>

<!-- Central Modal Small -->


@endsection