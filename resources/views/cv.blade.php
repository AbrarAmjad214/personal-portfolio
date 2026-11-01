{{-- Printable CV, built from config/portfolio.php. Regenerate the PDF with: php artisan cv:pdf --}}
@php
    $p = config('portfolio');
    $years = now()->year - $p['career_start'];
    $projects = collect($p['projects'])->concat($p['cv_projects'])->groupBy('category');
    $host = fn ($url) => rtrim(preg_replace('#^https?://(www\.)?#', '', $url), '/');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $p['name'] }} — CV</title>
    <meta name="robots" content="noindex">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@600;700&display=swap">
    <style>
        @page { size: A4; margin: 0; }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Inter, Arial, sans-serif; color: #2a2733; font-size: 10pt; line-height: 1.45; background: #e9e7ee; }
        a { color: inherit; text-decoration: none; }
        .page { width: 210mm; min-height: 297mm; margin: 0 auto; background: #fff; display: grid; grid-template-columns: 64mm 1fr; }
        aside { background: #16131f; color: #d9d5e3; padding: 14mm 8mm 12mm; }
        main { padding: 13mm 12mm 12mm; }
        .photo { width: 30mm; height: 30mm; border-radius: 50%; object-fit: cover; border: 3px solid #8F40FF; display: block; margin-bottom: 7mm; }
        h1 { font-family: 'Space Grotesk', Arial, sans-serif; font-size: 24pt; line-height: 1.05; color: #16131f; letter-spacing: -0.02em; }
        .role { margin-top: 2mm; font-size: 11.5pt; font-weight: 600; color: #7A2EEB; }
        h2 { font-family: 'Space Grotesk', Arial, sans-serif; font-size: 10pt; text-transform: uppercase; letter-spacing: .12em; color: #7A2EEB; margin: 7mm 0 3mm; display: flex; align-items: center; gap: 3mm; }
        h2::after { content: ''; flex: 1; height: 1px; background: #e4e0ec; }
        aside h2 { color: #B080FF; margin-top: 8mm; }
        aside h2::after { background: rgba(255,255,255,.12); }
        aside h2:first-of-type { margin-top: 0; }
        .contact li { list-style: none; margin-bottom: 2.2mm; font-size: 8.8pt; word-break: break-word; }
        .contact span { display: block; font-size: 7.2pt; text-transform: uppercase; letter-spacing: .1em; color: #8f89a0; }
        .skills h3 { font-size: 8.5pt; color: #fff; margin: 3mm 0 1.5mm; font-weight: 600; }
        .tags { display: flex; flex-wrap: wrap; gap: 1.4mm; }
        .tags span { font-size: 8pt; padding: .6mm 2.2mm; border-radius: 3mm; background: rgba(143,64,255,.18); color: #e6dcff; }
        .edu { margin-bottom: 3.5mm; font-size: 8.8pt; }
        .edu strong { color: #fff; display: block; font-size: 9pt; }
        .edu small { color: #8f89a0; font-size: 8pt; }
        .summary { margin-top: 4mm; color: #4a4655; }
        .job { margin-bottom: 4mm; }
        .job-head { display: flex; justify-content: space-between; gap: 4mm; align-items: baseline; }
        .job-head strong { font-size: 10.5pt; color: #16131f; }
        .period { font-size: 8.5pt; color: #7A2EEB; font-weight: 600; white-space: nowrap; }
        .company { color: #6b6777; font-size: 9pt; }
        .job p { margin-top: 1mm; color: #4a4655; }
        .group { margin-bottom: 3mm; }
        .group h3 { font-size: 9pt; color: #16131f; margin-bottom: 1.2mm; }
        .projects { display: grid; grid-template-columns: 1fr 1fr; gap: 1.6mm 5mm; }
        .projects div { font-size: 8.8pt; line-height: 1.3; }
        .projects strong { color: #16131f; font-weight: 600; }
        .projects small { display: block; color: #7A2EEB; font-size: 8pt; }
        .projects em { font-style: normal; color: #8a8696; font-size: 7.8pt; }
        @media print { body { background: none; } .page { margin: 0; } }
    </style>
</head>
<body>
<div class="page">
    <aside>
        <img class="photo" src="{{ asset($p['photo']) }}" alt="{{ $p['name'] }}">

        <h2>Contact</h2>
        <ul class="contact">
            <li><span>Phone / WhatsApp</span>{{ $p['contact']['phone'] }}</li>
            <li><span>Email</span><a href="mailto:{{ $p['contact']['email'] }}">{{ $p['contact']['email'] }}</a></li>
            <li><span>Location</span>{{ $p['location'] }}</li>
            <li><span>GitHub</span><a href="{{ $p['socials']['github'] }}">{{ $host($p['socials']['github']) }}</a></li>
            <li><span>LinkedIn</span><a href="{{ $p['socials']['linkedin'] }}">{{ $host($p['socials']['linkedin']) }}</a></li>
        </ul>

        <h2>Skills</h2>
        <div class="skills">
            @foreach ($p['stack'] as $group => $tools)
                <h3>{{ $group }}</h3>
                <div class="tags">@foreach ($tools as $tool)<span>{{ $tool }}</span>@endforeach</div>
            @endforeach
        </div>

        <h2>Education</h2>
        @foreach ($p['education'] as $edu)
            <div class="edu">
                <strong>{{ $edu['title'] }}</strong>
                {{ $edu['school'] }}<br>
                <small>{{ str_replace('—', '–', $edu['period']) }}</small>
            </div>
        @endforeach
    </aside>

    <main>
        <h1>{{ strtoupper($p['name']) }}</h1>
        <p class="role">Full-Stack Web Developer · Laravel · WordPress · React</p>
        <p class="summary">
            Full-stack web developer with {{ $years }}+ years of experience building Laravel web applications and WordPress websites for businesses in the UAE, Pakistan, Canada and the UK. I turn business goals into fast, mobile-friendly websites with clear calls to action — from booking platforms to lead-generation websites — and own projects end to end, from requirements to deployment and ongoing support.
        </p>

        <h2>Experience</h2>
        @foreach ($p['experience'] as $job)
            <div class="job">
                <div class="job-head"><strong>{{ $job['role'] }}</strong><span class="period">{{ str_replace('—', '–', $job['period']) }}</span></div>
                <div class="company">{{ $job['company'] }}</div>
                <p>{{ $job['text'] }}</p>
            </div>
        @endforeach

        <h2>Selected Projects</h2>
        @foreach (['Laravel', 'WordPress', 'Custom PHP'] as $category)
            @continue(! $projects->has($category))
            <div class="group">
                <h3>{{ $category }}</h3>
                <div class="projects">
                    @foreach ($projects[$category] as $project)
                        <div>
                            <strong>{{ $project['title'] }}</strong> <em>· {{ $project['industry'] }}</em>
                            <small><a href="{{ $project['url'] }}">{{ $host($project['url']) }}</a></small>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </main>
</div>
</body>
</html>
