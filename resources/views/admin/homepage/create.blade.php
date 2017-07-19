@extends('admin.layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="form-container">
    {!! Form::open(['route' => ['homepage.store'], 'method' => 'post',
                'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}

    @include('admin.homepage._form')

    {!! Form::close() !!}
</div>
@endsection