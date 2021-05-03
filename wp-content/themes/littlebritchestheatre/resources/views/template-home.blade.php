{{--
  Template Name: Homepage Template
--}}

@extends('layouts.home')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.home-banner')
    @include('partials.home-blog')
    @include('partials.content-page')
  @endwhile
@endsection
