<div class="form-group form-custom <?php if($errors->has('username')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('username', "Nom de l'utilisateur", ['class' => 'control-label']) !!}
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
        {!! Form::textarea('description', null, ['class' => 'form-control form-description']) !!}
        {!! $errors->first('description', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
    <div class="countdown-description">
        <span id="chars">140</span> caractères restant
    </div>

    @push('scripts')
    <script>
        let maxLength = 140;
        $('.form-description').keyup(function() {
            let length = $(this).val().length;
            let newLength = maxLength-length;
            $('#chars').text(newLength);

            if(length > 140) {
                $('.countdown-description').css('color', 'red');
            }
        });
    </script>
    @endpush
</div>

<div class="form-group form-custom <?php if($errors->has('avatar')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('avatar', 'Avatar', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
        {!! $errors->first('avatar', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<button type="submit" class="btn green-button">Mettre à jour</button>