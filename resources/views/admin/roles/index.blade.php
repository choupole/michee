@extends('admin.layouts.app')
@section('content')
<div class="min-height-200px">
    <div class="page-header">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><p>{{ $message }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>DataTable</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">role</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <a href="#" class="btn  btn-outline-primary" data-toggle="modal" data-target="#Medium-modal" type="button">
                        {{-- <img src="vendors/images/modal-img2.jpg" alt="modal"> --}}Nouveau
                    </a>
                    
                    {{-- <a class="btn  btn-outline-primary " href="#" role="button" data-toggle="dropdown">
                        
                    </a> --}}
                    @include('admin.roles.create')
                </div>
            </div>
        </div>
    </div>
    <!-- Export Datatable start -->
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-blue h4">Listes des role</h4>
        </div>
        <div class="pb-20">
            <table class="table hover data-table-export nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Id</th>
                        <th>role</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td class="table-plus"> {{$role->id}} </td>
                        <td> {{$role->name}} </td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    @access('read', 'role')
                                <a class="dropdown-item" href="{{ route('roles.show', $role->id) }}"><i class="dw dw-eye"></i> Voir</a>
                                    @endaccess

                                    @access('delete', 'role')
                                    @csrf
                                    @method('DELETE')
                                    <a class="dropdown-item" href="{{ route('roles.destroy',$role->id) }}" onclick="supprimer(event)" item="Voulez-vous supprimer la role {{ $role->name }}" data-toggle="modal" data-target="#supprimer">
                                        <i class="dw dw-delete-3"></i> Supprimer					
                                    </a>
                                    @endaccess
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Export Datatable End -->
</div>
@endsection


@section('scripts')
	<!-- buttons for Export datatable -->
	<script src={{asset('AdminADP/src/plugins/datatables/js/dataTables.buttons.min.js')}}></script>
	<script src={{asset('AdminADP/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}></script>
	<script src={{asset('AdminADP/src/plugins/datatables/js/buttons.print.min.js')}}></script>
	<script src={{asset('AdminADP/src/plugins/datatables/js/buttons.html5.min.js')}}></script>
	<script src={{asset('AdminADP/src/plugins/datatables/js/buttons.flash.min.js')}}></script>
	<script src={{asset('AdminADP/src/plugins/datatables/js/pdfmake.min.js')}}></script>
	<script src={{asset('AdminADP/src/plugins/datatables/js/vfs_fonts.js')}}></script>
				<!-- Datatable Setting js -->
	<script src={{asset('AdminADP/vendors/scripts/datatable-setting.js')}}></script>
@endsection