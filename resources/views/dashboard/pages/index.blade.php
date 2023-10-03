@extends('dashboard.layouts.app')

@section('content')
    <div class="row">
        <div class="card bg-primary shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8 text-white">Halo, {{ auth()->user()->name }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-xl-4">
                <div class="card border-0 zoom-in bg-light-danger shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img
                                src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-favorites.svg"
                                width="50" height="50" class="mb-3" alt="">
                            <p class="fw-semibold fs-3 text-danger mb-1">Total Artikel</p>
                            <h5 class="fw-semibold text-danger mb-0">{{ $total_articles }}</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-4">
                <div class="card border-0 zoom-in bg-light-warning shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img
                                src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-briefcase.svg"
                                width="50" height="50" class="mb-3" alt="">
                            <p class="fw-semibold fs-3 text-warning mb-1">Total Agenda</p>
                            <h5 class="fw-semibold text-warning mb-0">{{ $total_agendas }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="card border-0 zoom-in bg-light-success shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img
                                src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-speech-bubble.svg"
                                width="50" height="50" class="mb-3" alt="">
                            <p class="fw-semibold fs-3 text-success mb-1">Total Soal</p>
                            <h5 class="fw-semibold text-success mb-0">{{ $total_polls }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-info shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img
                                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-mailbox.svg"
                                    width="50" height="50" class="mb-3" alt="">
                                <p class="fw-semibold fs-3 text-info mb-1">Total kegiatan</p>
                                <h5 class="fw-semibold text-info mb-0">{{ $total_activities }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-4">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-info shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img
                                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-connect.svg"
                                    width="50" height="50" class="mb-3" alt="">
                                <p class="fw-semibold fs-3 text-info mb-1">Total Materi Audio</p>
                                <h5 class="fw-semibold text-info mb-0">{{ $total_audios }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-info shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img
                                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-connect.svg"
                                    width="50" height="50" class="mb-3" alt="">
                                <p class="fw-semibold fs-3 text-info mb-1">Total Materi Video</p>
                                <h5 class="fw-semibold text-info mb-0">{{ $total_videos }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
