<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('about-us', 'about-us')->name('about');
Route::view('services', 'services')->name('services');
Route::view('portfolio', 'portfolio')->name('portfolio');
Route::view('contact', 'contact')->name('contact');

Route::get('services/{slug}', function (string $slug) {
    $service = collect(config('portfolio.services'))->firstWhere('slug', $slug) ?? abort(404);

    return view('service', ['service' => $service]);
})->name('services.show');

// Case studies that were taken down; keep old links and search results working.
foreach (['mypos', 'mait', 'multitech-pos', 'glowth', 'storagekeys'] as $removed) {
    Route::permanentRedirect("portfolio/$removed", '/portfolio');
}

Route::get('portfolio/{slug}', function (string $slug) {
    $project = collect(config('portfolio.projects'))->firstWhere('slug', $slug) ?? abort(404);

    return view('project', ['project' => $project]);
})->name('portfolio.show');

Route::view('cv', 'cv')->name('cv');

Route::post('contact', [ContactUsController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.submit');

Route::get('robots.txt', function () {
    $lines = ['User-agent: *', 'Disallow: /cv', '', 'Sitemap: ' . url('sitemap.xml')];

    return response(implode("\n", $lines) . "\n")->header('Content-Type', 'text/plain');
});

Route::get('sitemap.xml', function () {
    $urls = collect(['home', 'about', 'services', 'portfolio', 'contact'])->map(fn ($name) => route($name))
        ->concat(collect(config('portfolio.services'))->map(fn ($s) => route('services.show', $s['slug'])))
        ->concat(collect(config('portfolio.projects'))->map(fn ($p) => route('portfolio.show', $p['slug'])));

    return response()
        ->view('sitemap', ['urls' => $urls, 'updated' => date('Y-m-d', filemtime(config_path('portfolio.php')))])
        ->header('Content-Type', 'application/xml');
});
