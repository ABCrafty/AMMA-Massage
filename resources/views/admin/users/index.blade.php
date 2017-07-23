@extends('admin.layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
        <li class="breadcrumb-item">Index Utilisateurs</li>
    </ol>
    <h1>Index utilisateurs</h1>


    <table class="table table-bordered table-striped dataTable" id="listingUsers">
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>


    </table>

    @push('scripts')
    <script>
        $(document).ready(function () {
            $('#listingUsers').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                language: {
                    processing: "Traitement en cours...",
                    search: 'Recherche : ',
                    lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    paginate : {
                        first : '<i class="fa fa-fast-backward" aria-hidden="true"></i>',
                        previous : '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>',
                        next : '<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>',
                        last: '<i class="fa fa-fast-forward" aria-hidden="true"></i>',
                    }
                },
                ajax: '{!! route('datatables.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'username', name: 'username'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });

    </script>
    @endpush
@endsection