<footer class="pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="sidebar-widget wow fadeInUp animated mb-30">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30 text-white">Tentang Kami</h5>
                    </div>
                    <div class="textwidget">
                        <p class="text-white">
                            Teaching Factory (TeFa) House of Health Promotion dari Program Studi Sarjana Terapan Promosi Kesehatan Jurusan Kesehatan Politeknik Negeri Jember merupakan teaching factory yang bergerak dalam hal mempromosikan dan mengedukasi masyarakat tentang kesehatan. Website ini berisi tentang artikel, video, dan audio tentang edukasi kesehatan serta pengumuman dan berita-berita kegiatan yang diselenggarakan oleh TeFa House of Health Promotion Politeknik Negeri Jember.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div
                    class="sidebar-widget widget_categories wow fadeInUp animated mb-30"
                    data-wow-delay="0.1s"
                >
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30 text-white">Menu</h5>
                    </div>
                    <ul class="font-small">
                        <li class="cat-item cat-item-2">
                            <a
                                class="text-white"
                                href="{{ route('landing.home') }}"
                                >Beranda</a
                            >
                        </li>
                        <li class="cat-item cat-item-4">
                            <a
                                class="text-white"
                                href="{{ route('landing.videos') }}"
                                >Materi Video</a
                            >
                        </li>
                        <li class="cat-item cat-item-5">
                            <a
                                class="text-white"
                                href="{{ route('landing.audios') }}"
                                >Materi Audio</a
                            >
                        </li>
                        <li class="cat-item cat-item-6">
                            <a
                                class="text-white"
                                href="{{ route('landing.polling') }}"
                                >Polling</a
                            >
                        </li>
                        <li class="cat-item cat-item-7">
                            <a
                                class="text-white"
                                href="{{ route('landing.contact') }}"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30"
                    data-wow-delay="0.3s"
                >
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30 text-white">Sosial Media</h5>
                    </div>
                    <div class="newsletter">
                        <ul
                            class="header-social-network d-inline-block list-inline color-white mb-20"
                        >
                            <li class="list-inline-item">
                                <a
                                    href="https://www.youtube.com/@hfcpromkes"
                                    target="_blank"
                                    title="Youtube"
                                    >
                                    <img src="{{ asset('assets/imgs/youtube-icon.svg') }}" />
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.instagram.com/promkespolije_/"
                                    target="_blank"
                                    title="Instagram"
                                    >
                                    <img src="{{ asset('assets/imgs/instagram-icon.svg') }}" />
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.tiktok.com/@healthforchange_"
                                    target="_blank"
                                    title="Tiktok"
                                    >
                                    <img src="{{ asset('assets/imgs/tiktok-icon.svg') }}" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
            <p class="float-md-start font-small text-white">
                © 2023, E-Promptel
            </p>
            <p class="float-md-end font-small text-white">
                Politeknik Negeri Jember | POLIJE
            </p>
        </div>
    </div>
</footer>
