@extends('dashboard.layouts.app')
@section('style')
    <style>
        .body-wrapper > .container-fluid {
            max-width: 100%;
        }

        .table-responsive {
            overflow-x: initial;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <link rel="stylesheet"
          href="{{ asset('dashboard_assets/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <x-alert-success></x-alert-success>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="mb-2">
                        <h5 class="mb-4">Halaman Artikel</h5>
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config"
                               class="table border table-striped table-bordered text-nowrap">
                            <thead>
                            <!-- start row -->
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Thumbnail</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            <!-- end row -->
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                    end Zero Configuration
                ---------------- -->
        </div>
    </div>
    <x-delete-modal></x-delete-modal>
@endsection

@section('script')
    <script src="{{ asset('dashboard_assets/dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(() => {
            $("#zero_config").DataTable({
                scrollX: false,
                scrollY: '500px',
                paging: true,
                ordering: true,
                responsive: true,
                pageLength: 50,
                processing: true,
                serverSide: true,
                searching: true,
                ajax: "{{ route('articles.index') }}",
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'category.name',
                        name: 'category.name'
                    },
                    {
                        data: 'thumbnail',
                        name: 'thumbnail',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $(document).on('click', '.delete-alert', function () {
                $('#exampleModal').modal('show')
                const id = $(this).attr('data-id');
                let url = `{{ route('articles.destroy', ':id') }}`.replace(':id', id);
                $('#deleteForm').attr('action', url);
            });
        })
    </script>
@endsection
