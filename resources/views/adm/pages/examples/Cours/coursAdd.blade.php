@extends('layout2')

@section('contentAd')

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{asset('../../dist/img/k.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
          <a href="#" class="nav-link">
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
              <a href="../charts/inline.php" class="nav-link">
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
              <a href="../examples/profile.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/cours" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cours</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/cours/create" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Cours Add</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/contacts.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
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
                  <p>Catgorie Add</p>
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
              <a href="../examples/register.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/forgot-password.php" class="nav-link">
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
              <a href="../examples/lockscreen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lockscreen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/404.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 404</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/500.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 500</p>
              </a>
            </li>
          </ul>
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
          <h1>Cours Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Cours Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <form action="/cours" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Nom du cours</label>
                    <input type="text" id="titre_cours" name="titre_cours" class="form-control @error('titre_cours') is-invalid @enderror">
                    @error('titre_cours')
                      <div class="is-invalid">
                        {{ $errors->first('titre_cours')}}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Description du cours</label>
                    <textarea id="description", name="description" class="form-control @error('description') is-invalid @enderror" rows="4"></textarea>
                    @error('description')
                      <div class="is-invalid">
                        {{ $errors->first('description')}}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputProjectLeader">Titulaire du Cours</label>
                    <input type="text" id="titulaire" name="titulaire" class="form-control @error('titulaire') is-invalid @enderror">
                    @error('titulaire')
                      <div class="is-invalid">
                        {{ $errors->first('titulaire')}}
                      </div>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-md-6">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Detail Cours</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSpentBudget">Catégorie du Cours</label>
                    <select class="custom-select @error('categorie_id') is-invalid @enderror" name="categorie_id" id="categorie_id">
                        @foreach($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>
                        @endforeach
                    </select>
                    @error('categorie_id')
                      <div class="is-invalid">
                        {{ $errors->first('categorie_id') }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputEstimatedBudget">Niveau du Cours</label>
                    <input type="number" id="niveau" name="niveau" class="form-control @error('niveau') is-invalid @enderror">
                    
                    @error('niveau')
                      <div class="is-invalid">
                        {{ $errors->first('niveau') }}
                      </div>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="inputSpentBudget">Durée</label>
                    <input type="text" id="duree" name="duree" class="form-control  @error('duree') is-invalid @enderror">
                    @error('duree')
                      <div class="is-invalid">
                        {{ $errors->first('duree') }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputSpentBudget">Etat</label>
                    <select class="custom-select @error('etat') is-invalid @enderror" name="etat" id="etat">
                      <option value="1">Disponoble</option>
                      <option value="0">Indisponible</option>
                    </select>
                    @error('etat')
                      <div class="is-invalid">
                        {{ $errors->first('etat') }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="image">
                      <label class="custom-file-label" for="validatedCustomFile">Chosir une image...</label>
                      @error('image')
                      <div class="invalid-feedback">{{$errors->first('image')}}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Create new Cours" class="btn btn-success float-right">
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
