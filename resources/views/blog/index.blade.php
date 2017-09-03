@extends('layouts.app')

@section('title')
    Blog - @parent
@endsection

@section('content')

    <div class="blog-index-container" style="background: url(@if($background) {{ $background->blog }} @endif() ) no-repeat center center">
        <div class="blog-contain">

            <h1 title="Retrouvez toutes mes actualités">Retrouvez toutes mes actualités</h1>
            @foreach($posts as $post)
                <div class="post custom-animated">
                    <div class="post-image">
                        <a href="{{ route('front.blog.show', $post->id) }}" title="lien vers l'article ciblé">
                            <img src="/{{ $post->illustration }}" alt="illustration" title="illustration">
                        </a>
                    </div>
                    <div class="post-menu">
                        <div class="post-title">
                            <h3 title="{{ $post->title }}">{{ str_limit($post->title, 30) }}</h3>
                        </div>
                        <div class="post-link">
                            <a href="{{ route('front.blog.show', $post->id) }}" title="lien vers l'article ciblé">Lire d'article</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

        {{ $posts->links() }}
    </div>

@endsection