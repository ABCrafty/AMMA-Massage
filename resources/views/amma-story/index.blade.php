@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row history-container">
            <div class="intro-history">
                {!! $story->intro !!}
            </div>

            <hr class="story-line">

            <div class="history-content">
                <div class="history-text">
                    {!! $story->content !!}
                </div>

                <div class="history-img">
                    <img src="{!! $story->image !!}" alt="">
                </div>
            </div>

            <div class="history-conclusion">
                {!! $story->conclusion !!}
            </div>

            <div class="history-know-more">

                <img src="{{ asset('image/pdf.png') }}" alt="" data-toggle="modal" data-target="#pdfModal">

                <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="pdfModalLabel">PDF</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="{{ $story->pdf }}" align="middle"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                zasavds fsfsfsdfsdf sdfsd sdfsds dfsdfs dffsdfsdf sfsdfsdf sfs fsdfds
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="history-video">
                    {!! $story->video_link !!}
                </div>
            </div>

        </div>
    </div>
@endsection