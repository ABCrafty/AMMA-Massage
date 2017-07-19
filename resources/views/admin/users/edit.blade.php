@extends('admin.layouts.app')

@section('content')

    <h1>Editer un utilisateur</h1>

    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch',
            'enctype' => 'multipart/form-data', 'class' => ' form-bordered']) !!}

    @include('admin.users._form')

    {!! Form::close() !!}

@endsection