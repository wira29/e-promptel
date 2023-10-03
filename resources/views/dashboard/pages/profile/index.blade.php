@extends('dashboard.layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            @if(session('success'))
                <x-alert-success></x-alert-success>
            @endif
            <div class="card w-100 position-relative overflow-hidden mb-0">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold">Profil</h5>

                    <form method="POST" action="{{ route('user.change-password') }}">
                        @method('PATCH')
                        @csrf
                        <div class="row mt-5">
                            <div class="col-lg-8">
                                <div class="col-lg-12">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>{{ $data->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>:</td>
                                            <td>{{ $data->username }}</td>
                                        </tr>
                                        <tr>
                                            <td>NIK</td>
                                            <td>:</td>
                                            <td>{{ $data->national_identity_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{ $data->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('user.edit.profile') }}"
                                                   class="btn btn-primary btn-sm">Ubah Profile</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center">
                                    @if($data->photo)
                                        <img src="{{ asset('storage/' . $data->photo) }}"
                                             class="img-fluid rounded-circle"
                                             width="120"
                                             height="120">
                                    @else
                                        <img src="{{ asset('avatar.jpg') }}" class="img-fluid rounded-circle"
                                             width="120"
                                             height="120">
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold">Ubah Password</h5>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Password Baru</td>
                                            <td><input type="password" name="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       autocomplete="off">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Ulangi Password</td>
                                            <td><input type="password" name="password_confirmation"
                                                       class="form-control @error('password_confirmation') is-invalid @enderror"
                                                       autocomplete="off">
                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                    <button class="btn btn-primary">Simpan</button>
                                    <button class="btn btn-light-danger text-danger" type="reset">Batal</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
