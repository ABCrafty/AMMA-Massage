@extends('admin.layouts.app')

@section('content')
    @include('layouts.errors._errors')

    <div class="form-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
            <li class="breadcrumb-item">Création page d'accueil</li>
        </ol>

        <h1>Création du contenu de la page d'accueil</h1>
        {!! Form::open(['route' => ['homepage.store'], 'method' => 'post',
                    'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}

        @include('admin.homepage._form')

        {!! Form::close() !!}
    </div>
@endsection