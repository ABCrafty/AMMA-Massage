@extends('admin.layouts.app')

@section('title')
    Editer un article - @parent
@endsection

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Index Blog</a></li>
        <li class="breadcrumb-item">Editer un article</li>
    </ol>
    <h1>Editer un article</h1>

    {!! Form::model($post, ['route' => ['blog.update', $post->id], 'method' => 'patch',
            'enctype' => 'multipart/form-data', 'class' => ' form-bordered']) !!}

    @include('admin.blog._form')

    <button class="btn" href="{{ route('blog.index') }}">Retour</button>
    <button type="submit" class="btn blue-button">Mettre à jour</button>
    {!! Form::close() !!}

@endsection