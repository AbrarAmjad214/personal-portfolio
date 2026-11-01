{{-- Expects $crumbs as [label => url]; the last item is the current page. --}}
<nav aria-label="Breadcrumb" class="text-sm text-muted">
    <ol class="flex flex-wrap items-center gap-2">
        @foreach ($crumbs as $label => $url)
            <li class="flex items-center gap-2">
                @if ($loop->last)
                    <span aria-current="page" class="text-white/80">{{ $label }}</span>
                @else
                    <a href="{{ $url }}" class="transition hover:text-white">{{ $label }}</a>
                    <span aria-hidden="true">/</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>

<script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => collect($crumbs)->keys()->map(fn ($label, $i) => [
            '@type' => 'ListItem',
            'position' => $i + 1,
            'name' => $label,
            'item' => array_values($crumbs)[$i],
        ])->all(),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
