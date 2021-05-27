@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  
    @include('partials.page-header')
    @include('partials.content-page')
    @include('partials.nav')




  @if (!have_posts())
  <main role="main" class="container">
    <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/404.jpg" class="image-slider-404">
  </main>

        
  @endif
@endsection
