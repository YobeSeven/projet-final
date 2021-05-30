@extends('layouts.index')
@section('content-index')

    @include('frontend.contents.home.intro')
    @include('frontend.contents.home.about-section')
    @include('frontend.contents.home.testimonial')
    @include('frontend.contents.home.services')
    @include('frontend.contents.home.team')
    @include('frontend.contents.home.promotion')
    @include('frontend.contents.partials.contact-section')
    
@endsection