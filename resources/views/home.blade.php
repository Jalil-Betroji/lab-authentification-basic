@extends('layouts.layout')

<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                            <img
                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                class="rounded-circle img-fluid" style="width: 100px;" />
                        </div>
                        <h4 class="mb-2">{{Auth()->user()->name}}</h4>
                        <p class="text-muted mb-4">@By Jalil Betroji <span class="mx-2">|</span> <a href="https://github.com/Jalil-Betroji">GitHub|Profile</a></p>
                        <div class="mb-4 pb-2">
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-twitter fa-lg"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-skype fa-lg"></i>
                            </button>
                        </div>
                        <form action="{{route('logout')}}" method='POST'>
                            @csrf
                            @method('delete')
                            <button class="btn btn-primary btn-rounded btn-lg">Deconnecter</button>
                        </form>
                           
                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                            <div>
                                <p class="mb-2 h5">8471 $</p>
                                <p class="text-muted mb-0">Solde du portefeuille</p>
                            </div>
                            <div class="px-3">
                                <p class="mb-2 h5">8512 $</p>
                                <p class="text-muted mb-0">Montants des revenus</p>
                            </div>
                            <div>
                                <p class="mb-2 h5">14751 $</p>
                                <p class="text-muted mb-0">Transactions totales</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Fin de votre projet ici -->

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Scripts personnalisés -->
<script type="text/javascript"></script>
