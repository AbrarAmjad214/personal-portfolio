@extends('layouts.app')

@section('title', 'Hire a Laravel & WordPress Developer — Free Quote')
@section('description', 'Get a free quote for your website or web app. Chat with Abrar Amjad on WhatsApp or send a project brief — replies within 24 hours.')
@section('hide_cta', '1')

@php
    $budgets = config('portfolio.budgets');
    $services = [...collect(config('portfolio.services'))->pluck('title'), 'Something else'];
    $firstError = collect(['name', 'email', 'phone', 'service', 'budget', 'message'])->first(fn ($field) => $errors->has($field));
@endphp

@section('content')
    <x-page-hero eyebrow="Contact" title="Hire a Laravel & WordPress developer for your next project.">
        <x-slot:breadcrumbs>
            @include('partials.breadcrumbs', ['crumbs' => ['Home' => route('home'), 'Contact' => url()->current()]])
        </x-slot:breadcrumbs>
        Tell me about your project and I'll reply {{ config('portfolio.response_time') }} with ideas and a clear quote. No obligation.
    </x-page-hero>

    <section class="pb-20 sm:pb-28">
        <div class="container grid gap-8 lg:grid-cols-12">
            {{-- Fastest option: WhatsApp --}}
            <aside class="space-y-5 lg:col-span-5">
                <div class="card border-whatsapp/30 bg-gradient-to-br from-whatsapp/[0.12] to-ink-900 p-8" data-reveal>
                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-whatsapp text-ink-950"><x-icon name="whatsapp" class="h-6 w-6" /></span>
                    <h2 class="mt-5 text-2xl font-bold">Fastest: chat on WhatsApp</h2>
                    <p class="mt-3 leading-relaxed text-muted">Send a quick message about what you need — that's usually the quickest way to get a quote.</p>
                    <x-whatsapp location="contact_card" class="btn-whatsapp mt-6 w-full">
                        <x-icon name="whatsapp" /> Start a chat
                    </x-whatsapp>
                    <p class="mt-3 text-center text-sm text-muted">{{ config('portfolio.contact.phone') }}</p>
                </div>

                <div class="card divide-y divide-white/[0.08]" data-reveal>
                    <a href="mailto:{{ config('portfolio.contact.email') }}" class="flex items-center gap-4 p-6 transition hover:bg-white/[0.02]" data-track="email_click" data-track-location="contact_page">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-brand-500/15 text-brand-300"><x-icon name="mail" /></span>
                        <span><span class="block text-sm text-muted">Email</span><span class="font-semibold text-white">{{ config('portfolio.contact.email') }}</span></span>
                    </a>
                    <a href="tel:{{ config('portfolio.contact.phone_href') }}" class="flex items-center gap-4 p-6 transition hover:bg-white/[0.02]" data-track="phone_click" data-track-location="contact_page">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-brand-500/15 text-brand-300"><x-icon name="phone" /></span>
                        <span><span class="block text-sm text-muted">Phone</span><span class="font-semibold text-white">{{ config('portfolio.contact.phone') }}</span></span>
                    </a>
                    <div class="flex items-center gap-4 p-6">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-brand-500/15 text-brand-300"><x-icon name="clock" /></span>
                        <span><span class="block text-sm text-muted">Based in Lahore (PKT, UTC+5)</span><span class="font-semibold text-white">Flexible with your time zone</span></span>
                    </div>
                </div>
            </aside>

            {{-- Project brief form --}}
            <div id="brief" class="card scroll-mt-28 p-7 sm:p-10 lg:col-span-7" data-reveal>
                @if (session('contact_sent'))
                    <div class="flex h-full flex-col items-center justify-center py-10 text-center" role="status">
                        <span class="inline-flex h-16 w-16 items-center justify-center rounded-full bg-whatsapp/15 text-whatsapp"><x-icon name="check" class="h-8 w-8" /></span>
                        <h2 class="mt-6 text-3xl font-bold">Thanks — message received!</h2>
                        <p class="mt-3 max-w-md text-lg text-muted">I'll get back to you {{ config('portfolio.response_time') }}. Need a faster answer? Message me on WhatsApp.</p>
                        <x-whatsapp location="contact_success" class="btn-whatsapp mt-8"><x-icon name="whatsapp" /> Chat on WhatsApp</x-whatsapp>
                    </div>
                @else
                    <h2 class="text-2xl font-bold sm:text-3xl">Send a project brief</h2>
                    <p class="mt-2 text-muted">Takes about a minute. Fields marked * are required.</p>

                    @if (session('contact_failed'))
                        <div class="mt-6 rounded-xl border border-red-400/30 bg-red-500/10 p-4 text-red-200" role="alert">
                            Sorry, your message couldn't be sent. Please
                            <x-whatsapp location="contact_error" class="font-semibold underline">message me on WhatsApp</x-whatsapp>
                            or email <a href="mailto:{{ config('portfolio.contact.email') }}" class="font-semibold underline">{{ config('portfolio.contact.email') }}</a>.
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="mt-8 grid gap-5 sm:grid-cols-2" data-submit-once novalidate>
                        @csrf

                        {{-- Honeypot: hidden from people, filled in by spam bots --}}
                        <div class="hidden" aria-hidden="true">
                            <label for="website">Website</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div>
                            <label for="name" class="mb-2 block text-sm font-medium text-white">Your name *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="field" autocomplete="name" required @if ($firstError === 'name') autofocus @endif>
                            @error('name') <p class="mt-1.5 text-sm text-red-300">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-white">Email *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="field" autocomplete="email" required @if ($firstError === 'email') autofocus @endif>
                            @error('email') <p class="mt-1.5 text-sm text-red-300">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="phone" class="mb-2 block text-sm font-medium text-white">WhatsApp / phone <span class="font-normal text-muted">(optional)</span></label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="field" autocomplete="tel" @if ($firstError === 'phone') autofocus @endif>
                            @error('phone') <p class="mt-1.5 text-sm text-red-300">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="service" class="mb-2 block text-sm font-medium text-white">What do you need? *</label>
                            <select id="service" name="service" class="field" required @if ($firstError === 'service') autofocus @endif>
                                <option value="" disabled @selected(! old('service'))>Choose a service</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service }}" @selected(old('service') === $service)>{{ $service }}</option>
                                @endforeach
                            </select>
                            @error('service') <p class="mt-1.5 text-sm text-red-300">{{ $message }}</p> @enderror
                        </div>

                        <fieldset class="sm:col-span-2">
                            <legend class="mb-3 block text-sm font-medium text-white">Budget <span class="font-normal text-muted">(optional — helps me suggest the right solution)</span></legend>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($budgets as $budget)
                                    <label class="cursor-pointer">
                                        <input type="radio" name="budget" value="{{ $budget }}" class="peer sr-only" @checked(old('budget') === $budget)>
                                        <span class="option">{{ $budget }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </fieldset>

                        <div class="sm:col-span-2">
                            <label for="message" class="mb-2 block text-sm font-medium text-white">Tell me about your project *</label>
                            <textarea id="message" name="message" rows="5" class="field resize-y" placeholder="What does your business do, what should the website achieve, and when do you need it?" required @if ($firstError === 'message') autofocus @endif>{{ old('message') }}</textarea>
                            @error('message') <p class="mt-1.5 text-sm text-red-300">{{ $message }}</p> @enderror
                        </div>

                        <div class="flex flex-col items-start gap-4 sm:col-span-2 sm:flex-row sm:items-center">
                            <button type="submit" class="btn-primary w-full sm:w-auto" data-track="form_submit" data-track-location="contact_page">
                                <span data-label>Send my brief</span> <x-icon name="arrow-right" class="h-4 w-4" />
                            </button>
                            <p class="inline-flex items-center gap-2 text-sm text-muted"><x-icon name="shield" class="h-4 w-4" /> Your details are never shared.</p>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </section>

    @include('partials.faq')
@endsection
