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
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="" class="nav-link">
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
              <a href="" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Cours</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/cours/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cours Add</p>
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
              <a href="" class="nav-link">
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
              <a href="" class="nav-link">
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
          <h1>Cours</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Cours</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
  <!-- Default box -->

  <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                  <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Name of Cours</span>
                    <span class="info-box-number text-center text-muted mb-0">Titre</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                  <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Level of Cours</span>
                    <span class="info-box-number text-center text-muted mb-0">1</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                  <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Number of Modules</span>
                    <span class="info-box-number text-center text-muted mb-0">1</span>
                  </div>
                </div>
              </div>
            </div>
          <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                ID
              </th>
              <th style="width: 15%">
                Module Name
              </th>
              <th style="width: 15%">
                  Description Module
              </th>
              <th style="width: 15%">
                  Numbre Chapter
              </th>
              <th style="width: 15%">
                Cours Progress
              </th>
              <th style="width: 8%" class="text-center">
                Status
              </th>
              <th style="width: 35%">
                  Opérations
              </th>
            </tr>
          </thead>
          <tbody>
          @foreach($modules as $module)
              <tr>
                <td>
                  <img src="{{asset('storage/' . $module->image)}}" class="img-thumnail" width=200 alt="categorie-image">
                  {{$module->id}}
                </td>
                <td>
                  <a>
                  {{$module->titre_module}}
                  </a>
                  <br/>
                  <small>
                    {{$module->created_at}}
                  </small>
                </td>
                <td>
                  {{$module->description_module}}
                </td>
                <td>
                5
                </td>
                <td class="project_progress">
                  <div class="progress progress-sm">
                      <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                      </div>
                  </div>
                  <small>
                      57% Complete
                  </small>
                </td>
                <td class="project-state">
                    <span class="badge badge-success">{{$module->etat ? 'Disponible' : 'Indisponible'}}</span>
                </td>
                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="/module/{{$module->id}}">
                    <i class="fas fa-folder">
           ;         </i>
                    View
                  </a>
                  <a class="btn btn-primary btn-sm" href=""?>
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href=""?>
                    <i class="fas fa-trash">
                    </i>
                    Delete
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div>
          <a href="/module/create" class="btn btn-primary my-3">Ajouter un module</a>
        </div>
        <div>
          <a href="/chapitre" class="btn btn-primary my-3">Voir les chapitres</a>
        </div>
    </div>

</section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection