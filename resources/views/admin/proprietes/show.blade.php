@extends('layouts.app')

@section('content')
<div class="min-height-200px" style="margin-top: 120px">
    <div class="container page-header mb-5">
        <div class="row ">
            <div class="col-md-6'">
                <div class="form-group">
                    <h4>Informations sur l'propriete {{$propriete->DesignProp}}</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <a href="{{ route('visites.index', $propriete->NumProp) }}"
                              class="btn btn-primary py-2 px-3"
                              >Demander une visite</a>
                    <a href="{{ route('visites.index', $propriete->NumProp) }}"
                              class="btn btn-primary py-2 px-3"
                              >Contacter le proprietaire</a>
                
                </div>
            </div>
        </div>
    </div>

    <div class="container pd-20 card-box mb-30">
       
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nom de l'propriete:</label>
                    <input type="text" class="form-control" value="{{ $propriete->DesignProp }}" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" class="form-control" value="{{ $propriete->Descript }}" readonly>
                </div>
            </div>
            
            
            <div class="col-md-6">
                <div class="form-group">
                    <label>Categorie:</label>
                    <input type="text" class="form-control" value="{{ $propriete->Categorie->LibCat }}" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Propriétaire :</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->Nom }}" readonly>
                </div>
            </div>
            
        </div>
        <div class="row d-flex">
            <div class="col d-flex me-3">
                <div class="form-group">
                    <label>Image :</label>
                    <div class="slider">
                        <img width="100%" src="{{ asset('assets/uploads/proprietes/'.$propriete->Image1) }}" alt="propriete Image" class="slider-image mb-5">
                        <img width="100%" src="{{ asset('assets/uploads/proprietes/'.$propriete->Image2) }}" alt="propriete Image" class="slider-image mb-5">
                        <img width="100%" src="{{ asset('assets/uploads/proprietes/'.$propriete->Image3) }}" alt="propriete Image" class="slider-image mb-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });
</script>
@endsection