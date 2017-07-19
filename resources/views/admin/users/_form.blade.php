<div class="form-group form-custom <?php if($errors->has('username')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('username', 'Téléphone entête', ['class' => 'control-label']) !!}
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

<div class="form-group form-custom <?php if($errors->has('description')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('description', 'Présentation', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('avatar')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('avatar', 'Email', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
        {!! $errors->first('avatar', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('password')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('password', 'Mot de passe', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
        {!! $errors->first('password', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>


</div>

<button type="submit" class="btn green-button">Mettre à jour</button>