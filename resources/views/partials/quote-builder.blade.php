{{-- Three quick answers become a pre-filled WhatsApp message. Pass $preselect (a service title) to start with that service chosen. --}}
@php
    $preselect ??= null;
    $needs = [...collect(config('portfolio.services'))->pluck('title'), 'Something else'];
    $questions = [
        ['name' => 'quote_need', 'label' => 'What do you need?', 'options' => $needs],
        ['name' => 'quote_timeline', 'label' => 'When do you need it?', 'options' => config('portfolio.timelines')],
        ['name' => 'quote_budget', 'label' => 'Rough budget', 'options' => config('portfolio.budgets')],
    ];
@endphp

<section id="quote" class="scroll-mt-20 py-20 sm:py-28">
    <div class="container">
        <div class="relative overflow-hidden rounded-[32px] border border-white/[0.1] bg-ink-900 p-6 sm:p-10 lg:p-14" data-reveal>
            <div class="streak top-0"></div>
            <div class="pointer-events-none absolute -top-40 left-1/2 h-72 w-[720px] -translate-x-1/2 rounded-full bg-brand-500/15 blur-[110px]"></div>

            <div class="relative grid gap-10 lg:grid-cols-12 lg:gap-14">
                <div class="lg:col-span-5">
                    <p class="eyebrow">Free quote</p>
                    <h2 class="mt-3 text-3xl font-bold leading-tight sm:text-4xl lg:text-[44px]">Tell me what you need in 30 seconds.</h2>
                    <p class="mt-4 text-lg leading-relaxed text-muted">
                        Pick your answers and send them on WhatsApp. You'll hear back {{ config('portfolio.response_time') }} with a clear quote. No obligation.
                    </p>
                    <ul class="mt-7 space-y-3">
                        <li class="flex gap-3 text-[#D5DAE2]"><x-icon name="check" class="mt-0.5 h-5 w-5 text-whatsapp" /> Written scope, timeline and price</li>
                        <li class="flex gap-3 text-[#D5DAE2]"><x-icon name="check" class="mt-0.5 h-5 w-5 text-whatsapp" /> No surprises later</li>
                        <li class="flex gap-3 text-[#D5DAE2]"><x-icon name="check" class="mt-0.5 h-5 w-5 text-whatsapp" /> Prefer email? <a href="{{ route('contact') }}#brief" class="font-semibold text-white underline decoration-white/30 underline-offset-4 hover:decoration-white" data-track="brief_click" data-track-location="quote_builder">Send a project brief</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-7" data-quote-builder>
                    <div class="space-y-6">
                        @foreach ($questions as $question)
                            <fieldset>
                                <legend class="mb-3 text-sm font-medium text-white">{{ $question['label'] }}</legend>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($question['options'] as $option)
                                        <label class="cursor-pointer">
                                            <input type="radio" name="{{ $question['name'] }}" value="{{ $option }}" class="peer sr-only" @checked($preselect === $option)>
                                            <span class="option">{{ $option }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </fieldset>
                        @endforeach
                    </div>

                    <div class="mt-7 rounded-2xl border border-white/10 bg-ink-950/60 p-4 js-only">
                        <p class="font-mono text-[11px] uppercase tracking-[0.16em] text-muted">Your message</p>
                        <p class="mt-2 whitespace-pre-line text-[15px] leading-relaxed text-[#D5DAE2]" data-quote-preview aria-live="polite"></p>
                    </div>

                    <x-whatsapp location="quote_builder" class="btn-whatsapp mt-5 w-full" data-quote-link>
                        <x-icon name="whatsapp" /> Send on WhatsApp
                    </x-whatsapp>
                </div>
            </div>
        </div>
    </div>
</section>
