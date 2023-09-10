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
                                                        >Food</span
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
                                                    >Helpful Tips for Working
                                                    from Home as a Freelancer</a
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
                                                <span
                                                    class="time-reading has-dot"
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
                                                        class="post-cat text-success"
                                                        >Cooking</span
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
                                                    >10 Easy Ways to Be
                                                    Environmentally Conscious At
                                                    Home</a
                                                >
                                            </h5>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                    >27 Sep</span
                                                >
                                                <span
                                                    class="time-reading has-dot"
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
                                                        class="post-cat text-warning"
                                                        >Cooking</span
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
                                                    >My Favorite Comfies to
                                                    Lounge in At Home</a
                                                >
                                            </h5>
                                            <div
                                                class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                    >7 August</span
                                                >
                                                <span
                                                    class="time-reading has-dot"
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
                                                        class="post-cat text-danger"
                                                        >Travel</span
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
                                                    >How to Give Your Space a
                                                    Parisian-Inspired
                                                    Makeover</a
                                                >
                                            </h5>
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
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div
                        class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated"
                    >
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Kegiatan Terbaru</h5>
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
                                                <a
                                                    href="{{
                                                        route('detail-news', 1)
                                                    }}"
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
                                                href="{{
                                                    route('detail-news', 1)
                                                }}"
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
                                                <a
                                                    href="{{
                                                        route('detail-news', 1)
                                                    }}"
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
                                                href="{{
                                                    route('detail-news', 1)
                                                }}"
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
                                                <a
                                                    href="{{
                                                        route('detail-news', 1)
                                                    }}"
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
                                                href="{{
                                                    route('detail-news', 1)
                                                }}"
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
