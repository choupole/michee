@extends('layouts.app')

@section('content')
    <section class="page-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advance Search -->
                    <div class="advance-search">
                        <form action="{{ route('recherche') }}" method="GET">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="query" placeholder="Que recherchez-vous ?">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="category" placeholder="Catégorie" value="{{ Request::get('category') }}">
                                </div>
                                <div class="form-group col-md-2">
                                    <button type="submit" class="btn btn-primary">Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gray">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <!-- Left sidebar -->
                <div class="col-md-8">
                    <div class="product-details">
                        <h1 class="product-title">{{ $oeuvre->nom }}</h1>
                        <div class="product-meta">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href="">{{ $oeuvre->utilisateur->nom }}</a></li>
                                <li class="list-inline-item">Categorie<a href=""> {{ $oeuvre->category->nom }}</a></li>
                            </ul>
                        </div>
                        <div id="carouselExampleIndicators" class="product-slider carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/uploads/oeuvres/'.$oeuvre->image) }}" alt="{{ $oeuvre->nom }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Product Details</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <h3 class="tab-title">Description</h3>
                                    <p>{{ $oeuvre->description }}</p>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget price text-center">
                            <h4>Art</h4>
                            <p>Kinshasa</p>
                        </div>
                        <!-- User Profile widget -->
                        <div class="widget user">
                            <img class="rounded-circle" src="{{ $oeuvre->utilisateur->profil }}" alt="">
                            <h4><a href="">{{ $oeuvre->utilisateur->prenom }} {{ $oeuvre->utilisateur->nom }}</a></h4>
                            <p class="member-time">Membre depuis {{ $oeuvre->utilisateur->created_at }}</p>
                            <ul class="list-inline mt-20">
                                <li class="list-inline-item">
                                    <a href="mailto:{{ $oeuvre->utilisateur->email }}" class="btn btn-contact">{{ $oeuvre->utilisateur->email }}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="tel:{{ $oeuvre->utilisateur->numtel }}" class="btn btn-contact">{{ $oeuvre->utilisateur->numtel }}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Coupon Widget -->
                        <div class="widget coupon text-center">
                            <!-- Coupon description -->
                            <p>Message WhatsApp : {{ $message }}</p>
                            <a href="https://wa.me/+243{{ ltrim($oeuvre->utilisateur->numtel, '0') }}?text=Je%20suis%20intéressé%20par%20l'œuvre%20{{ $oeuvre->nom }}%20{{ asset('assets/uploads/oeuvres/'.$oeuvre->image) }}" class="btn btn-primary">Contacter moi</a>
                                    <!-- Submii button -->
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Container End -->
    </section>
@endsection