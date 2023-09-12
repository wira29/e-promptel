@php use App\Enums\ArticleStatusEnum; @endphp
@extends('dashboard.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('dashboard_assets/dist/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="card bg-primary shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8 text-white">Master Video</h4>
                    </div>
                    <div class="col-lg-10 text-white mt-3">
                        <strong>Langkah-langkah menambah Video:</strong>
                        <ol>
                            <li>Buka website resmi dari <a style="text-decoration: underline" class="text-white"
                                                           href="https://youtube.com/">https://youtube.com</a>
                            </li>
                            <li>Cari dan pilih Video yang akan dipasang, kemudian klik Video</li>
                            <li>Salin kode video yang berada pada url website</li>
                            <li>
                                <a target="_blank"
                                   style="text-decoration: underline"
                                   class="text-white"
                                   href="{{ asset('video-tutorial.png') }}">Lihat
                                    Screenshot Berikut</a>
                            </li>
                            <li>Perlu diketahui video yang bisa disalin hanya video yang diizinkan penyematannya.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('videos.update', $video) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $video->date }}" autocomplete="off" name="date" type="date"
                                           class="form-control @error('date') is-invalid @enderror">
                                    <label for="tb-fname">Tanggal</label>
                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $video->title }}" autocomplete="off" name="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror" id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">Judul Video</label>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <label for="tb-cpwd">Deskripsi Video</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mt-3 mb-3">
                                    <textarea id="content" rows="10" data-sample="3"
                                              data-sample-short name="content"
                                              class="form-control @error('content') is-invalid @enderror">{{ $video->content }}</textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <iframe width="100%" height="150" scrolling="no" frameborder="no" allow="autoplay"
                                            src="{{ $video->link }}"></iframe>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $video->link }}" autocomplete="off" name="link" type="text"
                                           class="form-control @error('link') is-invalid @enderror" id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">Kode Video Pada Youtube</label>
                                    @error('link')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-md-flex align-items-center mt-3">
                                    <div class="ms-auto mt-3 mt-md-0">
                                        <button type="submit" class="btn btn-primary font-medium rounded-pill px-4">
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-send me-2 fs-4"></i>
                                                Simpan
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript"
            src="{{ asset('dashboard_assets/dist/libs/select2/dist/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dashboard_assets/dist/libs/ckeditor/ckeditor.js') }}"></script>

    <script>

        // Single Select Placeholder
        $(".select2-ajax").select2({
            placeholder: "Select a state",
            allowClear: true,
        });
    </script>
    <script data-sample="3">
        CKEDITOR.replace("content", {
            height: 400,
        });
    </script>
@endsection
