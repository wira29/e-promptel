@extends('dashboard.layouts.app')

@section('content')
    <div class="row">
        <div class="card bg-primary shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8 text-white">Halaman Struktur Organisasi</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            @if (session('success'))
                <x-alert-success></x-alert-success>
            @endif
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('organization.update', $organization) }}"
                          enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h3 for="tb-fname">Struktur Organisasi</h3>
                                <img src="{{ asset('storage/' . $organization->photo) }}" style="width: 100%">
                                <div class="form-floating mb-3">
                                    <input name="photo" type="file"
                                           class="form-control @error('photo') is-invalid @enderror">
                                    @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <h3 for="tb-fname">Deskripsi</h3>

                                <div class="form-floating mb-3">
                                    <textarea style="height: 150px" autocomplete="off" name="description" type="text"
                                              class="form-control @error('description') is-invalid @enderror"
                                              id="description"
                                              cols="50"
                                              rows="10">{{ $organization->description }}</textarea>
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
                                                Update
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

    <script>
        CKEDITOR.replace("description", {
            height: 400,
        });
    </script>
@endsection
