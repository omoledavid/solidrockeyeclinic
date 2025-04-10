@if ($paginator->hasPages())
    <div class="post-pagination wow fadeInUp" data-wow-delay="1.8s">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}"><i class="fa-solid fa-arrow-left-long"></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled"><a href="#">{{ $element }}</a></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa-solid fa-arrow-right-long"></i></a></li>
            @else
                <li class="disabled"><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
            @endif
        </ul>
    </div>
@endif
