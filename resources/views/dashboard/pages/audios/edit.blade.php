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
                        <h4 class="fw-semibold mb-8 text-white">Master Audio</h4>
                    </div>
                    <div class="col-lg-10 text-white mt-3">
                        <strong>Langkah-langkah menambah Audio:</strong>
                        <ol>
                            <li>Buka website resmi dari <a style="text-decoration: underline" class="text-white"
                                                           href="https://soundcloud.com/">https://soundcloud.com</a>
                            </li>
                            <li>Cari dan pilih Audio yang akan dipasang, kemudian klik Audio</li>
                            <li>Klik tombol share, kemudian akan muncul popup window klik menu Embed</li>
                            <li>Perhatikan pada Section Code, Silahkan copy paste kode 'iframe' secara keseluruhan</li>
                            <li>Pastekan kode pada notepad, kemudian ambil hanya bagian (src="") saja.</li>
                            <li>
                                <a target="_blank"
                                   style="text-decoration: underline"
                                   class="text-white"
                                   href="{{ asset('audio-tutorial.png') }}">Lihat
                                    Screenshot Berikut</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('audios.update', $audio) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $audio->date }}" autocomplete="off" name="date" type="date"
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
                                    <input value="{{ $audio->title }}" autocomplete="off" name="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror" id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">Judul Audio</label>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <label for="tb-cpwd">Deskripsi Audio</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mt-4 mb-3">
                                    <textarea id="content" rows="10" data-sample="3"
                                              data-sample-short name="content"
                                              class="form-control @error('content') is-invalid @enderror">{{ $audio->content }}</textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <iframe width="100%" height="150" scrolling="no" frameborder="no" allow="autoplay"
                                            src="{{ $audio->link }}"></iframe>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $audio->link }}" autocomplete="off" name="link" type="text"
                                           class="form-control @error('link') is-invalid @enderror" id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">Link Audio</label>
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
