@extends('landing.layouts.app') @section('content')
    <div class="pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content2">
                        <div class="entry-header entry-header-style-1 mb-50">
                            <h1 class="entry-title mb-30 font-weight-900">
                                {{ $activity->title }}
                            </h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <div
                                        class="entry-meta align-items-center meta-2 font-small color-muted"
                                    >
                                        <p class="mb-5">
                                            <a class="author-avatar" href="#"
                                            ><img
                                                    class="img-circle"
                                                    src="{{
                                                    asset(
                                                        'assets/imgs/authors/author-3.jpg'
                                                    )
                                                }}"
                                                    alt=""
                                                /></a>
                                            By
                                            <a href="author.html"
                                            ><span
                                                    class="author-name font-weight-bold"
                                                >Admin</span
                                                ></a
                                            >
                                        </p>
                                        <span class="mr-10"> {{ \Carbon\Carbon::make($activity->date)->format('d F Y') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end d-none d-md-inline">
                                    <ul
                                        class="header-social-network d-inline-block list-inline mr-15"
                                    >
                                        <li class="list-inline-item text-muted">
                                            <span>Bagikan: </span>
                                        </li>
                                        @foreach($share as $idx => $s)
                                            <li class="list-inline-item">
                                                <a
                                                    class="social-icon fb text-xs-center"
                                                    target="_blank"
                                                    href="{{ $s }}"
                                                    style="width: min-content!important; padding: 0 8px; background-color: rgba(0,0,0, 0.3)"
                                                >{{ $idx }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--end single header-->
                        <figure
                            class="image mb-30 m-auto text-center border-radius-10"
                        >
                            <img width="100%" height="300" src="{{ asset('storage/' . $activity->thumbnail) }}" />
                        </figure>
                        <!--figure-->
                        <article class="entry-wraper mb-50">
                            <div
                                class="entry-main-content fadeIn animated"
                            >
                                {!!$activity->content!!}
                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-lg-4 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <div
                            class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated"
                        >
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Kegiatan Terbaru</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    @foreach($latests as $latest)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5"
                                            >
                                                <div class="post-content media-body">
                                                    <h6
                                                        class="post-title mb-15 text-limit-2-row font-medium"
                                                    >
                                                        <a href="{{ route('landing.detail-article', $latest->slug) }}"
                                                        >{{ $latest->title }}</a
                                                        >
                                                    </h6>
                                                    <div
                                                        class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                                    >
                                                <span class="post-on"
                                                >{{ \Carbon\Carbon::make($latest->date)->format('d F Y') }}</span
                                                >
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden"
                                                >
                                                    <a
                                                        class="color-white"
                                                        href="{{ route('landing.detail-article', $latest->slug) }}"
                                                    >
                                                        <img
                                                            src="{{ asset('storage/'. $latest->thumbnail) }}"
                                                            alt=""
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
