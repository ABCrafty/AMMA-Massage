@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row history-container">
            <div class="intro-history">
                @if($story)
                    {!! $story->intro !!}
                @endif
            </div>

            <hr class="story-line">

            <div class="history-content">
                <div class="history-img">
                    @if($story)
                        <img src="{!! $story->image !!}" alt="">
                    @endif
                </div>
                <div class="history-text">
                    @if($story)
                        {!! $story->content !!}
                    @endif
                </div>


            </div>

            <div class="history-conclusion">
                @if($story)
                    {!! $story->conclusion !!}
                @endif
            </div>

            <div class="history-know-more">

                <div class="text-center history-title">
                    <p class="underline">Pour en savoir plus :</p>

                    <p>Portrait d'inventeur : David Palmer (En Anglais)</p>
                </div>


                <div class="history-video">
                    @if($story)
                        {!! $story->video_link !!}
                    @endif
                </div>

                <div class="text-center history-title">
                    <p>L'histoire du Massage Amma par Gary Bernard</p>
                </div>

                <div class="history-pdf">
                    @if($story)
                        <a href="{{ $story->pdf }}" target="_blank"><img src="{{ asset('image/pdf.png') }}" alt="pdf"></a>
                    @endif
                </div>

            </div>

        </div>
    </div>
@endsection