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
const floatingCta = document.querySelector('[data-floating-cta]');

const onScroll = () => {
    const scrolled = window.scrollY > 24;
    header?.classList.toggle('is-scrolled', scrolled);
    floatingCta?.classList.toggle('is-visible', window.scrollY > 500);
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
