<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<div class="col-md-4 col-sm-12 mb-30">
    <div class="">
        <form action="{{ route('tarifs.store') }}" method="POST">
            @csrf
            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Ajout d'un nouveau tarif</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" name="DesignTarif" placeholder="Désignation">

                            <input type="text" class="form-control" name="Montant" placeholder="Montant">
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        // Tableau de suggestions préremplies (peut être récupéré depuis une source de données)
        var categories = ["Catégorie 1", "Catégorie 2", "Catégorie 3"];
        
        // Activer l'autocomplétion sur le champ de saisie
        $("input[name='nom']").autocomplete({
            source: categories
        });
    });
</script>