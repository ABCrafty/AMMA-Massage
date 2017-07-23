@extends('layouts.app')

@section('title')
    @parent - Accueil
@endsection

@section('content')


    <div class="container-fluid ">
        <div class="row homepage-landing align-items-end"
             style=" background: url({{asset('image/massage.jpg')}}) fixed no-repeat;background-size:cover;">
            <div class="tel animated bounceInRight">
                <p>{{$homepage->phone_text}}</p>
                <p><a href="tel:+330622032225">{{$homepage->phone}}</a></p>
            </div>

            <div class="massage-amma">
                    <h1>{{ $homepage->title }}</h1>
                    <p>{{ $homepage->content_title }}</p>
                    <a href="#" class="green-button">{{ $homepage->title_link }}</a>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="row justify-content-around infos" style="$color">
            <div class="col-12 col-sm-6 info">
                <i class="fa fa-calendar text-center" aria-hidden="true"></i>
                <p class="text-center">{{ $homepage->service_1 }}</p>
            </div>
            <div class="col-12 col-sm-6 info">
                <i class="fa fa-map-marker text-center" aria-hidden="true"></i>
                <p class="text-center">{{ $homepage->service_2 }}</p>
            </div>
            <div class="col-12 col-sm-6 info">
                <i class="fa fa-graduation-cap text-center" aria-hidden="true"></i>
                <p class="text-center">{{ $homepage->service_3 }}</p>
            </div>
            <div class="col-12 col-sm-6 info">
                <i class="fa fa-star text-center" aria-hidden="true"></i>
                <p class="text-center">{{ $homepage->service_4 }}</p>
            </div>
        </div>
    </div>

    <div class="offers">
        <p>{{ $homepage->offer_preview }}</p>

        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="service animated">
                    <i class="fa fa-linode" aria-hidden="true"></i>
                    <h6>{{ $homepage->offer_title_2 }}</h6>
                    <p>{{ $homepage->offer_content_1 }}</p>
                    <a href="#" class="green-button square">{{ $homepage->offer_link_1 }}</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service animated">
                    <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                    <h6>{{ $homepage->offer_title_2 }}</h6>
                    <p>{{ $homepage->offer_content_2 }}</p>
                    <a href="#" class="green-button square">{{ $homepage->offer_link_2 }}</a>
                </div>


            </div>

            <div class="col-md-4">
                <div class="service animated">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <h6>{{ $homepage->offer_title_3 }}</h6>
                    <p>{{ $homepage->offer_content_3 }}</p>
                    <a href="#" class="green-button square">{{ $homepage->offer_link_3 }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection