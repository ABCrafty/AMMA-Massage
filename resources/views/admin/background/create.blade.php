@extends('admin.layouts.app')

@section('title')
    Uploader de nouveaux fonds d'écran - @parent
@endsection

@section('content')
    @include('layouts.errors._errors')

    <div class="form-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
            <li class="breadcrumb-item">Uploads de fonds d'écran</li>
        </ol>

        <h1 title="Upload de fonds d'écran">Upload de fonds d'écran</h1>
        {!! Form::open(['route' => ['background.store'], 'method' => 'post',
                    'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}

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
        <button type="submit" class="btn greenbutton">Uploader de nouveaux fonds d'écran</button>
        {!! Form::close() !!}
    </div>
@endsection