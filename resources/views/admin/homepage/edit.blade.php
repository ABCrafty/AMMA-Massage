@extends('admin.layouts.app')

@section('content')
    <div class="form-container">
        <h1>Edit du contenu page d'accueil</h1>



        @if(!$contentExists)
        {!! Form::open(['route' => ['homepage.store'], 'method' => 'post',
            'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}

            @include('admin.homepage._form')

        {!! Form::close() !!}
        @else

            {!! Form::model($homepage, ['route' => ['homepage.update', $homepage->id], 'method' => 'patch',
            'enctype' => 'multipart/form-data', 'class' => ' form-bordered']) !!}

                @include('admin.homepage._form')

            {!! Form::close() !!}
         @endif
    </div>
@endsection