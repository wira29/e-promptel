@extends('landing.layouts.app') @section('content')
<div class="archive-header pt-50">
    <div class="container">
        <h2 class="font-weight-900">Polling</h2>
        <div class="breadcrumb">
            <a href="index-2.html" rel="nofollow">Beranda</a>
            <span></span> Polling
        </div>
        <div class="bt-1 border-color-1 mt-30 mb-50"></div>
    </div>
</div>
<div class="bg-white pt-10 pb-50">
    <!-- Modal -->
    <div
        class="modal fade"
        id="modal-respondent"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Isi Polling
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <form id="form-respondent" action="" method="POST">
                        @csrf
                        <input type="hidden" name="poll_id" />
                        <div>
                            <label for="">Nama</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control mt-10"
                                placeholder="Nama"
                            />
                        </div>
                        <div class="mt-20">
                            <label for="">Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control mt-10"
                                placeholder="Email"
                            />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button
                        id="btn-submit"
                        type="button"
                        class="btn btn-primary"
                    >
                        Isi Polling
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="post-module-3">
                        <div class="loop-list loop-list-style-1">
                            @foreach($polls as $poll)
                            <article
                                class="hover-up- mt-25 p-25 has-border transition-normal wow fadeInUp animated"
                            >
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-12 align-self-center">
                                        <div class="post-content">
                                            <div
                                                class="entry-meta meta-0 font-small mb-10"
                                            >
                                                <a href="#">
                                                    @if(\Carbon\Carbon::now()->lessThanOrEqualTo($poll->end))
                                                    <span
                                                        class="post-cat text-success"
                                                    >
                                                        Tersedia
                                                    </span>
                                                    @else
                                                    <span
                                                        class="post-cat text-danger"
                                                    >
                                                        Ditutup
                                                    </span>
                                                    @endif
                                                </a>
                                            </div>
                                            <h5
                                                class="post-title font-weight-900 mb-20"
                                            >
                                                <a
                                                    href="#"
                                                    >{{ $poll->title }}</a
                                                >
                                            </h5>
                                            <p>
                                                {{ substr(strip_tags($poll->description), 20)




                                                }}...
                                            </p>
                                            <div
                                                class="col-12 mb-10 entry-meta meta-1 float-start font-x-small text-uppercase"
                                            >
                                                <span class="post-on"
                                                    >{{ \Carbon\Carbon::make($poll->start)->format('d F Y') }}
                                                    -
                                                    {{ \Carbon\Carbon::make($poll->end)->format('d F Y') }}</span
                                                >
                                            </div>
                                            @if(\Carbon\Carbon::now()->lessThanOrEqualTo($poll->end))
                                            <button
                                                data-poll="{{ $poll }}"
                                                class="btn btn-primary btn-polling"
                                                type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"
                                            >
                                                Isi Polling
                                            </button>
                                            @else
                                            <a
                                                href="{{ route('landing.polling-result', $poll->id) }}"
                                                class="btn btn-primary"
                                            >
                                                Hasil Polling
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    {{ $polls->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('script')
<script>
    $(document).ready(function () {
        $(".btn-polling").click(function () {
            var poll = $(this).data("poll");
            $('input[name="poll_id"]').val(poll.id);
            $("#form-respondent").attr(
                "action",
                `{{ route('landing.polling-form', ':id') }}`.replace(
                    ":id",
                    poll.id
                )
            );
            $("#modal-respondent").modal("show");
        });

        $("#btn-submit").click(function () {
            if (
                $('input[name="name"]').val() == "" ||
                $('input[name="email"]').val() == ""
            ) {
                alert("form tidak boleh kosong !!");
                return;
            }
            $("#form-respondent").submit();
        });
    });
</script>
@endsection
