@if ($paginator->hasPages())
    <nav class="pagination product__pagination" role="navigation" aria-label="pagination">
       @unless($paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous"><i
                    class="fa fa-long-arrow-left"></i></a>
        @endunless



        {{-- <ul class="pagination-list"> --}}

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="pagination-ellipsis">&hellip;</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item" color="green">
                        <a class="pagination-link is-current" aria-label="Page {{ $page }}"
                            aria-current="page">{{ $page }}</a>
                        </li>
                    @else
                    <li class="page-item">
                        <a href="{{ $url }}" class="pagination-link"
                            aria-label="Goto page {{ $page }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next"><i class="fa fa-long-arrow-right"></i></a>
    @endif
        {{-- </ul> --}}
    </nav>
@endif
