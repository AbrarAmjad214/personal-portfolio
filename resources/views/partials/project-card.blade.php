{{-- Expects $project from config('portfolio.projects') --}}
<article class="card group flex flex-col overflow-hidden" data-category="{{ \Illuminate\Support\Str::slug($project['category']) }}" data-reveal>
    <a href="{{ route('portfolio.show', $project['slug']) }}" class="tilt relative block aspect-[16/10] overflow-hidden bg-ink-800" data-tilt aria-label="{{ $project['title'] }} case study">
        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }} website homepage, built by {{ config('portfolio.name') }}" width="1200" height="750" loading="lazy" decoding="async" class="h-full w-full object-cover object-top transition duration-700 group-hover:scale-[1.04]">
    </a>

    <div class="flex flex-1 flex-col p-7">
        <p class="text-sm font-medium text-brand-300">{{ $project['industry'] }}</p>
        <h3 class="mt-2 text-2xl font-semibold"><a href="{{ route('portfolio.show', $project['slug']) }}" class="transition hover:text-brand-300">{{ $project['title'] }}</a></h3>
        <p class="mt-3 leading-relaxed text-muted">{{ $project['summary'] }}</p>

        @if (! empty($detailed))
            <ul class="mt-5 space-y-2">
                @foreach ($project['highlights'] as $highlight)
                    <li class="flex gap-3 text-[15px] text-[#D5DAE2]"><x-icon name="check" class="mt-0.5 h-[18px] w-[18px] text-brand-400" /> {{ $highlight }}</li>
                @endforeach
            </ul>
        @endif

        <div class="mt-5 flex flex-wrap gap-2">
            @foreach ($project['tech'] as $tech)
                <span class="chip">{{ $tech }}</span>
            @endforeach
        </div>

        <div class="mt-auto flex flex-wrap items-center gap-x-6 gap-y-3 pt-7">
            <a href="{{ route('portfolio.show', $project['slug']) }}" class="inline-flex items-center gap-1.5 font-semibold text-white transition hover:text-brand-300">
                Case study <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
            <a href="{{ $project['url'] }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 font-semibold text-muted transition hover:text-white" data-track="project_visit" data-track-location="{{ $project['title'] }}">
                Live site <x-icon name="arrow-up-right" class="h-4 w-4" />
            </a>
            @if (! empty($detailed))
                <x-whatsapp location="project_{{ \Illuminate\Support\Str::slug($project['title']) }}" :message="'Hi Abrar, I saw the ' . $project['title'] . ' project on your portfolio and I\'d like something similar.'" class="inline-flex items-center gap-1.5 font-semibold text-whatsapp transition hover:text-whatsapp-dark">
                    <x-icon name="whatsapp" class="h-4 w-4" /> Want something similar?
                </x-whatsapp>
            @endif
        </div>
    </div>
</article>
