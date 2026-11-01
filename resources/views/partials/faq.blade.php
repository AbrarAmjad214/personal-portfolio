{{-- Pass $faqs to show page-specific questions; defaults to the general FAQ. --}}
@php($faqs ??= config('portfolio.faq'))

<section class="py-20 sm:py-28">
    <div class="container grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-5">
            <x-section-heading eyebrow="FAQ" title="Questions clients usually ask">
                Can't find your answer? Message me — I'm happy to help.
            </x-section-heading>
            <x-whatsapp location="faq" message="Hi Abrar, I have a question about working with you." class="btn-ghost mt-8" data-reveal>
                <x-icon name="whatsapp" class="text-whatsapp" /> Ask on WhatsApp
            </x-whatsapp>
        </div>

        <div class="space-y-3 lg:col-span-7">
            @foreach ($faqs as $item)
                <details class="card group p-6 open:border-brand-500/40" data-reveal @if ($loop->first) open @endif>
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-lg font-semibold text-white [&::-webkit-details-marker]:hidden">
                        {{ $item['q'] }}
                        <x-icon name="plus" class="text-brand-300 transition group-open:rotate-45" />
                    </summary>
                    <p class="mt-4 leading-relaxed text-muted">{{ $item['a'] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

<script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($faqs)->map(fn ($item) => [
            '@type' => 'Question',
            'name' => $item['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['a']],
        ])->all(),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
