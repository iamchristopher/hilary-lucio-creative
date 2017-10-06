@if ($paginator->hasPages())
    <ul class="pagination">
        <li>
            <a
                {{ $paginator->onFirstPage() ? 'disabled' : '' }}
                href="{{ $paginator->previousPageUrl() ?? $paginator->url(1) }}"
                rel="prev"
            >&lsaquo;</a>
        </li>

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li>
                        <a
                            class="{{ $page == $paginator->currentPage() ? 'active' : '' }}"
                            href="{{ $url }}"
                        >{{ $page }}</a>
                    </li>
                @endforeach
            @endif
        @endforeach

        <li>
            <a
                {{ $paginator->hasMorePages() ? '' : 'disabled' }}
                href="{{ $paginator->nextPageUrl() }}"
                rel="next"
            >&rsaquo;</a>
        </li>
    </ul>
@endif
