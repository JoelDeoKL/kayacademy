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
      
      @foreach($chapitres as $chapitre)

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Chapter Detail : <h6>{{$chapitre->description_chapitre}}</h6></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Chapter Name</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$chapitre->titre_chapitre}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Number Comment</span>
                      <span class="info-box-number text-center text-muted mb-0">1</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 

        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->



    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header"> 
          <h3 class="card-title">Vidéo</h6></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
          
        </div>

        <div class="card-body">
        <div class="container mt-5" style="margin-bottom: 100px;">
        <h3>Chapitre : <em>{{$chapitre->titre_chapitre}}</em></h3>

    <div class="row">

        <div class="col-lg-8 rounded">
            {{$chapitre->lien}}
            <video src="videos/r.mp4" controls poster="{{asset('images/front-end-nd0011-hero-image.jpg')}}" class="img-fluid rounded-top"></video>
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
                <div>
                  <a href="/commentaire" class="btn btn-primary my-3">Voir les commentaires</a>
                </div>
            </nav>        
        </div>
        @endforeach
    </div>
    
    </div>

    

        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    <!-- Main content -->


@endsection