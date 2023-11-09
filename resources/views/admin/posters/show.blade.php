@extends('layouts.app')

@section('content')
<div class="container min-height-200px" style="margin-top: 120px">
    <div class="page-header">
        <div class="row justify-content-between">
            <div class="col d-flex mb-4">
                <div class="col title">
                    <h4>Informations sur l'propriete {{$propriete->DesignProp}}</h4>
                </div>
                <div class="col">
                    <a href="{{ route('visites.index', $propriete->NumProp) }}"
                              class="btn btn-primary py-2 px-3"
                              >Reserver une visite</a>
                
                </div>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
       
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
                    <input type="text" class="form-control" value="{{ $propriete->Categorie->CodCat }}" readonly>
                </div>
            </div>
            
        </div>
        <div class="row d-flex">
            <div class="col d-flex me-3">
                @foreach ($proprietes as $propriete)
                    <div class="form-group me-5">
                        <label>Image :</label>
                        <img width="100%" height="250px" src="{{ asset('assets/uploads/proprietes/'.$propriete->Image1) }}" alt="propriete Image">
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection