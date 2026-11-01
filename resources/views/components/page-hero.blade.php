{{-- Intro block at the top of inner pages --}}
@props(['eyebrow', 'title'])

<section class="relative overflow-hidden pb-14 pt-36 sm:pb-20 sm:pt-44">
    <div class="pointer-events-none absolute left-1/2 top-0 h-[420px] w-[820px] -translate-x-1/2 rounded-full bg-brand-500/20 blur-[120px]"></div>
    <div class="container relative">
        <div class="max-w-3xl" data-reveal>
            @isset($breadcrumbs)
                <div class="mb-6">{{ $breadcrumbs }}</div>
            @endisset
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h1 class="mt-4 text-4xl font-bold leading-[1.1] sm:text-5xl lg:text-6xl">{{ $title }}</h1>
            <div class="mt-6 text-lg leading-relaxed text-muted sm:text-xl">{{ $slot }}</div>
            @isset($actions)
                <div class="mt-8 flex flex-wrap gap-3">{{ $actions }}</div>
            @endisset
        </div>
    </div>
</section>
