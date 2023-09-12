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
                        <h4 class="fw-semibold mb-8 text-white">Master Agenda</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('agendas.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ old('title') }}" autocomplete="off" name="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror" id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">Judul</label>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ old('date') }}" autocomplete="off" name="date" type="date"
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
                                    <select name="category_id"
                                            class="form-control @error('category_id') is-invalid @enderror select2-ajax">
                                        <option>--Pilih Kategori Agenda--</option>
                                        @foreach($categories as $category)
                                            <option
                                                {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <select name="status" class="form-control">
                                        <option
                                            {{ old('status') == ArticleStatusEnum::ACTIVE->value ? 'selected' : '' }} value="1">
                                            Publish
                                        </option>
                                        <option
                                            {{ old('status') == ArticleStatusEnum::DRAFT->value ? 'selected' : '' }} value="0">
                                            Draft
                                        </option>
                                    </select>
                                    <label for="tb-cpwd">Status Agenda</label>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <label for="tb-cpwd">Thumbnail</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mt-3 mb-3">
                                    <input name="thumbnail" type="file"
                                           class="form-control @error('thumbnail') is-invalid @enderror" id="tb-cpwd"
                                           placeholder="Password">
                                    @error('thumbnail')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <label for="tb-cpwd">Konten Agenda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mt-3 mb-3">
                                    <textarea id="content" rows="10" data-sample="3"
                                              data-sample-short name="content"
                                              class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
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
