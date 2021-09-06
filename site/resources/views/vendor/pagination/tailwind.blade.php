@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="main__pagination pagination">
        <div class="pagination__container">
            @if ($paginator->onFirstPage())
                <span class="pagination__pn_not_link">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination__pn_link">
                    {!! __('pagination.previous') !!}
                </a>
            @endif


                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <span class="">{{ $element }}</span>
                        </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                    <span class="pagination__not_link">{{ $page }}</span>
                                </span>
                            @else
                                <a href="{{ $url }}" class="pagination__link" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach


            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination__pn_link">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="pagination__pn_not_link">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>
    </nav>
@endif
