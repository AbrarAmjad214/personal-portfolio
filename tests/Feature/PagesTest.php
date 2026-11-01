<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_every_page_in_the_sitemap_loads_with_one_h1(): void
    {
        $paths = ['/', '/about-us', '/services', '/portfolio', '/contact'];

        foreach (config('portfolio.services') as $service) {
            $paths[] = '/services/' . $service['slug'];
        }

        foreach (config('portfolio.projects') as $project) {
            $paths[] = '/portfolio/' . $project['slug'];
        }

        foreach ($paths as $path) {
            $html = $this->get($path)->assertOk()->getContent();

            $this->assertSame(1, substr_count($html, '<h1'), "$path should have exactly one h1");
            $this->assertStringContainsString('rel="canonical"', $html, $path);
        }
    }

    public function test_removed_projects_redirect_to_the_portfolio(): void
    {
        foreach (['mypos', 'mait', 'multitech-pos', 'glowth', 'storagekeys'] as $slug) {
            $this->get("/portfolio/$slug")->assertStatus(301)->assertRedirect('/portfolio');
        }
    }

    public function test_unknown_pages_show_the_branded_404(): void
    {
        $this->get('/no-such-page')->assertNotFound()->assertSee('final cut')->assertSee('noindex', false);
    }

    public function test_sitemap_lists_projects_and_never_the_removed_ones(): void
    {
        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertSee('/portfolio/gulf-cut')
            ->assertSee('<lastmod>', false)
            ->assertDontSee('storagekeys');
    }
}
