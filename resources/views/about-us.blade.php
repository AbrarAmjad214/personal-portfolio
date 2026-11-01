@extends('layouts.app')

@section('title', 'About — Laravel & WordPress Developer in Lahore')
@section('description', 'Abrar Amjad is a full-stack web developer in Lahore with experience building Laravel, React and WordPress websites for businesses in the UAE, Pakistan, Canada and the UK.')

@php($years = now()->year - config('portfolio.career_start'))

@section('content')
    <x-page-hero eyebrow="About me" title="Laravel & WordPress developer helping businesses grow online.">
        I'm {{ config('portfolio.name') }}, a {{ strtolower(config('portfolio.role')) }} based in Lahore, Pakistan, with {{ $years }}+ years of professional experience.
        <x-slot:actions>
            <x-whatsapp location="about_hero" class="btn-whatsapp"><x-icon name="whatsapp" /> Let's work together</x-whatsapp>
            <a href="{{ asset(config('portfolio.cv')) }}" class="btn-ghost" download data-track="cv_download" data-track-location="about_hero"><x-icon name="download" class="h-4 w-4" /> Download CV</a>
        </x-slot:actions>
    </x-page-hero>

    {{-- Story --}}
    <section class="pb-20 sm:pb-28">
        <div class="container grid items-start gap-12 lg:grid-cols-12">
            <div class="lg:col-span-5" data-reveal>
                <img src="{{ asset(config('portfolio.photo')) }}" alt="Portrait of {{ config('portfolio.name') }}" width="480" height="480" loading="lazy" class="aspect-square w-full max-w-md rounded-[32px] border border-white/10 object-cover">
            </div>
            <div class="space-y-5 text-lg leading-relaxed text-muted lg:col-span-7" data-reveal>
                <h2 class="text-3xl font-bold sm:text-4xl">My story</h2>
                <p>
                    I started out building front ends with HTML, CSS and JavaScript, and quickly moved into full-stack work with PHP and Laravel. Today I build everything from marketing websites to custom dashboards and booking systems.
                </p>
                <p>
                    I've worked with development teams at <span class="text-white">BM Group</span> and <span class="text-white">Maxflap Technologies</span> in Lahore, delivering websites for clients in software, construction, storage, marketing, travel and transport — from Dubai and Lahore to Canada and the UK.
                </p>
                <p>
                    What I care about most: websites that load fast, work perfectly on phones, and make it easy for visitors to get in touch. Good design is nice — a site that brings in customers is better.
                </p>
                <div class="grid gap-4 pt-4 sm:grid-cols-3">
                    <div class="card p-5"><p class="font-display text-3xl font-bold text-white">{{ $years }}+</p><p class="mt-1 text-sm">Years experience</p></div>
                    @foreach (config('portfolio.stats') as $stat)
                        <div class="card p-5"><p class="font-display text-3xl font-bold text-white">{{ $stat['value'] }}</p><p class="mt-1 text-sm">{{ $stat['label'] }}</p></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Experience & education --}}
    <section class="py-20 sm:py-28">
        <div class="container grid gap-14 lg:grid-cols-2">
            <div>
                <x-section-heading eyebrow="Experience" title="Where I've worked" />
                <ol class="mt-10 space-y-5 border-l border-white/10 pl-8">
                    @foreach (config('portfolio.experience') as $job)
                        <li class="relative" data-reveal>
                            <span class="absolute -left-[37px] top-2 h-3 w-3 rounded-full bg-brand-500 ring-4 ring-ink-950"></span>
                            <p class="text-sm font-medium text-brand-300">{{ $job['period'] }}</p>
                            <h3 class="mt-1 text-xl font-semibold">{{ $job['role'] }}</h3>
                            <p class="text-white/70">{{ $job['company'] }}</p>
                            <p class="mt-3 leading-relaxed text-muted">{{ $job['text'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div>
                <x-section-heading eyebrow="Education" title="What I've studied" />
                <ol class="mt-10 space-y-5 border-l border-white/10 pl-8">
                    @foreach (config('portfolio.education') as $item)
                        <li class="relative" data-reveal>
                            <span class="absolute -left-[37px] top-2 h-3 w-3 rounded-full bg-brand-500 ring-4 ring-ink-950"></span>
                            <p class="text-sm font-medium text-brand-300">{{ $item['period'] }}</p>
                            <h3 class="mt-1 text-xl font-semibold">{{ $item['title'] }}</h3>
                            <p class="text-white/70">{{ $item['school'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    {{-- Tech stack --}}
    <section class="py-20 sm:py-28">
        <div class="container">
            <x-section-heading eyebrow="Toolbox" title="Technologies I work with" center>
                Proven, well-supported tools — so your site is easy to maintain and grow.
            </x-section-heading>
            <div class="mt-14 grid gap-5 md:grid-cols-3">
                @foreach (config('portfolio.stack') as $group => $tools)
                    <div class="card p-7" data-reveal>
                        <h3 class="text-lg font-semibold">{{ $group }}</h3>
                        <div class="mt-5 flex flex-wrap gap-2">
                            @foreach ($tools as $tool)
                                <span class="chip !px-3.5 !py-1.5 !text-sm">{{ $tool }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.testimonials')
@endsection
