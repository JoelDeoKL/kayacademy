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
              <a href="/cours" class="nav-link">
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
              <a href="/cours" class="nav-link">
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
                <a href="/categorie" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categorie.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catgorie Add</p>
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
          <h1>Detail {{$cours->titre_cours}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail</li>
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
        <h3 class="card-title">Detail cours</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <h1>Voici les modules que nous offrons dans la formation {{$cours->titre_cours}}</h1>
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                ID
              </th>
              <th style="width: 15%">
                Module Name
              </th>
              <th style="width: 30%">
                  Description Cours
              </th>
              <th style="width: 15%">
                  Statuts
              </th>
              <th style="width: 30%">
                  Opérations
              </th>
            </tr>
          </thead>
          <tbody>
          @php
            $i = 0;
          @endphp
            @foreach($modules as $module)
              <tr>
                <td>
                <img src="{{asset('storage/' . $module->image)}}" class="img-thumnail" width=200 alt="module-image">
                    {{ ++$i }}
                </td>
                <td>
                    {{$module->titre_module}}
                </td>
                <td>
                    {{$module->description_module}}
                </td>
                <td class="project-state">
                    <span class="badge badge-success">{{$module->etat ? 'Disponible' : 'Indisponible'}}</span>
                </td>
                <td class="project-actions text-right">
                    <form action="{{ route('module.destroy', $module->id) }}" method="POST">

                      <a class="btn btn-primary btn-sm" href="{{route('module.show', $module->id)}}" title="show">
                        <i class="fas fa-folder">
                        </i>
                        View
                      </a>
                      <a class="btn btn-primary btn-sm" href="{{route('module.edit', $module->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                      </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                          <i class="fas fa-trash">
                            </i>
                            Delete
                        </button>
                    </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
<div>
  <a href="{{route('module.create')}}" class="btn btn-primary my-3">Ajouter une module</a>
</div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection