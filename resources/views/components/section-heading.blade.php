@props(['eyebrow' => null, 'title', 'center' => false])

<div {{ $attributes->class(['max-w-2xl', 'mx-auto text-center' => $center]) }} data-reveal>
    @if ($eyebrow)
        <p class="eyebrow">{{ $eyebrow }}</p>
    @endif
    <h2 class="mt-3 text-3xl font-bold leading-tight sm:text-4xl lg:text-[44px]">{{ $title }}</h2>
    @if ($slot->isNotEmpty())
        <p class="mt-4 text-lg leading-relaxed text-muted">{{ $slot }}</p>
    @endif
</div>
