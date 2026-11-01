{{-- Closing call to action shown at the bottom of every page --}}
<section class="py-20 sm:py-28">
    <div class="container">
        <div class="relative overflow-hidden rounded-[32px] border border-brand-500/30 bg-gradient-to-br from-brand-600/30 via-ink-900 to-ink-900 px-6 py-14 text-center sm:px-12 sm:py-20" data-reveal>
            <div class="pointer-events-none absolute -top-32 left-1/2 h-64 w-[600px] -translate-x-1/2 rounded-full bg-brand-500/30 blur-[100px]"></div>
            <div class="relative mx-auto max-w-2xl">
                @if (config('portfolio.available'))
                    <p class="inline-flex items-center gap-2 rounded-full border border-whatsapp/30 bg-whatsapp/10 px-4 py-1.5 text-sm font-medium text-whatsapp">
                        <span class="h-2 w-2 animate-pulse rounded-full bg-whatsapp"></span> Taking on new projects
                    </p>
                @endif
                <h2 class="mt-6 text-3xl font-bold leading-tight sm:text-5xl">Have a project in mind? Let's talk.</h2>
                <p class="mt-5 text-lg text-muted">
                    Tell me what you need and I'll get back to you {{ config('portfolio.response_time') }} with ideas and a clear quote. No pressure, no obligation.
                </p>
                <div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row">
                    <x-whatsapp location="cta_band" class="btn-whatsapp">
                        <x-icon name="whatsapp" /> Chat on WhatsApp
                    </x-whatsapp>
                    <a href="{{ route('contact') }}#brief" class="btn-ghost" data-track="brief_click" data-track-location="cta_band">
                        Send a project brief <x-icon name="arrow-right" class="h-4 w-4" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
