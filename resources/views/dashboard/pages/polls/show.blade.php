@extends('dashboard.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('dashboard_assets/dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="alert-message">
                        <strong>Gagal!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if(session('success'))
                <x-alert-success></x-alert-success>
            @elseif(session('error'))
                <x-alert-failed></x-alert-failed>
            @endif
            <div class="card bg-primary shadow-none position-relative overflow-hidden">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8 text-white">Judul Polling: {{ $poll->title }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">List Pertanyaan</h4>
                    </div>
                    <div class="card-body">
                        <form class="mt-4" method="POST" action="{{ route('questions.store') }}">
                            @csrf
                            <div class="col-md-12" hidden>
                                <input autocomplete="off" value="{{ $poll->id }}" name="poll_id"
                                       type="text"
                                       class="form-control"
                                       placeholder="ID Poll"/>
                            </div>
                            <div class="">
                                <div class="email-repeater mb-3">
                                    <div data-repeater-list="repeater-group">
                                        @forelse($poll->questions as $question)
                                            <div data-repeater-item class="row mb-3">
                                                <div class="col-md-10">
                                                    <input autocomplete="off" value="{{ $question->name }}" name="name"
                                                           type="text"
                                                           class="form-control"
                                                           placeholder="Nama Pertanyaan"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <button data-id="{{ $question->id }}" data-repeater-delete=""
                                                            class="btn btn-danger waves-effect waves-light repeater-delete-button"
                                                            type="button">
                                                        <i class="ti ti-circle-x fs-5"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        @empty
                                            <div data-repeater-item class="row mb-3">
                                                <div class="col-md-10">
                                                    <input autocomplete="off" value="{{ old('name') }}" name="name"
                                                           type="text"
                                                           class="form-control"
                                                           placeholder="Nama Pertanyaan"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <button data-repeater-delete=""
                                                            class="btn btn-danger waves-effect waves-light"
                                                            type="button">
                                                        <i class="ti ti-circle-x fs-5"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        @endforelse

                                    </div>
                                    <button type="button" data-repeater-create=""
                                            class="btn btn-info waves-effect waves-light">
                                        <div class="d-flex align-items-center">
                                            Tambah Pertanyaan
                                            <i class="ti ti-circle-plus ms-1 fs-5"></i>
                                        </div>
                                    </button>
                                </div>

                                <div class="mb-3">
                                    <button
                                        class="btn rounded-pill px-4 btn-light-success text-success font-weight-medium waves-effect waves-light"
                                        type="submit">
                                        <i class="ti ti-send fs-5"></i>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-delete-modal></x-delete-modal>
@endsection
@section('script')
    <script src="{{ asset('dashboard_assets/dist/libs/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/dist/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script>
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(".repeater-default").repeater();

        // Custom Show / Hide Configurations
        $(".file-repeater, .email-repeater").repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (remove) {
                let deleteButton = $(this).find('.repeater-delete-button');
                let questionId = deleteButton.data('id');
                if (questionId) {
                    if (confirm("Apa Yakin ingin menghapus data")) {
                        let url = `{{ route('questions.destroy', ':id') }}`.replace(':id', questionId);
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                _token: CSRF_TOKEN
                            },
                            success: (res) => {
                                Swal.fire({
                                    icon: "success",
                                    title: "Berhasil!",
                                    text: res.meta.message,
                                });

                                $(this).slideUp(remove);
                            },
                            error: (err) => {
                                Swal.fire({
                                    icon: "error",
                                    title: "Gagal!",
                                    text: err.responseJSON.meta.message,
                                });
                                console.log(err)
                            }
                        })
                    }
                } else {
                    if (confirm("Apa Yakin ingin menghapus data")) {
                        $(this).slideUp(remove);
                    }

                }

            },
        });
    </script>
@endsection
