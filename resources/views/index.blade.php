@extends('layouts.app')

@php
    $years = now()->year - config('portfolio.career_start');
    $featured = collect(config('portfolio.projects'))->where('featured', true);
@endphp

@section('content')
    {{-- Hero --}}
    <section class="relative overflow-hidden pb-20 pt-32 sm:pt-40 lg:pb-28">
        <div class="pointer-events-none absolute -right-40 top-0 h-[520px] w-[720px] rounded-full bg-brand-500/25 blur-[140px]"></div>
        <div class="pointer-events-none absolute -left-40 top-40 h-[360px] w-[480px] rounded-full bg-whatsapp/10 blur-[140px]"></div>

        <div class="container relative grid items-center gap-14 lg:grid-cols-12">
            <div class="lg:col-span-7" data-reveal>
                @if (config('portfolio.available'))
                    <p class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.04] px-4 py-1.5 text-sm font-medium text-[#D6D2E0]">
                        <span class="h-2 w-2 animate-pulse rounded-full bg-whatsapp"></span> Available for new projects
                    </p>
                @endif

                <h1 class="mt-6">
                    <span class="block font-sans text-base font-semibold uppercase tracking-[0.14em] text-brand-300">Laravel & WordPress Developer · Lahore, Pakistan</span>
                    <span class="mt-4 block text-[40px] font-bold leading-[1.05] sm:text-6xl lg:text-[68px]">Websites that look great <span class="bg-gradient-to-r from-brand-300 to-brand-500 bg-clip-text text-transparent">and win you clients.</span></span>
                </h1>

                <p class="mt-6 max-w-xl text-lg leading-relaxed text-muted sm:text-xl">
                    I'm {{ config('portfolio.name') }}, a full-stack developer building fast, mobile-friendly websites and web apps with Laravel, React and WordPress — for businesses in the UAE, Pakistan, Canada and the UK.
                </p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <x-whatsapp location="hero" class="btn-whatsapp">
                        <x-icon name="whatsapp" /> Get a free quote on WhatsApp
                    </x-whatsapp>
                    <a href="{{ route('portfolio') }}" class="btn-ghost" data-track="work_click" data-track-location="hero">
                        See my work <x-icon name="arrow-right" class="h-4 w-4" />
                    </a>
                </div>

                <ul class="mt-8 flex flex-wrap gap-x-6 gap-y-2 text-sm text-muted">
                    @foreach (config('portfolio.promises') as $promise)
                        <li class="inline-flex items-center gap-2"><x-icon name="check" class="h-4 w-4 text-whatsapp" /> {{ $promise }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="relative mx-auto w-full max-w-sm lg:col-span-5 lg:max-w-none" data-reveal>
                <div class="relative mx-auto aspect-square w-full max-w-[400px]">
                    <div class="absolute inset-0 rotate-6 rounded-[40px] bg-gradient-to-br from-brand-500 to-brand-600 opacity-80"></div>
                    <img src="{{ asset(config('portfolio.photo')) }}" alt="Portrait of {{ config('portfolio.name') }}" width="400" height="400" fetchpriority="high" class="relative h-full w-full rounded-[40px] border border-white/10 object-cover">

                    <div class="absolute -bottom-6 -left-4 flex items-center gap-3 rounded-2xl border border-white/10 bg-ink-900/90 px-4 py-3 shadow-2xl backdrop-blur sm:-left-10">
                        <span class="font-display text-3xl font-bold text-white">{{ $years }}+</span>
                        <span class="text-sm leading-tight text-muted">years building<br>for clients</span>
                    </div>
                    <div class="absolute -right-3 top-8 rounded-2xl border border-white/10 bg-ink-900/90 px-4 py-3 shadow-2xl backdrop-blur sm:-right-8">
                        <p class="text-xs uppercase tracking-wider text-muted">Stack</p>
                        <p class="mt-1 font-semibold text-white">Laravel · React · WP</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Social proof: clients --}}
    <section class="border-y border-white/[0.06] bg-ink-900/50 py-10">
        <div class="container">
            <p class="text-center text-sm font-medium uppercase tracking-[0.14em] text-muted">Websites I've built for</p>
            <ul class="mt-6 flex flex-wrap items-center justify-center gap-x-10 gap-y-4">
                @foreach (config('portfolio.projects') as $project)
                    <li class="font-display text-lg font-semibold text-white/60 sm:text-xl">{{ $project['title'] }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Stats --}}
    <section class="py-16">
        <div class="container">
            <dl class="grid gap-4 sm:grid-cols-3">
                @foreach ([['value' => $years . '+', 'label' => 'Years of experience'], ...config('portfolio.stats')] as $stat)
                    <div class="card flex flex-col-reverse gap-1 p-6 text-center" data-reveal>
                        <dt class="text-sm text-muted">{{ $stat['label'] }}</dt>
                        <dd class="font-display text-4xl font-bold text-white sm:text-5xl">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
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
                    <a href="{{ route('services.show', $service['slug']) }}" class="card group p-7 transition hover:-translate-y-1 hover:border-brand-500/40" data-reveal>
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-500/15 text-brand-300">
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

    {{-- Selected work --}}
    <section class="py-20 sm:py-28">
        <div class="container">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <x-section-heading eyebrow="Selected work" title="Real websites for real businesses">
                    A few recent projects — every one is live, so you can click through and try them yourself.
                </x-section-heading>
                <a href="{{ route('portfolio') }}" class="btn-ghost shrink-0 self-start md:self-auto" data-reveal>View all projects <x-icon name="arrow-right" class="h-4 w-4" /></a>
            </div>

            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($featured as $project)
                    @include('partials.project-card', ['project' => $project])
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.process')

    @include('partials.testimonials')

    {{-- About teaser --}}
    <section class="py-20 sm:py-28">
        <div class="container grid items-center gap-12 lg:grid-cols-2">
            <div class="card relative overflow-hidden p-8 sm:p-10" data-reveal>
                <p class="eyebrow">Why work with me</p>
                <ul class="mt-6 space-y-6">
                    <li class="flex gap-4">
                        <span class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/15 text-brand-300"><x-icon name="chat" /></span>
                        <div>
                            <h3 class="text-lg font-semibold">You talk directly to the developer</h3>
                            <p class="mt-1 text-muted">No account managers or agencies in between — fast answers and no lost details.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/15 text-brand-300"><x-icon name="zap" /></span>
                        <div>
                            <h3 class="text-lg font-semibold">Built for speed and enquiries</h3>
                            <p class="mt-1 text-muted">Clean code, mobile-first layouts and clear calls to action that help visitors become customers.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/15 text-brand-300"><x-icon name="shield" /></span>
                        <div>
                            <h3 class="text-lg font-semibold">Support after launch</h3>
                            <p class="mt-1 text-muted">I don't disappear after handover — fixes, updates and new features when you need them.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div data-reveal>
                <x-section-heading eyebrow="About me" title="Hi, I'm Abrar 👋">
                    A full-stack developer from Lahore with {{ $years }}+ years of experience building websites and web apps for agencies and businesses abroad. I care about clean code, clear communication and results you can measure.
                </x-section-heading>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('about') }}" class="btn-primary">More about me <x-icon name="arrow-right" class="h-4 w-4" /></a>
                    <a href="{{ asset(config('portfolio.cv')) }}" class="btn-ghost" download data-track="cv_download" data-track-location="home_about">
                        <x-icon name="download" class="h-4 w-4" /> Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.faq')
@endsection
