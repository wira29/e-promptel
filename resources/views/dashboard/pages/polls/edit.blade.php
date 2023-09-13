@extends('dashboard.layouts.app')

@section('content')
    <div class="row">
        <div class="card bg-primary shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8 text-white">Master Polling</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('polls.update', $poll) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $poll->title }}" autocomplete="off" name="title" type="text"
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
                                    <input value="{{ $poll->start }}" autocomplete="off" name="start" type="date"
                                           class="form-control @error('start') is-invalid @enderror" id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">Tanggal Mulai</label>
                                    @error('start')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $poll->end }}" autocomplete="off" name="end" type="date"
                                           class="form-control @error('end') is-invalid @enderror" id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">Tanggal Berakhir</label>
                                    @error('end')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <label for="tb-cpwd">Deskripsi</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mt-4 mb-3">
                                    <textarea autocomplete="off"
                                              name="description" type="text"
                                              class="form-control @error('description') is-invalid @enderror"
                                              id="description"
                                              placeholder="Enter Name here">{{ $poll->description }}</textarea>
                                    @error('description')
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
    <script type="text/javascript" src="{{ asset('dashboard_assets/dist/libs/ckeditor/ckeditor.js') }}"></script>

    <script data-sample="3">
        CKEDITOR.replace("description", {
            height: 400,
        });
    </script>
@endsection
