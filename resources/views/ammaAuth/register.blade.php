@extends('layouts.app')

@section('content')

    <div class="col-md-8">
        <h1>S'enregistrer</h1>

        {!! Form::open(['route' => ['register.store'], 'method' => 'post',
                'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}



            <div class="form-group form-custom <?php if($errors->has('username')) { echo 'has-danger';} ?>">
                <div class="col-3">
                    {!! Form::label('username', 'Nom', ['class' => 'control-label']) !!}
                </div>
                <div class="col-12">
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('username', '<span class="help-block">Ce champ est obligatoire</span>') !!}
                </div>
            </div>

            <div class="form-group form-custom <?php if($errors->has('email')) { echo 'has-danger';} ?>">
                <div class="col-3">
                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                </div>
                <div class="col-12">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<span class="help-block">Ce champ est obligatoire</span>') !!}
                </div>
            </div>

            <div class="form-group form-custom <?php if($errors->has('username')) { echo 'has-danger';} ?>">
                <div class="col-3">
                    {!! Form::label('password', 'Mot de passe', ['class' => 'control-label']) !!}
                </div>
                <div class="col-12">
                    {!! Form::password('password', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('username', '<span class="help-block">Ce champ est obligatoire</span>') !!}
                </div>
            </div>

            <button type="submit" class="btn green-button">Mettre à jour</button>

        {!! Form::close() !!}
    </div>
@endsection