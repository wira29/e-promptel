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
@endsection
