<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('backend/img/logo/logo.png')}}" rel="icon">
  <title>Gestion de bibliothèque</title>
  <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('backend/img/logo/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">BIBLIOTHEQUE</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Navigation
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Paramétrage</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Paramétrage</h6>
            <a class="collapse-item" href="{{ url('/classes') }}">Classe</a>
            <a class="collapse-item" href="#">Livre</a>
            <a class="collapse-item" href="#">Importation</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Saisie</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Saisie</h6>
            <a class="collapse-item" href="{{ URL::to('etudiants.create') }}">Inscirption</a>
            <a class="collapse-item" href="#">Emprunt de livre</a>
            <a class="collapse-item" href="#">Dépot de livre</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Edition</span>
        </a>
        <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Edition</h6>
            <a class="collapse-item" href="#">Liste classe</a>
            <a class="collapse-item" href="#">Livre par auteur</a>
            <a class="collapse-item" href="#">Emprunts par période</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-warning badge-counter">2</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                      having.</div>
                    <div class="small text-gray-500">Udin Cilok · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-default"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                      say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Jaenab · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-tasks fa-fw"></i>
                <span class="badge badge-success badge-counter">3</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Task
                </h6>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Design Button
                      <div class="small float-right"><b>50%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Make Beautiful Transitions
                      <div class="small float-right"><b>30%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Create Pie Chart
                      <div class="small float-right"><b>75%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('backend/img/boy.png')}}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{Auth::user()}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ETUDIANTS</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Etudiants</li>
            </ol>
          </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Ajouter un étudiant
  </button>
  <hr>
  <table class="table table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
        <th scope="col">Matricule</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom(s)</th>
        <th scope="col">Classe</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php($i=1)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>klzdkdklsd</td>
            <td>dkdfkklsdf</td>
            <td>dkdfkklsdf</td>
            <td>dkdfkklsdf</td>
            <td>dkdfkklsdf</td>
            <td>
                <a href="#" class="link-primary"><button type="button" class="btn btn-warning">Plus d'infos</button></a>
                <a href="#" class="link-primary"><button type="button" class="btn btn-primary">Modifier</button></a>
                <a href="#" class="link-secondary" class="d-inline-block"><button type="button" class="btn btn-danger">Supprimer</button></a>
            </td>
          </tr>
    </tbody>
</table>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" class="modal-dialog modal-dialog-centered modal-dialog-scrollable" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enregistrement d'un étudiant</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="validationServer01">Matricule étudiant</label>
                <input type="text" name="matricule" id="matricule" placeholder="Matricule"
                 class="form-control" id="validationServer01"
                >
                @error('matricule')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="validationServer01">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom"
                 class="form-control" id="validationServer01"
                >
                @error('nom')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="validationServer01">Prénom(s)</label>
                <input type="text" name="prenom" id="prenom" placeholder="Prénom"
                 class="form-control" id="validationServer01"
                >
                @error('prenom')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="validationServer01">Date de naissance</label>
                <input type="date" name="date" id="date" placeholder=" "
                 class="form-control" id="validationServer01"
                >
                @error('date')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="validationServer01">Lieu de naissance</label>
                <input type="text" name="lieu" id="lieu" placeholder="lieu"
                 class="form-control" id="validationServer01"
                >
                @error('lieu')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Sexe</label>
                <select class="form-control" name="sexe" value="{{old('sexe')}}" id="exampleFormControlSelect1">
                  <option>Masculin</option>
                  <option>Féminin</option>
                </select>
                @error('sexe')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="custom-file">
                  <input type="file" name="photo" value="{{old('photo')}}" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Sélectionner une photo</label>
                </div>
                @error('Photo')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="custom-file">
                  <input type="file" name="cv" value="{{old('cv')}}" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Téléverser votre CV</label>
                </div>
                @error('cv')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Sélectionner la classe</label>
                <select class="form-control" name="foreign_classe" value=" " id="exampleFormControlSelect1">
                    <option>Masculin</option>
                </select>
                @error('sexe')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-success">Enregistrer</button>
        </div>
      </div>
    </div>
  </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="#" target="_blank">MASTER 1 SITW</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('backend/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset('backend/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('backend/js/demo/chart-area-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>

</html>
