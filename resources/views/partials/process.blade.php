<section class="py-20 sm:py-28">
    <div class="container">
        <x-section-heading eyebrow="How it works" title="A simple, transparent process" center>
            You always know what's happening, what it costs and when it'll be done.
        </x-section-heading>

        <ol class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach (config('portfolio.process') as $step)
                <li class="card relative p-7" data-reveal style="transition-delay: {{ $loop->index * 80 }}ms">
                    <span class="font-display text-5xl font-bold text-brand-500/40">0{{ $loop->iteration }}</span>
                    <h3 class="mt-5 text-xl font-semibold">{{ $step['title'] }}</h3>
                    <p class="mt-3 leading-relaxed text-muted">{{ $step['text'] }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
