@extends('layouts.app')

@section('title', 'Laravel Development & WordPress Website Services')
@section('description', 'Custom Laravel web apps, WordPress websites, responsive design, API integrations and website maintenance for businesses in the UAE, Pakistan and worldwide. Free quote on WhatsApp.')

@section('content')
    <x-page-hero eyebrow="Services" title="Laravel & WordPress development services for growing businesses.">
        <x-slot:breadcrumbs>
            @include('partials.breadcrumbs', ['crumbs' => ['Home' => route('home'), 'Services' => url()->current()]])
        </x-slot:breadcrumbs>
        Whether you need a brand-new website, a custom web app or someone to fix the site you already have, I'll help you get it done properly.
        <x-slot:actions>
            <x-whatsapp location="services_hero" class="btn-whatsapp"><x-icon name="whatsapp" /> Get a free quote</x-whatsapp>
            <a href="{{ route('portfolio') }}" class="btn-ghost">See examples <x-icon name="arrow-right" class="h-4 w-4" /></a>
        </x-slot:actions>
    </x-page-hero>

    <section class="pb-20 sm:pb-28">
        <div class="container space-y-5">
            @foreach (config('portfolio.services') as $service)
                <article id="{{ $service['slug'] }}" class="card scroll-mt-28 grid gap-8 p-7 sm:p-10 lg:grid-cols-12 lg:items-center" data-reveal>
                    <div class="lg:col-span-6">
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-500/15 text-brand-300">
                            <x-icon :name="$service['icon']" class="h-6 w-6" />
                        </span>
                        <h2 class="mt-5 text-2xl font-bold sm:text-3xl"><a href="{{ route('services.show', $service['slug']) }}" class="transition hover:text-brand-300">{{ $service['title'] }}</a></h2>
                        <p class="mt-4 text-lg leading-relaxed text-muted">{{ $service['summary'] }}</p>
                        <div class="mt-6 flex flex-wrap items-center gap-x-6 gap-y-3">
                            <a href="{{ route('services.show', $service['slug']) }}" class="inline-flex items-center gap-1.5 font-semibold text-white transition hover:text-brand-300">
                                Learn more <x-icon name="arrow-right" class="h-4 w-4" />
                            </a>
                            <x-whatsapp location="service_{{ $service['slug'] }}" :message="'Hi Abrar, I\'m interested in ' . $service['title'] . '. Can we discuss my project?'" class="inline-flex items-center gap-2 font-semibold text-whatsapp transition hover:text-whatsapp-dark">
                                <x-icon name="whatsapp" class="h-[18px] w-[18px]" /> Get a quote
                            </x-whatsapp>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-ink-800/70 p-6 lg:col-span-5 lg:col-start-8">
                        <p class="text-sm font-semibold uppercase tracking-[0.14em] text-white">What's included</p>
                        <ul class="mt-4 space-y-3">
                            @foreach ($service['includes'] as $item)
                                <li class="flex gap-3 text-[#D5DAE2]"><x-icon name="check" class="mt-0.5 h-5 w-5 text-brand-400" /> {{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    @include('partials.process')

    @include('partials.quote-builder')

    @include('partials.faq')
@endsection
