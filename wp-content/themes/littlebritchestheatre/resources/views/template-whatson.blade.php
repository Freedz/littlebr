{{--
  Template Name: What's on Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-whatson')
    @include('partials.page-footer')
  @endwhile
@endsection

