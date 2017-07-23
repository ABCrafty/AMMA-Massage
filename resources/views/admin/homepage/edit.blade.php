@extends('admin.layouts.app')

@section('content')
    <div class="form-container">
        @include('layouts.errors._errors')
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
            <li class="breadcrumb-item">Edit page d'accueil</li>
        </ol>

        <h1>Edition du contenu page d'accueil</h1>

        {!! Form::model($homepage, ['route' => ['homepage.update', $homepage->id], 'method' => 'patch',
        'enctype' => 'multipart/form-data', 'class' => ' form-bordered']) !!}

            @include('admin.homepage._form')

        {!! Form::close() !!}

    </div>
@endsection