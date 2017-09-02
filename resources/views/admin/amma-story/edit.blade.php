@extends('admin.layouts.app')

@section('title')
    Editer la page Histoire Amma - @parent
@endsection

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
        <li class="breadcrumb-item">Editer la page Histoire Amma</li>
    </ol>
    <h1>Editer la page Histoire Amma</h1>

    {!! Form::model($ammaStory, ['route' => ['amma-story.update', $ammaStory->id], 'method' => 'patch',
            'enctype' => 'multipart/form-data', 'class' => ' form-bordered']) !!}

    @include('admin.amma-story._form')

    <button class="btn" href="{{ route('dashboard.index') }}">Retour</button>
    <button type="submit" class="btn green-button">Mettre à jour</button>
    {!! Form::close() !!}

@endsection