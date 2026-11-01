<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Prints the /cv page to the downloadable PDF. The site must be running (e.g. php artisan serve).
Artisan::command('cv:pdf {--url= : URL of the CV page (defaults to APP_URL/cv)}', function () {
    $chrome = collect([
        'C:\Program Files\Google\Chrome\Application\chrome.exe',
        'C:\Program Files (x86)\Microsoft\Edge\Application\msedge.exe',
        '/usr/bin/google-chrome',
        '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome',
    ])->first(fn ($path) => file_exists($path));

    if (! $chrome) {
        return $this->error('Chrome or Edge was not found.');
    }

    $url = $this->option('url') ?: url('/cv');
    $output = public_path(config('portfolio.cv'));

    $process = new Symfony\Component\Process\Process([
        $chrome, '--headless=new', '--disable-gpu', '--no-pdf-header-footer',
        '--virtual-time-budget=8000', '--print-to-pdf=' . $output, $url,
    ]);
    $process->setTimeout(120)->run();

    $process->isSuccessful() && file_exists($output)
        ? $this->info("CV saved to $output")
        : $this->error('PDF export failed: ' . $process->getErrorOutput());
})->purpose('Export the CV page to PDF');
