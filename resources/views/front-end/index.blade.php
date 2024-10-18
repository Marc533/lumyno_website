@extends('layouts.app')

@section('title')

@section('section')
    @include('front-end.section-top-barre')

    @include('front-end.navbar')

    @include('front-end.section1')

    @include('front-end.section-feature')

    @include('front-end.section-about')

    @include('front-end.section-services')

    @include('front-end.section-faq')

    @include('front-end.section-blog')

    @include('front-end.section-team')

    @include('front-end.section-testimonial')

    @include('front-end.footer')
@endsection
