@extends('layouts.app')

@section('title', $project['title'] . ' — ' . $project['category'] . ' Website Case Study')
@section('description', $project['summary'])

@php
    $more = collect(config('portfolio.projects'))->where('slug', '!=', $project['slug'])
        ->sortByDesc(fn ($p) => $p['category'] === $project['category'])
        ->take(3);
@endphp

@section('content')
    <x-page-hero :eyebrow="$project['industry']" :title="$project['title']">
        <x-slot:breadcrumbs>
            @include('partials.breadcrumbs', ['crumbs' => ['Home' => route('home'), 'Portfolio' => route('portfolio'), $project['title'] => url()->current()]])
        </x-slot:breadcrumbs>
        {{ $project['summary'] }}
        <x-slot:actions>
            <a href="{{ $project['url'] }}" target="_blank" rel="noopener" class="btn-primary" data-track="project_visit" data-track-location="case_study_{{ $project['slug'] }}">
                Visit live site <x-icon name="arrow-up-right" class="h-4 w-4" />
            </a>
            <x-whatsapp location="case_study_{{ $project['slug'] }}" :message="'Hi Abrar, I saw the ' . $project['title'] . ' project on your portfolio and I\'d like something similar.'" class="btn-whatsapp">
                <x-icon name="whatsapp" /> Want something similar?
            </x-whatsapp>
        </x-slot:actions>
    </x-page-hero>

    <section class="pb-20">
        <div class="container">
            <a href="{{ $project['url'] }}" target="_blank" rel="noopener" class="block overflow-hidden rounded-[28px] border border-white/10 bg-ink-800 shadow-2xl shadow-black/40" data-reveal>
                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }} website homepage designed and developed by {{ config('portfolio.name') }}" width="1200" height="750" fetchpriority="high" class="w-full">
            </a>
        </div>
    </section>

    <section class="pb-20 sm:pb-28">
        <div class="container grid gap-10 lg:grid-cols-12">
            <div class="lg:col-span-7" data-reveal>
                <h2 class="text-3xl font-bold">About the project</h2>
                <div class="mt-5 space-y-5 text-lg leading-relaxed text-muted">
                    @foreach ($project['about'] as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
                <h2 class="mt-12 text-3xl font-bold">What I built</h2>
                <ul class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach ($project['features'] as $feature)
                        <li class="flex gap-3 text-[#D6D2E0]"><x-icon name="check" class="mt-0.5 h-5 w-5 text-brand-400" /> {{ $feature }}</li>
                    @endforeach
                </ul>
            </div>

            <aside class="lg:col-span-4 lg:col-start-9" data-reveal>
                <dl class="card divide-y divide-white/[0.08]">
                    <div class="p-6"><dt class="text-sm text-muted">Industry</dt><dd class="mt-1 font-semibold text-white">{{ $project['industry'] }}</dd></div>
                    <div class="p-6"><dt class="text-sm text-muted">Platform</dt><dd class="mt-1 font-semibold text-white">{{ $project['category'] }}</dd></div>
                    <div class="p-6">
                        <dt class="text-sm text-muted">Technologies</dt>
                        <dd class="mt-3 flex flex-wrap gap-2">@foreach ($project['tech'] as $tech)<span class="chip">{{ $tech }}</span>@endforeach</dd>
                    </div>
                    <div class="p-6"><dt class="text-sm text-muted">Live website</dt><dd class="mt-1"><a href="{{ $project['url'] }}" target="_blank" rel="noopener" class="font-semibold text-brand-300 hover:text-brand-200">{{ preg_replace('#^https?://(www\.)?|/$#', '', $project['url']) }}</a></dd></div>
                </dl>
            </aside>
        </div>
    </section>

    <section class="py-20 sm:py-28">
        <div class="container">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <x-section-heading eyebrow="More work" title="Other projects" />
                <a href="{{ route('portfolio') }}" class="btn-ghost shrink-0 self-start md:self-auto">View all projects <x-icon name="arrow-right" class="h-4 w-4" /></a>
            </div>
            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($more as $other)
                    @include('partials.project-card', ['project' => $other])
                @endforeach
            </div>
        </div>
    </section>

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'CreativeWork',
            'name' => $project['title'] . ' website',
            'description' => $project['summary'],
            'url' => url()->current(),
            'image' => asset($project['image']),
            'creator' => ['@type' => 'Person', 'name' => config('portfolio.name'), 'url' => url('/')],
            'keywords' => implode(', ', $project['tech']),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endsection
