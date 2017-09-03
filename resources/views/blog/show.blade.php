@extends('layouts.app')


@section('title')
    {{ $post->title }} - @parent
@endsection
@section('content')


    <div class="blog-show-container">
        <div class="blog-content">
            <h1 title="{{ $post->title }}">{{ $post->title }}</h1>

            <article role="article">
                <div class="article">
                    {!! $post->body !!}
                </div>
            </article>
        </div>

        <div class="blog-other-content">
            <div class="post-credits">
                <div class="post-user">
                    <div class="post-user-picture">
                        @if($post->user->avatar)
                            <img src="/{!! $post->user->avatar !!}" alt="">
                        @else
                            <img src="{!!  url('image/gravatar.png') !!}" alt="">
                        @endif
                    </div>

                    <p>A propos de {{ $post->user->username }}</p>
                </div>
                <div class="post-user-presentation">
                    <p>{{ $post->user->description }}</p>
                </div>


            </div>

            <div class="other-posts">
                <h2 title="à lire aussi">A lire aussi</h2>
                @foreach($posts as $otherPost)
                    <div class="other-post">
                        <div class="other-post-image">
                            <a href="{{ route('front.blog.show', $otherPost->id) }}">
                                <img src="/{{ $otherPost->illustration }}" alt="illustration autre article">
                            </a>
                        </div>
                        <div class="other-post-menu">
                            <div class="other-post-title">
                                <h3>{{ str_limit($otherPost->title, 30) }}</h3>
                            </div>
                            <div class="other-post-link">
                                <a title="lien vers autre article" href="{{ route('front.blog.show', $otherPost->id) }}">Lire l'article</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection