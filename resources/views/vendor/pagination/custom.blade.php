@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="custom-pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">&laquo; Previous</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next &raquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">Next &raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif

<style>
    .custom-pagination {
        margin-top: 30px;
        display: flex;
        justify-content: center;
    }
    
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
        gap: 5px;
    }
    
    .page-item {
        display: inline-block;
    }
    
    .page-link {
        display: block;
        padding: 10px 15px;
        background: white;
        border: 1px solid #ddd;
        color: #333;
        text-decoration: none;
        border-radius: 4px;
        transition: all 0.3s ease;
    }
    
    .page-link:hover {
        background: #333;
        color: white;
        border-color: #333;
    }
    
    .page-item.active .page-link {
        background: #333;
        color: white;
        border-color: #333;
        font-weight: bold;
    }
    
    .page-item.disabled .page-link {
        color: #ccc;
        cursor: not-allowed;
        background: #f8f8f8;
    }
    
    .page-item.disabled .page-link:hover {
        background: #f8f8f8;
        color: #ccc;
        border-color: #ddd;
    }
</style>
