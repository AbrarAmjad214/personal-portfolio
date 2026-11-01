@extends('layouts.app')

@php
    $years = now()->year - config('portfolio.career_start');
    $projects = collect(config('portfolio.projects'));
    $featured = $projects->where('featured', true)->values();
    $clients = $projects->pluck('title')->concat(collect(config('portfolio.cv_projects'))->pluck('title'));
    $stats = [['value' => $years . '+', 'label' => 'Years of experience'], ...config('portfolio.stats')];
@endphp

@section('content')
    {{-- Hero: opening shot --}}
    <section class="letterbox relative isolate flex min-h-[100svh] flex-col overflow-hidden">
        <div class="absolute inset-0 -z-10" data-hero-scene='@json($featured->take(3)->map(fn ($p) => asset($p['image']))->values())'>
            <div class="hero-fallback absolute bottom-[5%] left-[8%] h-[24%] w-[84%] lg:bottom-[18%] lg:left-auto lg:right-[4%] lg:h-[62%] lg:w-[44%]" aria-hidden="true">
                <div class="hero-fallback-stack relative h-full w-full">
                    @foreach ($featured->take(3)->reverse()->values() as $project)
                        <img src="{{ asset($project['image']) }}" alt="" width="1200" height="750" decoding="async" style="top: {{ (2 - $loop->index) * -9 }}%; left: {{ (2 - $loop->index) * 11 }}%; transform: translateZ({{ $loop->index * 90 - 180 }}px); filter: brightness({{ 0.5 + $loop->index * 0.25 }})">
                    @endforeach
                </div>
            </div>
            <canvas class="hero-canvas absolute inset-0 h-full w-full" aria-hidden="true"></canvas>
            <div class="hero-scrim absolute inset-0"></div>
        </div>

        <div class="container flex flex-1 items-start pb-[72vw] pt-28 sm:pb-[56vw] sm:pt-32 lg:items-center lg:pb-16 lg:pt-28">
            <div class="max-w-[600px]">
                @if (config('portfolio.available'))
                    <p class="rise inline-flex items-center gap-2 rounded-full border border-white/10 bg-ink-950/50 px-4 py-1.5 text-sm font-medium text-[#D5DAE2] backdrop-blur">
                        <span class="h-2 w-2 animate-pulse rounded-full bg-whatsapp"></span> Available for new projects
                    </p>
                @endif

                <h1 class="rise mt-6" style="--delay: 120ms">
                    <span class="block font-mono text-xs font-medium uppercase tracking-[0.2em] text-brand-300 sm:text-sm">Laravel &amp; WordPress Developer · Lahore, Pakistan</span>
                    <span class="mt-4 block text-[42px] font-extrabold leading-[1.02] sm:text-6xl lg:text-[68px]">Websites built to <span class="bg-gradient-to-r from-brand-200 via-brand-400 to-brand-600 bg-clip-text text-transparent">win you clients.</span></span>
                </h1>

                <p class="rise mt-6 max-w-xl text-lg leading-relaxed text-[#C5CBD5] sm:text-xl" style="--delay: 240ms">
                    Fast, mobile-friendly websites and custom web apps for businesses in the UAE, Canada, the USA and the UK — from a developer you talk to directly.
                </p>

                <div class="rise mt-8 flex flex-col gap-3 sm:flex-row" style="--delay: 360ms">
                    <a href="#quote" class="btn-whatsapp" data-track="quote_click" data-track-location="hero">
                        <x-icon name="whatsapp" /> Get a free quote
                    </a>
                    <a href="#work" class="btn-ghost" data-track="work_click" data-track-location="hero">
                        See live projects <x-icon name="arrow-right" class="h-4 w-4" />
                    </a>
                </div>

                <ul class="rise mt-7 flex flex-wrap gap-x-6 gap-y-2 text-sm text-[#C5CBD5]" style="--delay: 480ms">
                    @foreach (config('portfolio.promises') as $promise)
                        <li class="inline-flex items-center gap-2"><x-icon name="check" class="h-4 w-4 text-whatsapp" /> {{ $promise }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- Proof: numbers and client names --}}
    <section aria-label="Experience and clients" class="relative border-y border-white/[0.06] bg-ink-900/60">
        <div class="container py-9">
            <dl class="grid grid-cols-3 gap-4 text-center">
                @foreach ($stats as $stat)
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-xs text-muted sm:text-sm">{{ $stat['label'] }}</dt>
                        <dd class="font-display text-3xl font-extrabold text-white sm:text-5xl">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
        <div class="border-t border-white/[0.06] py-5">
            <div class="container">
                <h2 class="sr-only">Websites I've built for</h2>
                <div class="credits overflow-hidden">
                    <div class="credits-track flex w-max items-center">
                        @foreach ([false, true] as $duplicate)
                            <ul class="flex items-center" @if ($duplicate) aria-hidden="true" @endif>
                                @foreach ($clients as $client)
                                    <li class="whitespace-nowrap px-7 font-display text-base font-semibold text-white/55">{{ $client }}</li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- The problem and the fix --}}
    <section class="py-20 sm:py-28">
        <div class="container">
            <x-section-heading eyebrow="The problem" title="Most websites look fine and still lose customers.">
                Visitors decide in seconds. These are the problems I fix first, so more of them get in touch.
            </x-section-heading>

            <ul class="mt-14 grid gap-5 md:grid-cols-2">
                @foreach (config('portfolio.problems') as $item)
                    <li class="card p-7 sm:p-8" data-reveal style="transition-delay: {{ $loop->index * 70 }}ms">
                        <p class="flex items-start gap-3 text-[15px] text-muted">
                            <x-icon name="x" class="mt-0.5 h-5 w-5 text-red-400/80" /> {{ $item['problem'] }}
                        </p>
                        <h3 class="mt-4 flex items-start gap-3 text-xl font-semibold leading-snug">
                            <x-icon name="check" class="mt-1 h-5 w-5 text-whatsapp" /> {{ $item['title'] }}
                        </h3>
                        <p class="mt-3 pl-8 leading-relaxed text-muted">{{ $item['fix'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Selected work: stacked reel --}}
    <section id="work" class="scroll-mt-20 py-20 sm:py-28">
        <div class="container">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <x-section-heading eyebrow="Selected work" title="Real websites, live right now.">
                    Don't take my word for it. Open any of these on your own phone and try them.
                </x-section-heading>
                <a href="{{ route('portfolio') }}" class="btn-ghost shrink-0 self-start md:self-auto" data-reveal>View all projects <x-icon name="arrow-right" class="h-4 w-4" /></a>
            </div>

            <div class="mt-14 space-y-8">
                @foreach ($featured as $project)
                    <article class="card relative grid gap-8 overflow-hidden p-5 sm:p-8 lg:sticky lg:grid-cols-12 lg:items-center lg:gap-12 lg:p-10" style="top: {{ 96 + $loop->index * 16 }}px">
                        <div class="[perspective:1500px] lg:col-span-7 @if ($loop->even) lg:order-last @endif">
                            <a href="{{ route('portfolio.show', $project['slug']) }}" class="frame-3d block overflow-hidden rounded-2xl border border-white/10 bg-ink-800" data-depth style="--swing: {{ $loop->even ? '6deg' : '-6deg' }}" aria-label="{{ $project['title'] }} case study">
                                <span class="flex h-8 items-center gap-1.5 border-b border-white/10 bg-ink-900 px-4" aria-hidden="true">
                                    <span class="h-2 w-2 rounded-full bg-white/20"></span><span class="h-2 w-2 rounded-full bg-white/20"></span><span class="h-2 w-2 rounded-full bg-white/20"></span>
                                    <span class="ml-3 truncate font-mono text-[11px] text-muted">{{ preg_replace('#^https?://(www\.)?|/$#', '', $project['url']) }}</span>
                                </span>
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }} website homepage, built by {{ config('portfolio.name') }}" width="1200" height="750" loading="lazy" decoding="async" class="aspect-[16/10] w-full object-cover object-top">
                            </a>
                        </div>

                        <div class="lg:col-span-5">
                            <p class="font-mono text-xs uppercase tracking-[0.16em] text-brand-300">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }} — {{ $project['industry'] }}</p>
                            <h3 class="mt-3 text-3xl font-bold sm:text-4xl"><a href="{{ route('portfolio.show', $project['slug']) }}" class="transition hover:text-brand-300">{{ $project['title'] }}</a></h3>
                            <p class="mt-4 leading-relaxed text-muted">{{ $project['summary'] }}</p>
                            <ul class="mt-5 space-y-2">
                                @foreach ($project['highlights'] as $highlight)
                                    <li class="flex gap-3 text-[15px] text-[#D5DAE2]"><x-icon name="check" class="mt-0.5 h-[18px] w-[18px] text-brand-400" /> {{ $highlight }}</li>
                                @endforeach
                            </ul>
                            <div class="mt-7 flex flex-wrap items-center gap-x-6 gap-y-3">
                                <a href="{{ route('portfolio.show', $project['slug']) }}" class="btn-primary !px-5 !py-3">Case study <x-icon name="arrow-right" class="h-4 w-4" /></a>
                                <a href="{{ $project['url'] }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 font-semibold text-[#D5DAE2] transition hover:text-white" data-track="project_visit" data-track-location="{{ $project['title'] }}">
                                    Live site <x-icon name="arrow-up-right" class="h-4 w-4" />
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="py-20 sm:py-28">
        <div class="container">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <x-section-heading eyebrow="Services" title="How I can help your business">
                    From a new business website to a custom web app — built to load fast, look professional and turn visitors into enquiries.
                </x-section-heading>
                <a href="{{ route('services') }}" class="btn-ghost shrink-0 self-start md:self-auto" data-reveal>All services <x-icon name="arrow-right" class="h-4 w-4" /></a>
            </div>

            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach (config('portfolio.services') as $service)
                    <a href="{{ route('services.show', $service['slug']) }}" class="card group p-7 transition hover:-translate-y-1 hover:border-brand-400/40" data-reveal>
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-400/10 text-brand-300">
                            <x-icon :name="$service['icon']" class="h-6 w-6" />
                        </span>
                        <h3 class="mt-6 text-xl font-semibold">{{ $service['title'] }}</h3>
                        <p class="mt-3 leading-relaxed text-muted">{{ $service['summary'] }}</p>
                        <span class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-brand-300">
                            Learn more <x-icon name="arrow-right" class="h-4 w-4 transition group-hover:translate-x-1" />
                        </span>
                    </a>
                @endforeach

                <div class="card flex flex-col justify-between border-whatsapp/25 bg-whatsapp/[0.06] p-7" data-reveal>
                    <div>
                        <h3 class="text-xl font-semibold">Not sure what you need?</h3>
                        <p class="mt-3 leading-relaxed text-muted">Tell me about your business and goals — I'll recommend the right solution for your budget.</p>
                    </div>
                    <x-whatsapp location="services_card" message="Hi Abrar, I'm not sure exactly what I need — can you help me figure out the right website for my business?" class="btn-whatsapp mt-6">
                        <x-icon name="whatsapp" /> Ask me on WhatsApp
                    </x-whatsapp>
                </div>
            </div>
        </div>
    </section>

    {{-- Comparison --}}
    <section class="py-20 sm:py-28">
        <div class="container">
            <x-section-heading eyebrow="Why me" title="What changes when you hire the developer directly" center />

            <div class="card mt-14 overflow-x-auto" data-reveal>
                <table class="w-full min-w-[680px] text-left">
                    <thead>
                        <tr class="border-b border-white/[0.08]">
                            <th scope="col" class="p-5 text-sm font-medium text-muted sm:p-6"><span class="sr-only">Compare</span></th>
                            <th scope="col" class="bg-brand-400/[0.07] p-5 font-display font-semibold text-brand-200 sm:p-6">Working with me</th>
                            <th scope="col" class="p-5 font-display font-semibold text-white/70 sm:p-6">Typical agency</th>
                            <th scope="col" class="p-5 font-display font-semibold text-white/70 sm:p-6">DIY website builder</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (config('portfolio.comparison') as $row)
                            <tr class="border-b border-white/[0.06] last:border-0">
                                <th scope="row" class="p-5 text-[15px] font-medium text-white sm:p-6">{{ $row['label'] }}</th>
                                <td class="bg-brand-400/[0.07] p-5 text-[15px] text-[#E9ECF1] sm:p-6">{{ $row['me'] }}</td>
                                <td class="p-5 text-[15px] text-muted sm:p-6">{{ $row['agency'] }}</td>
                                <td class="p-5 text-[15px] text-muted sm:p-6">{{ $row['diy'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    @include('partials.process')

    @include('partials.testimonials')

    @include('partials.quote-builder')

    {{-- About teaser --}}
    <section class="py-20 sm:py-28">
        <div class="container grid items-center gap-12 lg:grid-cols-12">
            <div class="mx-auto w-full max-w-sm [perspective:1200px] lg:col-span-4 lg:max-w-none" data-reveal>
                <img src="{{ asset(config('portfolio.photo')) }}" alt="Portrait of {{ config('portfolio.name') }}, Laravel and WordPress developer in Lahore" width="400" height="400" loading="lazy" class="tilt aspect-square w-full rounded-[32px] border border-white/10 object-cover shadow-2xl shadow-black/60" data-tilt>
            </div>

            <div class="lg:col-span-7 lg:col-start-6" data-reveal>
                <x-section-heading eyebrow="Who you'll work with" title="Hi, I'm Abrar.">
                    A full-stack developer from Lahore with {{ $years }}+ years of experience building websites and web apps for businesses abroad. I care about clean code, clear communication and results you can measure.
                </x-section-heading>
                <ul class="mt-7 grid gap-4 sm:grid-cols-3">
                    <li class="flex gap-3 text-[15px] text-[#D5DAE2]"><x-icon name="chat" class="text-brand-300" /> You talk directly to the developer</li>
                    <li class="flex gap-3 text-[15px] text-[#D5DAE2]"><x-icon name="zap" class="text-brand-300" /> Built for speed and enquiries</li>
                    <li class="flex gap-3 text-[15px] text-[#D5DAE2]"><x-icon name="shield" class="text-brand-300" /> Support after launch</li>
                </ul>
                <a href="{{ route('about') }}" class="btn-ghost mt-8">More about me <x-icon name="arrow-right" class="h-4 w-4" /></a>
            </div>
        </div>
    </section>

    @include('partials.faq')

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            '@id' => url('/') . '#business',
            'name' => config('portfolio.brand') . ' — ' . config('portfolio.name'),
            'description' => 'Freelance Laravel and WordPress development for businesses in the UAE, Canada, the USA, the UK and Pakistan.',
            'url' => url('/'),
            'image' => asset(config('portfolio.photo')),
            'telephone' => config('portfolio.contact.phone_href'),
            'email' => config('portfolio.contact.email'),
            'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Lahore', 'addressRegion' => 'Punjab', 'addressCountry' => 'PK'],
            'areaServed' => ['United Arab Emirates', 'Pakistan', 'Canada', 'United States', 'United Kingdom'],
            'founder' => ['@id' => url('/') . '#person'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Web development services',
                'itemListElement' => collect(config('portfolio.services'))->map(fn ($service) => [
                    '@type' => 'Offer',
                    'itemOffered' => ['@type' => 'Service', 'name' => $service['title'], 'url' => route('services.show', $service['slug'])],
                ])->all(),
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endsection
