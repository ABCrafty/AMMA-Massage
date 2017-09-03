@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row history-container">
            <div class="intro-history">
                {!! $story->intro !!}
            </div>

            <hr class="story-line">

            <div class="history-content">
                <div class="history-img">
                    <img src="{!! $story->image !!}" alt="">
                </div>
                <div class="history-text">
                    {!! $story->content !!}
                </div>


            </div>

            <div class="history-conclusion">
                {!! $story->conclusion !!}
            </div>

            <div class="history-know-more">

                <div class="text-center history-title">
                    <p class="underline">Pour en savoir plus :</p>

                    <p>Portrait d'inventeur : David Palmer (En Anglais)</p>
                </div>


                <div class="history-video">
                    {!! $story->video_link !!}
                </div>

                <div class="text-center history-title">
                    <p>L'histoire du Massage Amma par Gary Bernard</p>
                </div>

                <div class="history-pdf">
                    <a href="{{ $story->pdf }}" target="_blank"><img src="{{ asset('image/pdf.png') }}" alt="pdf"></a>
                </div>

            </div>

        </div>
    </div>
@endsection