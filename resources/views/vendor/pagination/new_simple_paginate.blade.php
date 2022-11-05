@if ($paginator->hasPages())
    <nav class="pagination is-centered product__pagination" role="navigation" aria-label="pagination">

        {{-- Previous Page Link --}}
        @unless($paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous"><i
                    class="fa fa-long-arrow-left"></i></a>
        @endunless

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next"><i class="fa fa-long-arrow-right"></i></a>
    @endif

    </nav>
@endif
