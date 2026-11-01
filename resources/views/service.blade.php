@extends('layouts.app')

@section('title', $service['seo_title'])
@section('description', $service['meta'])

@php
    // Closest matches first, topped up with other live projects.
    $examples = collect(config('portfolio.projects'))
        ->sortByDesc(fn ($project) => in_array($project['category'], $service['projects']))
        ->take(3);
    $others = collect(config('portfolio.services'))->where('slug', '!=', $service['slug']);
@endphp

@section('content')
    <x-page-hero :eyebrow="$service['title']" :title="$service['h1']">
        <x-slot:breadcrumbs>
            @include('partials.breadcrumbs', ['crumbs' => ['Home' => route('home'), 'Services' => route('services'), $service['title'] => url()->current()]])
        </x-slot:breadcrumbs>
        {{ $service['summary'] }}
        <x-slot:actions>
            <x-whatsapp location="service_page_{{ $service['slug'] }}" :message="'Hi Abrar, I\'m interested in ' . $service['title'] . '. Can we discuss my project?'" class="btn-whatsapp">
                <x-icon name="whatsapp" /> Get a free quote
            </x-whatsapp>
            <a href="#examples" class="btn-ghost">See examples <x-icon name="arrow-right" class="h-4 w-4" /></a>
        </x-slot:actions>
    </x-page-hero>

    <section class="pb-20 sm:pb-28">
        <div class="container grid gap-10 lg:grid-cols-12">
            <div class="space-y-5 text-lg leading-relaxed text-muted lg:col-span-7" data-reveal>
                @foreach ($service['intro'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
            <div class="card p-7 lg:col-span-5" data-reveal>
                <h2 class="text-xl font-semibold">What's included</h2>
                <ul class="mt-5 space-y-3">
                    @foreach ($service['includes'] as $item)
                        <li class="flex gap-3 text-[#D5DAE2]"><x-icon name="check" class="mt-0.5 h-5 w-5 text-brand-400" /> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="container mt-14 grid gap-5 md:grid-cols-3">
            @foreach ($service['benefits'] as $benefit)
                <div class="card p-7" data-reveal>
                    <h3 class="text-lg font-semibold">{{ $benefit['title'] }}</h3>
                    <p class="mt-3 leading-relaxed text-muted">{{ $benefit['text'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    @if ($examples->isNotEmpty())
        <section id="examples" class="scroll-mt-24 py-20 sm:py-28">
            <div class="container">
                <x-section-heading eyebrow="Examples" title="Recent projects">
                    Live websites I've built — click through and try them yourself.
                </x-section-heading>
                <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($examples as $project)
                        @include('partials.project-card', ['project' => $project])
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @include('partials.process')

    @include('partials.quote-builder', ['preselect' => $service['title']])

    @include('partials.faq', ['faqs' => $service['faq']])

    {{-- Internal links to the other services --}}
    <section class="pb-4">
        <div class="container">
            <h2 class="text-2xl font-bold">Other services</h2>
            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($others as $other)
                    <a href="{{ route('services.show', $other['slug']) }}" class="card group flex items-center gap-4 p-5 transition hover:border-brand-500/40">
                        <span class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-500/15 text-brand-300"><x-icon :name="$other['icon']" /></span>
                        <span class="font-semibold text-white">{{ $other['title'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $service['title'],
            'description' => $service['meta'],
            'url' => url()->current(),
            'areaServed' => ['United Arab Emirates', 'Pakistan', 'Worldwide'],
            'provider' => ['@type' => 'Person', 'name' => config('portfolio.name'), 'url' => url('/')],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endsection
