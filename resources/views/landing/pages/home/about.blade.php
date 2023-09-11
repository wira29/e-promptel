@extends('landing.layouts.app') @section('content')
<div
    class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white"
    style="background-image: url(assets/imgs/news/news-17.jpg)"
>
    <div class="container entry-header-content">
        <h1 class="entry-title mb-50 font-weight-900">Tentang Kami</h1>
    </div>
</div>
<div class="container single-content">
    <div class="entry-wraper mt-50">
        {!! $about->content !!}
    </div>
</div>
@endsection
