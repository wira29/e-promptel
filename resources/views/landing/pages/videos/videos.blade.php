@extends('landing.layouts.app') @section('content')
<div class="archive-header pt-50">
    <div class="container">
        <h2 class="font-weight-900">Video</h2>
        <div class="breadcrumb">
            <a href="index-2.html" rel="nofollow">Beranda</a>
            <span></span> Video
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
                                @foreach($videos as $video)
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
                                                background-image: url('https://i.ytimg.com/vi/{{ $video->link }}/hqdefault.jpg');
                                            "
                                            >
                                                <a
                                                    class="img-link"
                                                    href="{{
                                                    route('landing.detail-videos', $video->slug)
                                                }}"
                                                ></a>
                                                <span class="top-right-icon bg-info"
                                                ><i
                                                        class="elegant-icon icon_headphones"
                                                    ></i
                                                    ></span>
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
                                            <div class="post-content p-30">
                                                <div
                                                    class="entry-meta meta-0 font-small mb-10"
                                                >
                                                    <a href="category.html"
                                                    ><span
                                                            class="post-cat text-success"
                                                        >Materi Video</span
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
                                                            route('landing.detail-videos', $video->slug)
                                                        }}"
                                                        >{{ $video->title }}</a
                                                        >
                                                    </h5>
                                                    <div
                                                        class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                                    >
                                                    <span class="post-on"
                                                    >{{ \Carbon\Carbon::make($video->date)->format('d F Y') }}</span
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
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
