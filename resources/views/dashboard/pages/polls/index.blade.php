@php use Carbon\Carbon; @endphp
@extends('dashboard.layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            @if(session('success'))
                <x-alert-success></x-alert-success>
            @elseif(session('error'))
                <x-alert-failed></x-alert-failed>
            @endif
            <div class="card bg-primary shadow-none position-relative overflow-hidden">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8 text-white">Master Polling</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <a href="{{ route('polls.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        @foreach($polls as $poll)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">{{ $poll->title }}</h5>

                        @if(Carbon::parse($poll->start)->format('M Y') == Carbon::parse($poll->end)->format('M Y'))
                            <h5 class="mb-4">Waktu Mulai
                                : {{ Carbon::parse($poll->start)->translatedFormat('d') . "-". Carbon::parse($poll->end)->translatedFormat('d F Y') }}</h5>
                        @else
                            <h5 class="mb-4">Waktu Mulai
                                : {{ Carbon::parse($poll->start)->translatedFormat('d F') . "-". Carbon::parse($poll->end)->translatedFormat('d F Y') }}</h5>
                        @endif
                        <p class="badge bg-success">Dimulai : {{ Carbon::parse($poll->start)->diffForHumans() }}</p>
                        <p class="badge bg-danger">Selesai : {{ Carbon::parse($poll->end)->diffForHumans() }}</p>
                        <div class="d-flex align-items-center gap-3 pb-3 border-bottom mb-3">
                            <div class="d-flex align-items-center">
                                <div
                                    class="bg-secondary rounded-2 d-flex align-items-center justify-content-center p-6">
                                    <i class="ti ti-message text-white fs-7"></i>
                                </div>
                            </div>
                            <div class="position-relative w-100 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-2 fw-semibold fs-4">Total Pertanyaan Tersedia</h6>
                                    <span> {{ $poll->questions_count }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a class="btn btn-outline-dark me-3"
                               href="{{ route('dashboard.export-poll', $poll->id) }}">Download Excel</a>
                            <a class="btn btn-outline-success me-3"
                               href="{{ route('polls.show', $poll->id) }}">Detail</a>
                            <a class="btn btn-outline-primary me-3"
                               href="{{ route('polls.edit', $poll->id) }}">Edit</a>
                            <button class="btn btn-primary delete-alert" data-id='{{ $poll->id }}'>Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <x-delete-modal></x-delete-modal>
@endsection
@section('script')
    <script src="{{ asset('dashboard_assets/dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).on('click', '.delete-alert', function () {
            $('#exampleModal').modal('show')
            const id = $(this).attr('data-id');
            let url = `{{ route('polls.destroy', ':id') }}`.replace(':id', id);
            $('#deleteForm').attr('action', url);
        });
    </script>
@endsection
