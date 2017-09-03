<div class="form-group form-custom <?php if($errors->has('phone')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('phone', 'Téléphone entête', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        {!! $errors->first('phone', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('phone_text')) { echo 'has-danger';} ?>">
    <div class=" col col-md-3">
        {!! Form::label('phone_text', 'Texte associé au numéro de téléphone', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('phone_text', null, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_text', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>



<div class="form-group form-custom <?php if($errors->has('title')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('title', 'Titre entête', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('content_title')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('content_title', 'Contenu du texte de l\'entête', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('content_title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('content_title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('title_link')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('title_link', 'Texte du lien dans l\'entête', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('title_link', null, [ 'class' => 'form-control']) !!}
        {!! $errors->first('title_link', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('service_1')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('service_1', 'Premier service', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('service_1', null, [ 'class' => 'form-control']) !!}
        {!! $errors->first('service_1', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('service_2')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('service_2', 'Deuxième service', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('service_2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('service_2', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('service_3')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('service_3', 'Troisième service', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('service_3', null, ['class' => 'form-control']) !!}
        {!! $errors->first('service_3', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('service_4')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('service_4', 'Quatrième service', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('service_4', null, ['class' => 'form-control']) !!}
        {!! $errors->first('service_4', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_preview')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_preview', 'Titre des offres', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('offer_preview', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_preview', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_title_1')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_title_1', 'Titre première offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('offer_title_1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_title_1', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_content_1')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_content_1', 'Contenu première offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('offer_content_1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_content_1', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_link_1')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_link_1', 'Lien première offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('offer_link_1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_link_1', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_title_2')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_title_2', 'Titre deuxième offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('offer_title_2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_title_2', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_content_2')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_content_2', 'Contenu deuxième offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('offer_content_2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_content_2', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_link_2')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_link_2', 'Lien deuxième offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('offer_link_2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_link_2', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_title_3')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_title_3', 'Titre troisième offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('offer_title_3', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_title_3', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_content_3')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_content_3', 'Contenu troisième offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('offer_content_3', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_content_3', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('offer_link_3')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('offer_link_3', 'Lien troisième offre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('offer_link_3', null, ['class' => 'form-control']) !!}
        {!! $errors->first('offer_link_3', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<button type="submit" class="btn green-button">Mettre à jour</button>