@extends('landing.layouts.app') @section('content')
<div class="container mt-30">
    <div class="loop-grid mb-30">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div
                    class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated"
                >
                    <div class="arrow-cover"></div>
                    <div class="slide-fade">
                        @foreach($videos as $video)
                            <div class="position-relative post-thumb">
                                <div
                                    class="thumb-overlay img-hover-slide position-relative"
                                    style="
                                    background-image: url('https://i.ytimg.com/vi/{{ $video->link }}/hqdefault.jpg');
                                "
                                >
                                    <a class="img-link" href="{{ route('landing.detail-videos', $video->slug) }}"></a>
                                    <div
                                        class="post-content-overlay text-white ml-30 mr-30 pb-30"
                                    >
                                        <div
                                            class="entry-meta meta-0 font-small mb-20"
                                        >
                                            <a href="#"
                                            ><span
                                                    class="post-cat text-info text-uppercase"
                                                >Materi Video</span
                                                ></a
                                            >
                                        </div>
                                        <h3
                                            class="post-title font-weight-900 mb-20"
                                        >
                                            <a class="text-white" href="{{ route('landing.detail-videos', $video->slug) }}"
                                            >{{ $video->title }}</a
                                            >
                                        </h3>
                                        <div
                                            class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5"
                                        >
                                        <span class="post-on"
                                        >{{ \Carbon\Carbon::make($video->date)->format('d F Y') }}</span
                                        >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
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
<div class="bg-grey pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-module-2">
                    <div
                        class="widget-header-1 position-relative mb-30 wow fadeInUp animated"
                    >
                        <h5 class="mt-5 mb-30">Artikel terbaru</h5>
                    </div>
                    <div class="loop-list loop-list-style-1">
                        <div class="row">
                            @foreach($articles as $article)
                                <article
                                    class="col-md-6 mb-40 wow fadeInUp animated"
                                >
                                    <div
                                        class="post-card-1 border-radius-10 hover-up"
                                    >
                                        <div
                                            class="post-thumb thumb-overlay img-hover-slide position-relative"
                                            style="
                                            background-image: url('{{ asset('storage/' . $article->thumbnail ) }}');
                                        "
                                        >
                                            <a
                                                class="img-link"
                                                href="{{ route('landing.detail-article', $article->slug) }}"
                                            ></a>
                                        </div>
                                        <div class="post-content p-30">
                                            <div
                                                class="entry-meta meta-0 font-small mb-10"
                                            >
                                                <a href="#"
                                                ><span
                                                        class="post-cat text-info"
                                                    >Materi Artikel</span
                                                    ></a
                                                >
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5
                                                    class="post-title mb-20 font-weight-900"
                                                >
                                                    <a href="{{ route('landing.detail-article', $article->slug) }}"
                                                    >{{ $article->title }}</a
                                                    >
                                                </h5>
                                                <div
                                                    class="post-excerpt mb-25 font-small text-muted"
                                                >
                                                    <p>
                                                        {{ substr(strip_tags($article->content), 20) }}...
                                                    </p>
                                                </div>
                                                <div
                                                    class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                                >
                                                <span class="post-on"
                                                >{{ \Carbon\Carbon::make($article->date)->format('d F Y') }}</span
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
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div
                        class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated"
                    >
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Polling Terbaru</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                <li class="mb-30 wow fadeInUp animated">
                                    <div
                                        class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5"
                                    >
                                        <div class="post-content media-body">
                                            <h6
                                                class="post-title mb-15 text-limit-2-row font-medium"
                                            >
                                                <a href="single.html"
                                                >Spending Some Quality Time
                                                    with Kids? It’s Possible</a
                                                >
                                            </h6>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                >05 August</span
                                                >
                                                <span class="post-by has-dot"
                                                >150 views</span
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden"
                                        >
                                            <a
                                                class="color-white"
                                                href="single.html"
                                            >
                                                <img
                                                    src="assets/imgs/news/thumb-6.jpg"
                                                    alt=""
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30 wow fadeInUp animated">
                                    <div
                                        class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5"
                                    >
                                        <div class="post-content media-body">
                                            <h6
                                                class="post-title mb-15 text-limit-2-row font-medium"
                                            >
                                                <a href="single.html"
                                                >Relationship Podcasts are
                                                    Having “That” Talk</a
                                                >
                                            </h6>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                >12 August</span
                                                >
                                                <span class="post-by has-dot"
                                                >6k views</span
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden"
                                        >
                                            <a
                                                class="color-white"
                                                href="single.html"
                                            >
                                                <img
                                                    src="assets/imgs/news/thumb-7.jpg"
                                                    alt=""
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30 wow fadeInUp animated">
                                    <div
                                        class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5"
                                    >
                                        <div class="post-content media-body">
                                            <h6
                                                class="post-title mb-15 text-limit-2-row font-medium"
                                            >
                                                <a href="single.html"
                                                >Here’s How to Get the Best
                                                    Sleep at Night</a
                                                >
                                            </h6>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                >15 August</span
                                                >
                                                <span class="post-by has-dot"
                                                >16k views</span
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden"
                                        >
                                            <a
                                                class="color-white"
                                                href="single.html"
                                            >
                                                <img
                                                    src="assets/imgs/news/thumb-2.jpg"
                                                    alt=""
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp animated">
                                    <div
                                        class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5"
                                    >
                                        <div class="post-content media-body">
                                            <h6
                                                class="post-title mb-15 text-limit-2-row font-medium"
                                            >
                                                <a href="single.html"
                                                >America’s Governors Get
                                                    Tested for a Virus That Is
                                                    Testing Them</a
                                                >
                                            </h6>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                >12 August</span
                                                >
                                                <span class="post-by has-dot"
                                                >3k views</span
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden"
                                        >
                                            <a
                                                class="color-white"
                                                href="single.html"
                                            >
                                                <img
                                                    src="assets/imgs/news/thumb-3.jpg"
                                                    alt=""
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
