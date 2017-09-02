@extends('admin.layouts.app')

@section('title')
    Créer la page Histoire Amma - @parent
@endsection

@section('content')
    @include('layouts.errors._errors')

    <div class="form-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
            <li class="breadcrumb-item">Création de la page Histoire Amma</li>
        </ol>

        <h1 title="Création de la page Histoire Amma">Création de la page Histoire Amma</h1>
        {!! Form::open(['route' => ['amma-story.store'], 'method' => 'post',
                    'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}

        @include('admin.amma-story._form')

        <button class="btn" href="{{ route('dashboard.index') }}">Retour</button>
        <button type="submit" class="btn green-button">Créer la page Histoire Amma</button>
        {!! Form::close() !!}
    </div>
@endsection