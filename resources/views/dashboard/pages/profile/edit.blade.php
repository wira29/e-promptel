@php use App\Enums\EmployeeStatusEnum;use App\Enums\GenderEnum; @endphp
@extends('dashboard.layouts.app')

@section('content')
    <div class="row">
        <div class="card bg-primary shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8 text-white">Master Profil</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('user.change.profile') }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $employee->name }}" autocomplete="off" name="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">Nama</label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input value="{{ $employee->civil_identity_number }}" autocomplete="off"
                                           name="civil_identity_number" type="text"
                                           class="form-control @error('civil_identity_number') is-invalid @enderror"
                                           id="tb-fname"
                                           placeholder="Enter Name here">
                                    <label for="tb-fname">NIP</label>
                                    @error('civil_identity_number')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input autocomplete="off" name="username" type="text"
                                           class="form-control @error('username') is-invalid @enderror" id="tb-pwd"
                                           placeholder="Password" value="{{ $employee->username }}">
                                    <label for="tb-pwd">Username</label>
                                    @error('username')
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
