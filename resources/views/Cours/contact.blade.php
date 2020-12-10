@extends('layout')

@section('content')


<div class="container" style="margin-top:200px; margin-bottom:200px;">
    <div class="col-lg-8 m-auto text-center">
        <h1 class="kay-item" style="font-weight:bold; font-size:58px;">Nous contacter</h1>
        <p>Si vous rencontrer des problèmes ou avez besoin de quelque chose vous pouvez toujours nous contactez!</p>
        <hr>
    </div>
</div>

<div class="container mb-lg-5" style="margin-top:100px;">
    <div class="m-auto rounded shadow">
        <div class="row rounded">
            <div class="col-lg-8" style="background:white;">
                <div class="container">
                    <form action="" class="row pt-5">
                        <div class="col-lg-6">
                            <label for="" class="">Nom</label>
                            <input class="form-control" type="text" name="nom" required>
                        </div>
                        <div class="col-lg-6 m-auto">
                            <label for="" class="">Email</label>
                            <input class="form-control" type="email" name="email" required>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <label for="" class="">+243 999 539 100</label>
                            <input class="form-control" type="text" name="phones" required>
                        </div>
                        <div class="col-lg-6 m-auto mt-3">
                            <label for="" class="">Object</label>
                            <input class="form-control" type="text" name="sujet" required>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <label for="">Message</label>
                            <textarea name="" id="" cols="" rows="5" name="messages" class="form-control" required></textarea>
                            <div class="mt-4 mb-5">
                                <a href="" class="btn btn-light pbtn-primary">Envoyer</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container rounded shadow-md text-white" style="background:#3f8abf; padding-bottom:100px;">
                    <h3 class="pt-5" style="padding-top:50px;">Contact Information</h3>
                    <div class="container mt-5 mb-5">
                        <p><i class="fa fa-home fa-2x mr-3"></i>Lubumbashi, 8, Rue Kanyoka, C/Ruashi, DRC</p>
                        <p><i class="fa fa-phone fa-2x mr-3"></i>+243 999 539 100</p>
                        <p><i class="fa fa-envelope fa-2x mr-3"></i>joeldeocm88@gmail.com</p>
                    </div>
                    <hr>
                    <div class="mt-5 pb-5">
                        <a href="" class="social"> <i class="fa fa-facebook"></i> </a>
                        <a href="" class="social"> <i class="fa fa-whatsapp"></i> </a>
                        <a href="" class="social"> <i class="fa fa-instagram"></i> </a>
                        <a href="" class="social"> <i class="fa fa-phone"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection