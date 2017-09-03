@extends('admin.layouts.app')

@section('title')
    Gestion des articles - @parent
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
        <li class="breadcrumb-item">Index Blog</li>
    </ol>

    <a class="green-button" href="{{ route('blog.create') }}">Créer un nouvel article</a>
    <h1>Index Blog</h1>


    <table class="table table-bordered table-striped dataTable" id="listingBlog">
        <thead>
        <th>ID</th>
        <th>Titre</th>
        <th>Actions</th>
        </thead>


    </table>

    @push('scripts')
    <script>
        $(document).ready(function () {
            $('#listingBlog').DataTable({
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
                ajax: '{!! route('datatables.blogData') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });

    </script>
    @endpush
@endsection