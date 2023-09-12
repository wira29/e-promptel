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
                                    <a class="img-link" href="single.html"></a>
                                    <div
                                        class="post-content-overlay text-white ml-30 mr-30 pb-30"
                                    >
                                        <div
                                            class="entry-meta meta-0 font-small mb-20"
                                        >
                                            <a href="category.html"
                                            ><span
                                                    class="post-cat text-info text-uppercase"
                                                >Materi Video</span
                                                ></a
                                            >
                                        </div>
                                        <h3
                                            class="post-title font-weight-900 mb-20"
                                        >
                                            <a class="text-white" href="single.html"
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
                        <h5 class="mt-5 mb-30">Travel tips</h5>
                    </div>
                    <div class="loop-list loop-list-style-1">
                        <div class="row">
                            <article
                                class="col-md-6 mb-40 wow fadeInUp animated"
                            >
                                <div
                                    class="post-card-1 border-radius-10 hover-up"
                                >
                                    <div
                                        class="post-thumb thumb-overlay img-hover-slide position-relative"
                                        style="
                                            background-image: url(assets/imgs/news/news-6.jpg);
                                        "
                                    >
                                        <a
                                            class="img-link"
                                            href="single.html"
                                        ></a>
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
                                                    class="post-cat text-info"
                                                    >Artists</span
                                                ></a
                                            >
                                            <a href="category.html"
                                                ><span
                                                    class="post-cat text-success"
                                                    >Film</span
                                                ></a
                                            >
                                        </div>
                                        <div class="d-flex post-card-content">
                                            <h5
                                                class="post-title mb-20 font-weight-900"
                                            >
                                                <a href="single.html"
                                                    >Easy Ways to Use
                                                    Alternatives to Plastic</a
                                                >
                                            </h5>
                                            <div
                                                class="post-excerpt mb-25 font-small text-muted"
                                            >
                                                <p>
                                                    Graduating from a top
                                                    accelerator or incubator can
                                                    be as career-defining for
                                                    a&nbsp;startup
                                                    founder&nbsp;as an elite
                                                    university diploma. The
                                                    intensive programmes, which…
                                                </p>
                                            </div>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                    >27 August</span
                                                >
                                                <span
                                                    class="time-reading has-dot"
                                                    >12 mins read</span
                                                >
                                                <span class="post-by has-dot"
                                                    >23k views</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article
                                class="col-md-6 mb-40 wow fadeInUp animated"
                            >
                                <div
                                    class="post-card-1 border-radius-10 hover-up"
                                >
                                    <div
                                        class="post-thumb thumb-overlay img-hover-slide position-relative"
                                        style="
                                            background-image: url(assets/imgs/news/news-8.jpg);
                                        "
                                    >
                                        <a
                                            class="img-link"
                                            href="single.html"
                                        ></a>
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
                                                ><span class="post-cat"
                                                    >Fashion</span
                                                ></a
                                            >
                                        </div>
                                        <div class="d-flex post-card-content">
                                            <h5
                                                class="post-title mb-20 font-weight-900"
                                            >
                                                <a href="single.html"
                                                    >Tips for Growing Healthy,
                                                    Longer Hair</a
                                                >
                                            </h5>
                                            <div
                                                class="post-excerpt mb-25 font-small text-muted"
                                            >
                                                <p>
                                                    Proin vitae placerat quam.
                                                    Ut sodales eleifend urna, in
                                                    condimentum tortor ultricies
                                                    eu. Nunc auctor iaculis
                                                    dolorProin vitae placerat
                                                    quam. Proin vitae placerat
                                                    quam.
                                                </p>
                                            </div>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                    >12 August</span
                                                >
                                                <span
                                                    class="time-reading has-dot"
                                                    >6 mins read</span
                                                >
                                                <span class="post-by has-dot"
                                                    >3k views</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article
                                class="col-md-6 mb-40 wow fadeInUp animated"
                            >
                                <div
                                    class="post-card-1 border-radius-10 hover-up"
                                >
                                    <div
                                        class="post-thumb thumb-overlay img-hover-slide position-relative"
                                        style="
                                            background-image: url(assets/imgs/news/news-10.jpg);
                                        "
                                    >
                                        <a
                                            class="img-link"
                                            href="single.html"
                                        ></a>
                                        <span
                                            class="top-right-icon bg-secondary"
                                            ><i
                                                class="elegant-icon icon_heart_alt"
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
                                                    >Lifestyle</span
                                                ></a
                                            >
                                        </div>
                                        <div class="d-flex post-card-content">
                                            <h5
                                                class="post-title mb-20 font-weight-900"
                                            >
                                                <a href="single.html"
                                                    >Project Ideas Around the
                                                    House</a
                                                >
                                            </h5>
                                            <div
                                                class="post-excerpt mb-25 font-small text-muted"
                                            >
                                                <p>
                                                    Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                    Sed tempor condimentum metus
                                                    non tempor. Maecenas non
                                                    augue aliquam, facilisis
                                                    lectus quis, lacinia risus.
                                                </p>
                                            </div>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                    >27 August</span
                                                >
                                                <span
                                                    class="time-reading has-dot"
                                                    >12 mins read</span
                                                >
                                                <span class="post-by has-dot"
                                                    >23k views</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article
                                class="col-md-6 mb-40 wow fadeInUp animated"
                            >
                                <div
                                    class="post-card-1 border-radius-10 hover-up"
                                >
                                    <div
                                        class="post-thumb thumb-overlay img-hover-slide position-relative"
                                        style="
                                            background-image: url(assets/imgs/news/news-12.jpg);
                                        "
                                    >
                                        <a
                                            class="img-link"
                                            href="single.html"
                                        ></a>
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
                                                    class="post-cat text-danger"
                                                    >Hotels</span
                                                ></a
                                            >
                                        </div>
                                        <div class="d-flex post-card-content">
                                            <h5
                                                class="post-title mb-20 font-weight-900"
                                            >
                                                <a href="single.html"
                                                    >How to Give Yourself a Spa
                                                    Day from Home</a
                                                >
                                            </h5>
                                            <div
                                                class="post-excerpt mb-25 font-small text-muted"
                                            >
                                                <p>
                                                    Graduating from a top
                                                    accelerator or incubator can
                                                    be as career-defining for
                                                    a&nbsp;startup
                                                    founder&nbsp;as an elite
                                                    university diploma. The
                                                    intensive programmes, which…
                                                </p>
                                            </div>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                    >18 August</span
                                                >
                                                <span
                                                    class="time-reading has-dot"
                                                    >14 mins read</span
                                                >
                                                <span class="post-by has-dot"
                                                    >25k views</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="post-module-3">
                    <div class="widget-header-1 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Latest posts</h5>
                    </div>
                    <div class="loop-list loop-list-style-1">
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
                                                href="single.html"
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
                                                    >Food</span
                                                ></a
                                            >
                                        </div>
                                        <h5
                                            class="post-title font-weight-900 mb-20"
                                        >
                                            <a href="single.html"
                                                >Helpful Tips for Working from
                                                Home as a Freelancer</a
                                            >
                                            <span class="post-format-icon"
                                                ><i
                                                    class="elegant-icon icon_star_alt"
                                                ></i
                                            ></span>
                                        </h5>
                                        <div
                                            class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                        >
                                            <span class="post-on"
                                                >7 August</span
                                            >
                                            <span class="time-reading has-dot"
                                                >11 mins read</span
                                            >
                                            <span class="post-by has-dot"
                                                >3k views</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
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
                                                background-image: url(assets/imgs/news/news-4.jpg);
                                            "
                                        >
                                            <a
                                                class="img-link"
                                                href="single.html"
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
                                                    class="post-cat text-success"
                                                    >Cooking</span
                                                ></a
                                            >
                                        </div>
                                        <h5
                                            class="post-title font-weight-900 mb-20"
                                        >
                                            <a href="single.html"
                                                >10 Easy Ways to Be
                                                Environmentally Conscious At
                                                Home</a
                                            >
                                        </h5>
                                        <div
                                            class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                        >
                                            <span class="post-on">27 Sep</span>
                                            <span class="time-reading has-dot"
                                                >10 mins read</span
                                            >
                                            <span class="post-by has-dot"
                                                >22k views</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
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
                                                background-image: url(assets/imgs/news/news-2.jpg);
                                            "
                                        >
                                            <a
                                                class="img-link"
                                                href="single.html"
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
                                                    class="post-cat text-warning"
                                                    >Cooking</span
                                                ></a
                                            >
                                        </div>
                                        <h5
                                            class="post-title font-weight-900 mb-20"
                                        >
                                            <a href="single.html"
                                                >My Favorite Comfies to Lounge
                                                in At Home</a
                                            >
                                        </h5>
                                        <div
                                            class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                        >
                                            <span class="post-on"
                                                >7 August</span
                                            >
                                            <span class="time-reading has-dot"
                                                >9 mins read</span
                                            >
                                            <span class="post-by has-dot"
                                                >12k views</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
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
                                                background-image: url(assets/imgs/news/news-3.jpg);
                                            "
                                        >
                                            <a
                                                class="img-link"
                                                href="single.html"
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
                                                    class="post-cat text-danger"
                                                    >Travel</span
                                                ></a
                                            >
                                        </div>
                                        <h5
                                            class="post-title font-weight-900 mb-20"
                                        >
                                            <a href="single.html"
                                                >How to Give Your Space a
                                                Parisian-Inspired Makeover</a
                                            >
                                        </h5>
                                        <div
                                            class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                        >
                                            <span class="post-on"
                                                >27 August</span
                                            >
                                            <span class="time-reading has-dot"
                                                >12 mins read</span
                                            >
                                            <span class="post-by has-dot"
                                                >23k views</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="pagination-area mb-30 wow fadeInUp animated">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item">
                                <a class="page-link" href="#"
                                    ><i class="elegant-icon arrow_left"></i
                                ></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">01</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">02</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">03</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">04</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"
                                    ><i class="elegant-icon arrow_right"></i
                                ></a>
                            </li>
                        </ul>
                    </nav>
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
                    <div
                        class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated"
                    >
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Artikel Terbaru</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                @foreach($articles as $article)
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
                                                        route('landing.detail-article', $article->slug)
                                                    }}"
                                                    >{{ $article->title }}</a
                                                    >
                                                </h6>
                                                <div
                                                    class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                                >
                                                <span class="post-on"
                                                >{{ \Carbon\Carbon::make($article->date)->format('d F Y') }}</span
                                                >
                                                </div>
                                            </div>
                                            <div
                                                class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden"
                                            >
                                                <a
                                                    class="color-white"
                                                    href="{{
                                                    route('landing.detail-article', $article->slug)
                                                }}"
                                                >
                                                    <img
                                                        src="{{ asset('storage/' . $article->thumbnail ) }}"
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
