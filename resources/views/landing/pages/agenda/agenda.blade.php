@extends('landing.layouts.app') @section('content')
<div class="archive-header pt-50">
    <div class="container">
        <h2 class="font-weight-900">Agenda</h2>
        <div class="breadcrumb">
            <a href="{{ route('landing.home') }}" rel="nofollow">Beranda</a>
            <span></span> Agenda
        </div>
        <div class="bt-1 border-color-1 mt-30 mb-50"></div>
    </div>
</div>
<div class="bg-white pt-10 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <div class="post-module-2">
                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                @foreach($agendas as $agenda)
                                    <article
                                        class="col-md-6 mb-40 wow fadeInUp animated"
                                    >
                                        <div
                                            class="post-card-1 border-radius-10 hover-up"
                                        >
                                            <div
                                                class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="
                                                background-image: url('{{ asset("storage/" . $agenda->thumbnail) }}');
                                            "
                                            >
                                                <a
                                                    class="img-link"
                                                    href="{{
                                                    route('landing.detail-agenda', $agenda->slug)
                                                }}"
                                                ></a>
                                            </div>
                                            <div class="post-content p-30">
                                                <div
                                                    class="entry-meta meta-0 font-small mb-10"
                                                >
                                                    <span
                                                            class="post-cat text-info"
                                                        >Agenda</span
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
                                                                'landing.detail-agenda',
                                                                $agenda->slug
                                                            )
                                                        }}"
                                                        >{{ $agenda->title }}</a
                                                        >
                                                    </h5>
                                                    <div
                                                        class="post-excerpt mb-25 font-small text-muted"
                                                    >
                                                        <p>
                                                            {{ substr(strip_tags($agenda->content), 0, 20) }}...
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="entry-meta meta-1 float-start font-x-small text-uppercase"
                                                    >
                                                    <span class="post-on"
                                                    >{{ \Carbon\Carbon::make($agenda->date)->format('d F Y') }}</span
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
                    {{ $agendas->links() }}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div
                        class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated"
                    >
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Agenda Terbaru</h5>
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
                                                        route('landing.detail-agenda', $latest->slug)
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
                                                    route('landing.detail-agenda', $latest->slug)
                                                }}"
                                                >
                                                    <img
                                                        src="{{ asset('storage/' . $latest->thumbnail) }}"
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
