@extends('landing.layouts.app') @section('content')
<div class="container single-content">
    <div class="entry-header entry-header-style-1 mb-50 pt-50">
        <h2 class="mb-50 font-weight-900 text-center">
            {{ $poll->title }}
        </h2>
        <p>{!! $poll->description !!}</p>
    </div>
    <article class="entry-wraper mb-50">
            <div class="single-excerpt">
                @foreach($poll->questions as $question)
                    <article
                        class="hover-up-2 mt-25 p-25 has-border transition-normal wow fadeInUp animated"
                    >
                        <div class="row mb-40 list-style-2">
                            <div class="col-md-6">
                                <div id="chart-{{ $question->id }}"></div>
                                <script>
                                    // Inisialisasi grafik pie Apex di sini menggunakan JavaScript
                                    var options = {
                                        series: {{ json_encode($count[$question->id]) }},
                                        chart: {
                                            width: 380,
                                            type: 'pie',
                                        },
                                        labels: ['Sangat Setuju', 'Setuju', 'Netral', 'Tidak Setuju', 'Sangat Tidak Setuju'],
                                        responsive: [{
                                            breakpoint: 480,
                                            options: {
                                                chart: {
                                                    width: 200
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                }
                                            }
                                        }]
                                    };
                                    var chart = new ApexCharts(document.querySelector("#chart-{{ $question->id }}"), options);
                                    chart.render();
                                </script>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="post-content">
                                    <h5
                                        class="post-title font-weight-900 mb-20"
                                    >
                                        {{ $question->name }}
                                    </h5>

                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
    </article>
</div>
<!--container-->
@endsection
