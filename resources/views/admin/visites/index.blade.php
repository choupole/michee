@extends('layouts.app')
@section('content')
<div class="container min-height-200px" style="margin-top: 140px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    {{-- <h4>Form Wizards</h4> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4 mb-4">Reservation Nouvelle visite</h4>
        </div>
        <div class="wizard-content">
            <form id="myForm" class="tab-wizard wizard-circle wizard" action="{{route('visites.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h5>Information sur la visite</h5>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom">Désignation</label>
                                <input type="text" class="form-control" name="DesignVisite">
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="description">Type de visite :</label>
                                <textarea name="TypeVisit" class="form-control h-50" placeholder="La curiosité ou le vrai désir de louer. Qu'est-ce qui vous amène ?"></textarea>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tarif</label>
                                <select class="custom-select2 form-control" style="width: 100%;" name="IdTarif">
                                    @foreach ($tarifs as $tarif)
                                    <option value="{{ $tarif->IdTarif }}">{{$tarif->DesignTarif}} : {{ $tarif->Montant }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                       
                        {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                    </div>
                  
                    
                    <button class="btn btn-primary my-4" type="submit">Envoyer</button>
                </section>
                <!-- Step 4 -->
            </form>
        </div>
    </div>
    <!-- success Popup html Start -->
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Formulaire Soumis!</h3>
                    <div class="mb-30 text-center"><img src="{{asset('AdminProp/vendors/images/success.png')}}"></div>
                    La visite a été enregistrée avec succès.
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="javascript:void(0)" id="submitFormLink" class="btn btn-primary" data-dismiss="modal">OK</a>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->
</div>
@endsection

@section('scripts')
<script>
function previewImage(event, previewId) {
    var fileInput = event.target;
    var previewImage = document.getElementById(previewId);

    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            previewImage.src = e.target.result;
        }

        reader.readAsDataURL(fileInput.files[0]);
    }
}
</script>
<script>
    function addPhoneNumberField() {
        var container = document.getElementById('phone-numbers-container');
        
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group';

        var input = document.createElement('input');
        input.type = 'text';
        input.name = 'phone_numbers[]';
        input.className = 'form-control';

        var appendDiv = document.createElement('div');
        appendDiv.className = 'input-group-append';

        var removeButton = document.createElement('button');
        removeButton.className = 'btn btn-danger';
        removeButton.type = 'button';
        removeButton.textContent = 'Supprimer';
        removeButton.addEventListener('click', function() {
            container.removeChild(inputGroup);
        });

        appendDiv.appendChild(removeButton);
        inputGroup.appendChild(input);
        inputGroup.appendChild(appendDiv);

        container.appendChild(inputGroup);
    }
    function updateFileLabel(input) {
        var fileLabel = document.getElementById('file-label');
        var fileName = input.files[0].name;
        fileLabel.textContent = fileName;
    }
</script>
<script>
    
    document.getElementById('submitFormLink').addEventListener('click', function() {
        document.getElementById('myForm').submit();
    });
</script>
 <script>
                // Récupérer les éléments du formulaire
                const imageInput = document.getElementById('imageInput');
                const imagePreview = document.getElementById('imagePreview');
            
                // Écouter l'événement de changement de fichier
                imageInput.addEventListener('change', function() {
                    const file = this.files[0];
                    
                    // Vérifier si un fichier est sélectionné
                    if (file) {
                        // Créer un objet FileReader
                        const reader = new FileReader();
                        
                        // Lorsque le chargement du fichier est terminé
                        reader.onload = function(e) {
                            // Mettre à jour l'aperçu de l'image avec la source de données
                            imagePreview.src = e.target.result;
                        }
                        
                        // Lire le fichier en tant que URL de données
                        reader.readAsDataURL(file);
                    } else {
                        // Réinitialiser l'aperçu de l'image si aucun fichier n'est sélectionné
                        imagePreview.src = '';
                    }
                });
            </script>
<script src={{asset('AdminProp/vendors/scripts/process.js')}}></script>
<script src={{asset('AdminProp/src/plugins/jquery-steps/jquery.steps.js')}}></script>
<script src={{asset('AdminProp/vendors/scripts/steps-setting.js')}}></script>
@endsection