@extends('layout2')

@section('contentAd')

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{asset('../../dist/img/k.jpg')}}" alt="KayAcademy" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">KayAcademy</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('../../dist/img/joel.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Joel Deo</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="/accueil" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/accueil" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Charts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inline</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="/categorie" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/categorie/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorie Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/chapitre" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chapitres</p>
                </a>
              </li>
              
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
          </ul>

        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Extras
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../examples/login.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Login</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Forgot Password</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/recover-password.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Recover Password</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lockscreen</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 404</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 500</p>
              </a>
            </li>
            
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chapitre Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chapitre Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->

      <div class="card">
        <div class="card-header">

        <div class="row">
        <div class="col-lg-8 mt-5">
            <h2 class="mt-5">Commentaires</h2>
  
            @foreach($commentaires as $commentaire)
              <div class="row mt-5">
                  <div class="col-2">
                      <img src="images/service.png" class="img-fluid" alt="">
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
                        @foreach($commentaires as $commentaire)
                          <input type="hidden" value="{{$commentaire->chapitres_id}}" id="chapitres_id" name="chapitres_id" class="form-control @error('chapitres_id') is-invalid @enderror">
                        @endforeach

                        @error('chapitres_id')
                        <div class="is-invalid">
                            {{ $errors->first('chapitres_id') }}
                        </div>
                        @enderror
                        <div class="mt-4">
                            <input type="submit" value="Commenter" class="btn btn-success float-right">
                        </div>
                    </div>
                </form>
            </div>
            
          </div> 

        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->


    <!-- /.content -->
    <!-- Main content -->


@endsection