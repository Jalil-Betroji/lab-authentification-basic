@extends('layouts.layout')
<style>
  .divider:after,
  .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
  }

  .h-custom {
    height: calc(100% - 73px);
  }

  @media (max-width: 450px) {
    .h-custom {
      height: 100%;
    }
  }
</style>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
          alt="Image d'exemple">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form class="container" method='POST'>

          @if($errors->any())
          <div class="bg-danger bg-opacity-50 p-3">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @csrf

          <p class="h4 mb-4">Connexion</p>

          <!-- E-mail -->
          <input type="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

          <!-- Mot de passe -->
          <input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mot de passe">

          <div class="d-flex justify-content-around">
            <div>
              <!-- Se souvenir de moi -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Se souvenir de moi</label>
              </div>
            </div>
            <div>
              <!-- Mot de passe oublié -->
              <a href="">Mot de passe oublié ?</a>
            </div>
          </div>

          <!-- Bouton de connexion -->
          <button class="btn btn-info btn-block my-4" type="submit">Se connecter</button>

          <!-- S'enregistrer -->
          <p>Pas encore membre ?
            <a href="{{route('register')}}">S'enregistrer</a>
          </p>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Droits d'auteur -->
    <div class="text-white mb-3 mb-md-0">
      Droits d'auteur © 2020. Tous droits réservés.
    </div>
    <!-- Droits d'auteur -->

    <!-- Droite -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Droite -->
  </div>
</section>
