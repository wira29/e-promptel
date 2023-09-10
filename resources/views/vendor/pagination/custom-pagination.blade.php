@if ($paginator->hasPages())
    <div class="pagination-area mb-30 wow fadeInUp animated">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                    <li class="page-item">
                        <a class="page-link disabled" href="#"
                        ><i class="elegant-icon arrow_left"></i
                            ></a>
                    </li>
            @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                        ><i class="elegant-icon arrow_left"></i
                            ></a>
                    </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                        @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                        ><i class="elegant-icon arrow_right"></i
                            ></a>
                    </li>
            @else
                    <li class="page-item">
                        <a class="page-link disabled" href="#"
                        ><i class="elegant-icon arrow_right"></i
                            ></a>
                    </li>
            @endif
            </ul>
        </nav>
    </div>
@endif
