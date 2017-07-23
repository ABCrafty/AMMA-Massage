@extends('admin.layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Utilisateurs</a></li>
        <li class="breadcrumb-item">Edit utilisateur</li>
    </ol
    <h1>Editer un utilisateur</h1>

    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch',
            'enctype' => 'multipart/form-data', 'class' => ' form-bordered']) !!}

    @include('admin.users._form')

    {!! Form::close() !!}

@endsection