@extends('landing.layouts.app') @section('content')
<div class="archive-header pt-50">
    <div class="container">
        <h2 class="font-weight-900">Artikel</h2>
        <div class="breadcrumb">
            <a href="index-2.html" rel="nofollow">Beranda</a>
            <span></span> Artikel
        </div>
        <div class="bt-1 border-color-1 mt-30 mb-50"></div>
    </div>
</div>
<div class="bg-white pt-10 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <div class="post-module-3">
                        <div class="loop-list loop-list-style-1">
                            @foreach($articles as $article)
                                <article
                                    class="hover-up-2 transition-normal wow fadeInUp animated"
                                >
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div
                                                class="post-thumb position-relative border-radius-5"
                                            >
                                                <div
                                                    class="img-hover-slide border-radius-5 position-relative"
                                                    style="
                                                    background-image: url(assets/imgs/news/news-13.jpg);
                                                "
                                                >
                                                    <a
                                                        class="img-link"
                                                        href="{{
                                                        route('detail-news', 1)
                                                    }}"
                                                    ></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li>
                                                        <a href="#"
                                                        ><i
                                                                class="elegant-icon social_share"
                                                            ></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="fb"
                                                            href="#"
                                                            title="Share on Facebook"
                                                            target="_blank"
                                                        ><i
                                                                class="elegant-icon social_facebook"
                                                            ></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="tw"
                                                            href="#"
                                                            target="_blank"
                                                            title="Tweet now"
                                                        ><i
                                                                class="elegant-icon social_twitter"
                                                            ></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="pt"
                                                            href="#"
                                                            target="_blank"
                                                            title="Pin it"
                                                        ><i
                                                                class="elegant-icon social_pinterest"
                                                            ></i
                                                            ></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div
                                                    class="entry-meta meta-0 font-small mb-10"
                                                >
                                                    <a href="category.html"
                                                    ><span
                                                            class="post-cat text-primary"
                                                        >{{ $article->category->name }}</span
                                                        ></a
                                                    >
                                                </div>
                                                <h5
                                                    class="post-title font-weight-900 mb-20"
                                                >
                                                    <a
                                                        href="{{
                                                        route('detail-news', 1)
                                                    }}"
                                                    >{{ $article->title }}</a
                                                    >
                                                </h5>
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
                    {{ $articles->links() }}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div
                        class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated"
                    >
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Artikel Terbaru</h5>
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
                                                    <a
                                                        href="{{
                                                        route('detail-news', 1)
                                                    }}"
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
                                                    href="{{
                                                    route('detail-news', 1)
                                                }}"
                                                >
                                                    <img
                                                        src="assets/imgs/news/thumb-6.jpg"
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
