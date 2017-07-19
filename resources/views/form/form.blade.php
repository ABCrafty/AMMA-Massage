{!! Form::open(['route' => ['form1.store'], 'method' => 'POST', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal form-bordered create-page-form']) !!}

<div class="form-group<?php if($errors->has('form1_reponse1')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse1', 'À quelle fréquence avez-vous un soin de beauté ? *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse1', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse1', '<span class="haelp-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('form1_reponse2')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse2', 'Comment trouvez-vous l’estheticien qui s\'est occupé de vous ? *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse2', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse2', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('form1_reponse3')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse3', 'Quel type de traitement préférez-vous ? *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse3', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse3', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('form1_reponse4')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse4', 'Veuillez évaluer l\’estheticien d\'après les affirmations suivantes. *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse4', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse4', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('form1_reponse5')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse5', 'Quel est le niveau de votre satisfaction du traitement (suivi) et de ses résultats a présent? *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse5', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse5', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('form1_reponse6')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse6', 'Comment Valorisez vous le prix de votre soin ? *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse6', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse6', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('form1_reponse7')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse7', 'Quelle était votre impression générale de la visite de l\’estheticien? C\'était ... *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse7', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse7', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('reponse8')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse8', 'Vous êtes ... *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse8', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse8', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('form1_reponse9')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse9', 'Recommanderiez-vous ce soin à vos amis / votre famille ? *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse9', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse9', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group<?php if($errors->has('form1_reponse10')) {echo 'has-error';} ?>">
    {!! Form::label('form1_reponse10', 'Comment pourrions-nous améliorer nos services ? Merci de nous écrire vos suggestions. *', ['class'=>'col control-label']) !!}
    <div class="col-12">
        {!! Form::textarea('form1_reponse10', null, ['class'=>'form-control']) !!}
        {!! $errors->first('form1_reponse10', '<span class="help-block">:message</span>') !!}
    </div>
</div>


<div class="form-group form-actions">
    <div class="col-md-6 col-md-offset-3">
        <a class="btn btn-default" href="{!! route('customerarea.index') !!}"><i class="fa fa-angle-left"></i> Retour</a>
        <button type="submit" class="btn btn-primary">Envoyer le formulaire <i class="fa fa-angle-right"></i></button>
    </div>
</div>

<input type="checkbox" name="value[]">