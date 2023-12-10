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
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Image d'échantillon">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form class="container" method='POST' action="{{ route('create.user') }}">
    @if($errors->any())
    <div class="bg-danger bg-opacity-50 p-3">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf

    <p class="h4 mb-4">S'inscrire</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- Prénom -->
            <input type="text" name='name' id="defaultRegisterFormFirstName" class="form-control mb-4"
                placeholder="Nom complet">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" name='email' id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Mot de passe -->
    <input type="password" name='password' id="defaultRegisterFormPassword" class="form-control"
        placeholder="Mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        Au moins 8 caractères et 1 chiffre
    </small>

    <!-- Re-Mot de passe -->
    <input type="password" name='password_confirmation' id="defaultRegisterFormPasswordConfirmation"
        class="form-control" placeholder="Re-Mot de passe"
        aria-describedby="defaultRegisterFormPasswordHelpBlockConfirmation">

    <!-- Bouton d'inscription -->
    <button class="btn btn-info my-4 btn-block" type="submit">S'inscrire</button>

    <hr>

    <!-- Conditions d'utilisation -->
    <p>En cliquant sur
        <em>S'inscrire</em>, vous acceptez nos
        <a href="" target="_blank">conditions d'utilisation</a>
</form>

                <!-- Formulaire d'inscription par défaut -->
            </div>
        </div>
    </div>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Droits d'auteur -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. Tous droits réservés.
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
</div>
</div>
</div>
