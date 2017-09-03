@extends('admin.layouts.app')

@section('title')
    Editer les fonds d'écran - @parent
@endsection

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
        <li class="breadcrumb-item">Editer les fonds d'écran</li>
    </ol>
    <h1>Editer les fonds d'écran</h1>

    {!! Form::model($background, ['route' => ['background.update', $background->id], 'method' => 'patch',
            'enctype' => 'multipart/form-data', 'class' => ' form-bordered']) !!}

    <div class="form-group form-custom <?php if($errors->has('homepage')) { echo 'has-danger';} ?>">
        <div class="col-3">
            {!! Form::label('homepage', "Fond d'écran de la page d'accueil", ['class' => 'control-label']) !!}
        </div>

        <div class="col-12">
            {!! Form::file('homepage', null, ['class' => 'form-control']) !!}
            {!! $errors->first('homepage', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <div class="form-group form-custom <?php if($errors->has('blog')) { echo 'has-danger';} ?>">
        <div class="col-3">
            {!! Form::label('blog', "Fond d'écran de la page blog", ['class' => 'control-label']) !!}
        </div>

        <div class="col-12">
            {!! Form::file('blog', null, ['class' => 'form-control']) !!}
            {!! $errors->first('blog', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <button class="btn" href="{{ route('dashboard.index') }}">Retour</button>
    <button type="submit" class="btn blue-button">Uploader de nouveaux fonds d'écran</button>
    {!! Form::close() !!}

@endsection