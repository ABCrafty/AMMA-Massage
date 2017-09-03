<div class="form-group form-custom <?php if($errors->has('title')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('title', 'Titre de l\'article', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('body')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('body', 'Contenu de l\'article', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">

        {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
        {!! $errors->first('body', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

@push('scripts')
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
@endpush
<div class="form-group form-custom <?php if($errors->has('illustration')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('illustration', 'Illustration de l\'article', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::file('illustration', null, ['class' => 'form-control']) !!}
        {!! $errors->first('illustration', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>
