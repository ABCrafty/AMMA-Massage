<div class="form-group form-custom <?php if($errors->has('intro')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('intro', 'Intro de la présentation', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::textarea('intro', null, ['class' => 'form-control ckeditor']) !!}
        {!! $errors->first('intro', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('content')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('content', 'Contenu principal de la présentation', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::textarea('content', null, ['class' => 'form-control ckeditor']) !!}
        {!! $errors->first('content', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('conclusion')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('conclusion', 'Conclusion de la présentation', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::textarea('conclusion', null, ['class' => 'form-control ckeditor']) !!}
        {!! $errors->first('conclusion', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('image')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('image', 'Illustration de la présentation', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('pdf')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('pdf', 'PDF de la présentation', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::file('pdf', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pdf', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('video_link')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('video_link', 'Vidéo de la présentation', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::text('video_link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('video_link', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

@push('scripts')
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
@endpush
