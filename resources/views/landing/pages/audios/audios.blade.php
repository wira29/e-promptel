@extends('landing.layouts.app') @section('content')
<div class="archive-header pt-50">
    <div class="container">
        <h2 class="font-weight-900">Audio</h2>
        <div class="breadcrumb">
            <a href="{{ route('landing.home') }}" rel="nofollow">Beranda</a>
            <span></span> Audio
        </div>
        <div class="bt-1 border-color-1 mt-30 mb-50"></div>
    </div>
</div>
<div class="bg-white pt-10 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="post-module-2">
                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                @foreach($audios as $audio)
                                    <article
                                        class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated"
                                        data-wow-delay="0.4s"
                                    >
                                        <div
                                            class="post-card-1 border-radius-10 hover-up"
                                        >
                                            <div
                                                class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="
                                                background-image: url('https://i1.sndcdn.com/artworks-000052143490-fn8adk-t500x500.jpg');
                                            "
                                            >
                                                <a
                                                    class="img-link"
                                                    href="{{
                                                    route('landing.detail-audio', $audio->slug)
                                                }}"
                                                ></a>
                                                <span class="top-right-icon bg-info"
                                                ><i
                                                        class="elegant-icon icon_headphones"
                                                    ></i
                                                    ></span>
                                            </div>
                                            <div class="post-content p-30">
                                                <div
                                                    class="entry-meta meta-0 font-small mb-10"
                                                >
                                                    <a href="#"
                                                    ><span
                                                            class="post-cat text-success"
                                                        >Materi Audio</span
                                                        ></a
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex post-card-content"
                                                >
                                                    <h5
                                                        class="post-title mb-20 font-weight-900"
                                                    >
                                                        <a
                                                            href="{{
                                                            route(
                                                                'landing.detail-audio',$audio->slug
                                                            )
                                                        }}"
                                                        >{{ $audio->title }}</a
                                                        >
                                                    </h5>
                                                    <div
                                                        class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                                    >
                                                    <span class="post-on"
                                                    >{{ \Carbon\Carbon::make($audio->date)->format('d F Y') }}</span
                                                    >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{ $audios->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
