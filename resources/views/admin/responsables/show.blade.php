@extends('admin.layouts.app')

@section('content')
<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    {{-- <h4>Form Wizards</h4> --}}
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajout responsable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4">Publication</h4>
            <p class="mb-30">Ajouter un nouveau responsable</p>
        </div>
        <div class="wizard-content">
            <form id="myForm" class="tab-wizard2 wizard-circle wizard" method="POST" action="{{ route('responsables.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <h5 class="m-3">Information du Compte</h5>
                        <section class="">
                            <div class="form-wrap max-width-600 mx-auto">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Email*</label>
                                    <div class="col-sm-8">
                                        <input type="email" name="email" class="form-control" value="{{ $responsable->email }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="password">Mot de passe*</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="password" id="password" value="{{ $responsable->password }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Confirmer le mot de passe*</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-6">
                        <h5 class="m-3">Informations Personnelles</h5>
                        <section class="col">
                            <div class="form-wrap max-width-600 mx-auto">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nom*</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="Nom" value="{{ $responsable->Nom }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Postnom</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="Postnom" value="{{ $responsable->Postnom }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Prénom*</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="Prenom" value="{{ $responsable->Prenom }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Pseudo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="Pseudo" value="{{ $responsable->Pseudo }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-sm-4 col-form-label">Sexe*</label>
                                    <div class="col-sm-8">
                                        <select class="form-control selectpicker" name="Sexe" title="Choisir un sexe" disabled>
                                            <option value="m" {{ $responsable->Sexe == 'm' ? 'selected' : '' }}>Masculin</option>
                                            <option value="f" {{ $responsable->Sexe == 'f' ? 'selected' : '' }}>Féminin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Age</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="Descript" value="{{ $responsable->AgeResp }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="Descript" value="{{ $responsable->Descript }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-primary" onclick="window.history.back();">Retour</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection