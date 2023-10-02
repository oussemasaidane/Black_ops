
@extends('welcome')
@section('content')
<div class="container ">

{{--<div class="col-lg-6 col-md-12">
    <div class="card">
        <div class="card-header card-header-warning">
            <h4 class="card-title">Employees Stats</h4>
            <p class="card-category">New employees on 15th September, 2016</p>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">
                <tr><th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Country</th>
                </tr></thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>$36,738</td>
                    <td>Niger</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Minerva Hooper</td>
                    <td>$23,789</td>
                    <td>Curaçao</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sage Rodriguez</td>
                    <td>$56,142</td>
                    <td>Netherlands</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Philip Chaney</td>
                    <td>$38,735</td>
                    <td>Korea, South</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>--}}


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">

        <img style=" background-size: cover;"src="{{ Vite::asset('resources/assets/img/logo-ct.png') }}" class="img-fluid" width="100px" alt="main_logo">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav  ms-auto mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Moyen de transport</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tarifs
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">A propos de nous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact-nous</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

<div class="row mt-5">
<div class="col-lg-6">
    <h1 class="text-center mt-5"> transport en commun contribue au mieux-être des gens!</h1>
<h4 class="mt-5" style="text-align: justify">
    Il a aussi une incidence positive sur la santé publique et sur la qualité de vie des citoyens, parce qu'il réduit les nuisances sonores et abaisse les niveaux de stress, en plus d'améliorer la qualité de l'air.</h4>
</div>
<div class="col-lg-6">

<img src="{{ Vite::asset('resources/assets/img/home.webp') }}" style=" border-radius: 10%; /* Rend la div circulaire */
overflow: hidden; /* Cache les coins de l'image */
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); " >
</div>


</div>
<h1 class="text-center fw-bold mt-5">Connexion </h1>
<form class="mt-5">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
