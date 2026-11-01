@extends('layouts.app')

@section('title', 'Portfolio — Laravel & WordPress Websites')
@section('description', 'Live websites built by Abrar Amjad for businesses in the UAE, the USA, Canada and beyond — Laravel and custom PHP projects.')

@php
    $projects = collect(config('portfolio.projects'));
    $categories = $projects->pluck('category')->unique();
@endphp

@section('content')
    <x-page-hero eyebrow="Portfolio" title="Laravel & WordPress websites for real businesses.">
        Every project below is live — click through to see how they look and work on your own device.
    </x-page-hero>

    <section class="pb-20 sm:pb-28">
        <div class="container">
            <div class="flex flex-wrap gap-2" role="group" aria-label="Filter projects" data-reveal>
                <button type="button" data-filter="all" aria-pressed="true" class="rounded-full border border-white/10 px-5 py-2 text-sm font-semibold text-muted transition hover:text-white aria-pressed:border-brand-500 aria-pressed:bg-brand-500 aria-pressed:text-white">
                    All <span class="opacity-60">({{ $projects->count() }})</span>
                </button>
                @foreach ($categories as $category)
                    <button type="button" data-filter="{{ \Illuminate\Support\Str::slug($category) }}" aria-pressed="false" class="rounded-full border border-white/10 px-5 py-2 text-sm font-semibold text-muted transition hover:text-white aria-pressed:border-brand-500 aria-pressed:bg-brand-500 aria-pressed:text-white">
                        {{ $category }} <span class="opacity-60">({{ $projects->where('category', $category)->count() }})</span>
                    </button>
                @endforeach
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2">
                @foreach ($projects as $project)
                    @include('partials.project-card', ['project' => $project, 'detailed' => true])
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.process')

    @include('partials.testimonials')
@endsection
