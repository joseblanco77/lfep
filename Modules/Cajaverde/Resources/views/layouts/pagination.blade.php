@if ($paginator->hasPages())
<nav class="text-right">

    <ul class="pagination">

        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}"> Anterior </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li class="page-item">
                <a class="page-link" href="" onclick="return false;"> … </a>
            </li>
            @endif

            
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active">
                        <a class="page-link" href="" onclick="return false;"> {{ $page }} </a>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}"> {{ $page }} </a>
                    </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}"> Siguiente </a>
        </li>
        @endif

    </ul>

</nav>
@endif
