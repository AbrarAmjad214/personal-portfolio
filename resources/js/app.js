document.documentElement.classList.add('js');

// Mobile navigation
const menuButton = document.querySelector('[data-menu-toggle]');
const menu = document.getElementById('mobile-menu');

if (menuButton && menu) {
    const setOpen = (open) => {
        menuButton.setAttribute('aria-expanded', String(open));
        menu.classList.toggle('hidden', !open);
        document.body.classList.toggle('overflow-hidden', open);
    };

    menuButton.addEventListener('click', () => {
        setOpen(menuButton.getAttribute('aria-expanded') !== 'true');
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') setOpen(false);
    });
}

// Header gets a solid background once the page scrolls
const header = document.querySelector('[data-header]');
const floatingCtas = document.querySelectorAll('[data-floating-cta]');

const onScroll = () => {
    const scrolled = window.scrollY > 24;
    header?.classList.toggle('is-scrolled', scrolled);
    floatingCtas.forEach((cta) => cta.classList.toggle('is-visible', window.scrollY > 500));
};

onScroll();
window.addEventListener('scroll', onScroll, { passive: true });

// Scroll-reveal animations
const revealItems = document.querySelectorAll('[data-reveal]');

if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, { rootMargin: '0px 0px -8% 0px' });

    revealItems.forEach((item) => observer.observe(item));
} else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
}

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// Hero 3D scene: loaded after the page is up so it never delays the copy or the calls to action
const sceneHost = document.querySelector('[data-hero-scene]');

if (sceneHost && !prefersReducedMotion && !navigator.connection?.saveData) {
    const startScene = () => {
        import('./hero-scene.js')
            .then(({ startHeroScene }) => startHeroScene(sceneHost))
            .catch(() => sceneHost.classList.remove('is-ready'));
    };
    const whenIdle = () => {
        if (window.requestIdleCallback) requestIdleCallback(startScene, { timeout: 1500 });
        else setTimeout(startScene, 300);
    };

    if (document.readyState === 'complete') whenIdle();
    else window.addEventListener('load', whenIdle, { once: true });
}

if (!prefersReducedMotion) {
    // Browser frames settle flat as they scroll into view
    const frames = [...document.querySelectorAll('[data-depth]')];

    if (frames.length) {
        let queued = false;

        const updateFrames = () => {
            queued = false;
            const height = window.innerHeight;
            frames.forEach((frame) => {
                const { top, bottom } = frame.parentElement.getBoundingClientRect();
                if (bottom < 0 || top > height) return;
                const progress = Math.min(1, Math.max(0, (height - top) / (height * 0.75)));
                frame.style.setProperty('--p', progress.toFixed(3));
            });
        };
        const queueUpdate = () => {
            if (queued) return;
            queued = true;
            requestAnimationFrame(updateFrames);
        };

        updateFrames();
        window.addEventListener('scroll', queueUpdate, { passive: true });
        window.addEventListener('resize', queueUpdate, { passive: true });
    }

    // Pointer tilt
    if (window.matchMedia('(pointer: fine)').matches) {
        document.querySelectorAll('[data-tilt]').forEach((item) => {
            item.addEventListener('pointermove', (event) => {
                const { left, top, width, height } = item.getBoundingClientRect();
                item.style.setProperty('--ry', `${(((event.clientX - left) / width) - 0.5) * 9}deg`);
                item.style.setProperty('--rx', `${(0.5 - ((event.clientY - top) / height)) * 9}deg`);
            });
            item.addEventListener('pointerleave', () => {
                item.style.removeProperty('--rx');
                item.style.removeProperty('--ry');
            });
        });
    }
}

// Quote builder: turns the visitor's answers into a pre-filled WhatsApp message
document.querySelectorAll('[data-quote-builder]').forEach((builder) => {
    const link = builder.querySelector('[data-quote-link]');
    const preview = builder.querySelector('[data-quote-preview]');
    const base = link.href.split('?')[0];

    const update = () => {
        const answer = (name) => builder.querySelector(`input[name="${name}"]:checked`)?.value;
        const need = answer('quote_need');
        const timeline = answer('quote_timeline');
        const budget = answer('quote_budget');

        const lines = [`Hi Abrar, I'd like a quote for: ${need || 'a new website'}.`];
        if (timeline) lines.push(`Timeline: ${timeline}.`);
        if (budget) lines.push(`Budget: ${budget}.`);
        lines.push('My business is: ');

        const message = lines.join('\n');
        link.href = `${base}?text=${encodeURIComponent(message)}`;
        preview.textContent = message;
    };

    builder.addEventListener('change', update);
    update();
});

// Portfolio filter
const filterButtons = document.querySelectorAll('[data-filter]');

filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const filter = button.dataset.filter;

        filterButtons.forEach((other) => other.setAttribute('aria-pressed', String(other === button)));

        document.querySelectorAll('[data-category]').forEach((item) => {
            item.classList.toggle('hidden', filter !== 'all' && item.dataset.category !== filter);
        });
    });
});

// Conversion tracking: any element with data-track sends a GA4 event (when GA is configured)
document.addEventListener('click', (event) => {
    const target = event.target.closest('[data-track]');
    if (!target || typeof window.gtag !== 'function') return;

    window.gtag('event', target.dataset.track, {
        location: target.dataset.trackLocation || 'unknown',
        page_path: window.location.pathname,
    });
});

// Prevent double submits on the contact form
document.querySelectorAll('form[data-submit-once]').forEach((form) => {
    form.addEventListener('submit', () => {
        const button = form.querySelector('[type="submit"]');
        if (!button) return;
        button.disabled = true;
        button.classList.add('opacity-70');
        button.querySelector('[data-label]').textContent = 'Sending…';
    });
});
