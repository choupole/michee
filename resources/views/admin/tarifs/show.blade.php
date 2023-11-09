@extends('admin.layouts.app')
@section('content')
<form action="{{ route('categories.update', $categories->CodCat) }}" method="POST">
@method('PUT')
@csrf
    <div class="card-header">
        <h4 class="modal-title" id="myLargeModalLabel">Modifier une Categorie</h4>
    </div>
    <div class="card-body">
        <input type="text" class="form-control" name="LibCat" value="{{ $categories->LibCat}}">
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>
<script>
    
    document.getElementById('submitFormLink').addEventListener('click', function() {
        document.getElementById('myForm').submit();
    });
</script>
<script src={{asset('AdminProp/vendors/scripts/process.js')}}></script>
<script src={{asset('AdminProp/src/plugins/jquery-steps/jquery.steps.js')}}></script>
<script src={{asset('AdminProp/vendors/scripts/steps-setting.js')}}></script>
@endsection