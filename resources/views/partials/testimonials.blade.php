{{-- Only client-approved testimonials are shown; the section is hidden when there are none. --}}
@php($testimonials = collect(config('portfolio.testimonials'))->where('approved', true))

@if ($testimonials->isNotEmpty())
    <section class="py-20 sm:py-28">
        <div class="container">
            <x-section-heading eyebrow="Client feedback" title="What clients say" center />

            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($testimonials as $testimonial)
                    <figure class="card flex flex-col p-7" data-reveal>
                        <div class="flex gap-1 text-amber-400" aria-label="5 out of 5 stars">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z"/></svg>
                            @endfor
                        </div>
                        <blockquote class="mt-5 flex-1 text-lg leading-relaxed text-[#D5DAE2]">“{{ $testimonial['quote'] }}”</blockquote>
                        <figcaption class="mt-6 border-t border-white/[0.08] pt-5">
                            <p class="font-semibold text-white">{{ $testimonial['name'] }}</p>
                            <p class="text-sm text-muted">{{ $testimonial['company'] }}</p>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>
@endif
