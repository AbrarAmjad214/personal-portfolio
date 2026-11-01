{{-- Intro block at the top of inner pages --}}
@props(['eyebrow', 'title'])

<section class="relative mb-14 overflow-hidden pb-14 pt-36 sm:mb-20 sm:pb-20 sm:pt-44">
    <div class="pointer-events-none absolute right-[-10%] top-[-20%] h-[460px] w-[720px] rounded-full bg-brand-500/15 blur-[120px]"></div>
    <div class="pointer-events-none absolute left-[-10%] top-[10%] h-[360px] w-[560px] rounded-full bg-cool-400/10 blur-[120px]"></div>
    <div class="streak bottom-0"></div>
    <div class="container relative">
        <div class="max-w-3xl" data-reveal>
            @isset($breadcrumbs)
                <div class="mb-6">{{ $breadcrumbs }}</div>
            @endisset
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-[1.06] sm:text-5xl lg:text-6xl">{{ $title }}</h1>
            <div class="mt-6 text-lg leading-relaxed text-muted sm:text-xl">{{ $slot }}</div>
            @isset($actions)
                <div class="mt-8 flex flex-wrap gap-3">{{ $actions }}</div>
            @endisset
        </div>
    </div>
</section>
