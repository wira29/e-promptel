@extends('landing.layouts.app') @section('content')
<div
    class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white"
    style="background-image: url(assets/imgs/contact.jpg)"
>
    <div class="container entry-header-content">
        <h1 class="entry-title mb-50 font-weight-900">Kontak</h1>
    </div>
</div>
<div class="container single-content">
    <div class="entry-wraper mt-50 mb-50">
        {!! $contact->description !!}

        <div class="row mt-20">
            <div class="col-4">

            <a
                href="https://www.youtube.com/@hfcpromkes"
                target="_blank"
                title="Youtube"
            >
                <img width="40" src="{{ asset('assets/imgs/youtube-icon-primary.svg') }}" />
                Health For Change Promosi Kesehatan
            </a>
            </div>
            <div class="col-4">

            <a
                href="https://www.instagram.com/promkespolije_/"
                target="_blank"
                title="Instagram"
            >
                <img width="40" src="{{ asset('assets/imgs/instagram-icon-primary.svg') }}" />
                @promkespolije_
            </a>
            </div>
            <div class="col-4">

            <a
                href="https://www.tiktok.com/@healthforchange_"
                target="_blank"
                title="Tiktok"
            >
                <img width="40" src="{{ asset('assets/imgs/tiktok-icon-primary.svg') }}" />
                @healthforchange_
            </a>
            </div>
        </div>

    </div>
</div>
@endsection
