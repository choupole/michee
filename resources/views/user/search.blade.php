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

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="category-sidebar">
                        <div class="widget category-list">
                            <h4 class="widget-header">Categories</h4>
                            <ul class="category-list">
                                @foreach ($categories as $categorie)
                                    <li>
                                        <a href="category.html">{{ $categorie->nom }} <span>{{ $categorie->oeuvres->count() }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="product-grid-list">
                        <div class="row mt-30">
                            @foreach ($oeuvres as $oeuvre)
                                <div class="col-sm-12 col-lg-4 col-md-6">
                                    <!-- product card -->
                                    <div class="product-item bg-light">
                                        <div class="card">
                                            <div class="thumb-content">
                                                <a href="{{ route('oneOeuvre.show', ['id' => $oeuvre->id]) }}">
                                                    <img class="card-img-top img-fluid img-custom" src="{{ asset('assets/uploads/oeuvres/'.$oeuvre->image) }}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="">{{ $oeuvre->nom }}</a></h4>
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item">
                                                        <a href=""><i class="fa fa-folder-open-o"></i>{{ $oeuvre->categorie->nom }}</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href=""><i class="fa fa-calendar"></i>{{ $oeuvre->publication_date }}</a>
                                                    </li>
                                                </ul>
                                                <p class="card-text">{{ $oeuvre->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                @if ($oeuvres->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link" aria-hidden="true">&laquo;</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $oeuvres->appends(['category' => Request::get('category')])->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            @endif
                            
                            @for ($i = 1; $i <= $oeuvres->lastPage(); $i++)
                                @if ($i <= 3 || $i === $oeuvres->currentPage() || $i === $oeuvres->lastPage())
                                    <li class="page-item {{ $oeuvres->currentPage() === $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $oeuvres->appends(['category' => Request::get('category')])->url($i) }}">{{ $i }}</a>
                                    </li>
                                @elseif ($i === 4 && $i !== $oeuvres->lastPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">...</span>
                                    </li>
                                @endif
                            @endfor
                            
                            @if ($oeuvres->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $oeuvres->appends(['category' => Request::get('category')])->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link" aria-hidden="true">&raquo;</span>
                                </li>
                            @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection