@extends('admin.layouts.app')

@section('title')
    Créer un nouvel article - @parent
@endsection

@section('content')
    @include('layouts.errors._errors')

    <div class="form-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Index Blog</a></li>
            <li class="breadcrumb-item">Création d'un nouvel article</li>
        </ol>

        <h1 title="Création d'un nouveau Article">Création d'un nouveau Article</h1>
        {!! Form::open(['route' => ['blog.store'], 'method' => 'post',
                    'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}

        @include('admin.blog._form')

        <button class="btn" href="{{ route('blog.index') }}">Retour</button>
        <button type="submit" class="btn blue-button">Créer un nouvel article</button>
        {!! Form::close() !!}
    </div>
@endsection