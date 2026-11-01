<?php

/*
|--------------------------------------------------------------------------
| Portfolio content
|--------------------------------------------------------------------------
|
| Everything shown on the site lives here so copy can be edited without
| touching the Blade templates.
|
*/

return [

    'name' => 'Abrar Amjad',
    'brand' => 'Rabrar',
    'role' => 'Full-Stack Web Developer',
    'location' => 'Gulberg III, Lahore, Pakistan',

    // Year you started working professionally; "years of experience" is derived from it.
    'career_start' => 2023,

    // Toggles the "Available for new projects" badge in the hero.
    'available' => true,

    'response_time' => 'within 24 hours',

    'contact' => [
        'email' => 'ranabobi30@gmail.com',
        'phone' => '+92 324 9104139',
        'phone_href' => '+923249104139',
        'whatsapp' => '923249104139',
        'whatsapp_message' => "Hi Abrar, I found your portfolio and I'd like to discuss a project.",
        // Contact-form submissions are emailed here.
        'recipient' => env('CONTACT_RECIPIENT', 'ranabobi30@gmail.com'),
    ],

    'socials' => [
        'github' => 'https://github.com/AbrarAmjad214',
        'linkedin' => 'https://www.linkedin.com/in/abrar-amjad-87450a288/',
    ],

    'cv' => 'assets/img/abrar-cv.pdf',
    'photo' => 'assets/img/hero/profile.webp',

    // Optional Google Analytics 4 ID (G-XXXXXXX). Click tracking on CTAs is sent when set.
    'analytics_id' => env('GA_MEASUREMENT_ID'),

    // Shown after the auto-calculated "years of experience" stat.
    'stats' => [
        ['value' => '15+', 'label' => 'Projects delivered'],
        ['value' => '10+', 'label' => 'Happy clients'],
    ],

    'promises' => [
        'Reply within 24 hours',
        'Clear quote before we start',
        'Mobile-first & fast',
    ],

    // Homepage "The problem" section: what's costing the visitor customers, and how it gets fixed.
    'problems' => [
        ['problem' => 'Slow pages make visitors leave before they read a word.', 'title' => 'Pages that load fast', 'fix' => 'Image optimisation, caching and clean code, so your site feels quick and your Core Web Vitals improve.'],
        ['problem' => 'Most visitors are on a phone, and the site is hard to use on one.', 'title' => 'Designed for phones first', 'fix' => 'Layouts built and tested on real devices, with buttons and forms that are easy to use with a thumb.'],
        ['problem' => 'People can\'t tell what to do next, so they do nothing.', 'title' => 'One clear next step', 'fix' => 'Quote forms, call and WhatsApp buttons placed exactly where someone is ready to act.'],
        ['problem' => 'Customers search for what you sell and find your competitors.', 'title' => 'Set up for search from day one', 'fix' => 'Clean structure, service and location pages, and the technical SEO search engines look for.'],
    ],

    // Homepage comparison table.
    'comparison' => [
        ['label' => 'Who you talk to', 'me' => 'The developer building your site', 'agency' => 'Usually an account manager', 'diy' => 'Nobody, it\'s on you'],
        ['label' => 'Built around your business', 'me' => 'Yes, designed for your goals', 'agency' => 'Varies by agency', 'diy' => 'Limited by the template'],
        ['label' => 'Speed & SEO setup', 'me' => 'Included from day one', 'agency' => 'Often an extra', 'diy' => 'Up to you'],
        ['label' => 'Price', 'me' => 'Clear written quote before we start', 'agency' => 'Usually higher, with overheads', 'diy' => 'Low, plus your own time'],
        ['label' => 'Changes after launch', 'me' => 'Message me on WhatsApp', 'agency' => 'Tickets and queues', 'diy' => 'Do it yourself'],
    ],

    // Answer choices in the quote builder and contact form.
    'timelines' => ['As soon as possible', 'Within a month', '1–3 months', 'Just exploring'],
    'budgets' => ['Under $500', '$500 – $1,500', '$1,500 – $5,000', '$5,000+', 'Not sure yet'],

    /*
    | Each service gets its own page at /services/{slug}. 'projects' picks which
    | portfolio categories to show as examples on that page (empty = all).
    */
    'services' => [
        [
            'slug' => 'laravel-development',
            'icon' => 'code',
            'title' => 'Laravel & Full-Stack Development',
            'summary' => 'Custom web applications built with Laravel and React — from database to polished interface, ready to grow with your business.',
            'includes' => ['Custom dashboards & admin panels', 'Booking, quoting & lead systems', 'User accounts & roles', 'Secure, scalable Laravel back end'],
            'seo_title' => 'Laravel Developer in Pakistan for Custom Web Apps',
            'meta' => 'Hire a freelance Laravel developer in Lahore, Pakistan to build custom web apps, booking systems, dashboards and SaaS websites for businesses in the UAE and worldwide.',
            'h1' => 'Laravel development for custom web apps that grow with your business',
            'intro' => [
                'When an off-the-shelf website builder can\'t do what your business needs, Laravel can. I build custom web applications on Laravel — PHP\'s most popular framework — with clean, maintainable code and a fast front end your customers will enjoy using.',
                'I\'ve built Laravel websites for construction and service companies across Dubai. Whether you need a booking system, a customer portal, an admin dashboard or a dynamic marketing website, I\'ll take it from idea to launch.',
            ],
            'benefits' => [
                ['title' => 'Built around your workflow', 'text' => 'No fighting plugins or templates — features are built exactly the way your team and customers work.'],
                ['title' => 'Secure and scalable', 'text' => 'Laravel ships with strong security defaults, and the code is structured so new features are easy to add later.'],
                ['title' => 'Fast and SEO-friendly', 'text' => 'Server-rendered pages load quickly and are easy for Google to read, so your app can also bring in traffic.'],
            ],
            'faq' => [
                ['q' => 'Why choose Laravel over WordPress?', 'a' => 'Choose Laravel when you need custom features — bookings, user accounts, dashboards, quotes or integrations. For a content-focused business site, WordPress is often quicker and cheaper.'],
                ['q' => 'Can you take over an existing Laravel project?', 'a' => 'Yes. I can review your code, fix bugs, upgrade old Laravel versions and keep building new features.'],
                ['q' => 'Do you also build the front end?', 'a' => 'Yes — I build the full stack: database, back end, admin panel and a responsive front end with Blade, Tailwind or React.'],
            ],
            'projects' => ['Laravel'],
        ],
        [
            'slug' => 'wordpress-development',
            'icon' => 'layout',
            'title' => 'WordPress Website Development',
            'summary' => 'Business sites, blogs and stores you can update yourself — custom themes, Elementor builds and WooCommerce.',
            'includes' => ['Custom theme or Elementor build', 'WooCommerce stores', 'Easy content editing', 'Speed & SEO setup'],
            'seo_title' => 'WordPress Developer for Business Websites in Dubai & UAE',
            'meta' => 'Freelance WordPress developer building fast, SEO-friendly Elementor and WooCommerce websites for businesses in Dubai, the UAE and Pakistan. Free quote on WhatsApp.',
            'h1' => 'WordPress websites you can easily manage yourself',
            'intro' => [
                'WordPress powers a huge share of the web for a reason: once it\'s built properly, you can update pages, add blog posts and change prices yourself — no developer needed for every small change.',
                'I build WordPress websites with Elementor and custom themes for travel companies and service businesses in the UAE and beyond. Every site is set up for speed, mobile visitors and search engines from day one, with clear calls to action that turn visitors into enquiries.',
            ],
            'benefits' => [
                ['title' => 'Easy to edit', 'text' => 'Update text, images and pages yourself with a visual editor — I\'ll show you how before handover.'],
                ['title' => 'Ready for Google', 'text' => 'Clean headings, fast loading, SEO plugin setup and location/service pages that help you rank locally.'],
                ['title' => 'Built to convert', 'text' => 'Quote forms, WhatsApp buttons and demo requests placed where visitors are ready to act.'],
            ],
            'faq' => [
                ['q' => 'Elementor or a custom theme?', 'a' => 'Elementor is great if you want to edit layouts yourself. A custom theme is lighter and faster. I\'ll recommend the right option for your budget and goals.'],
                ['q' => 'Can you build an online store?', 'a' => 'Yes — I build WooCommerce stores with product catalogues, payments, shipping options and order emails.'],
                ['q' => 'Will my WordPress site be slow?', 'a' => 'Not if it\'s built carefully. I keep plugins to a minimum, optimise images and set up caching so pages load quickly.'],
            ],
            'projects' => ['WordPress'],
        ],
        [
            'slug' => 'responsive-web-design',
            'icon' => 'devices',
            'title' => 'Responsive Web Design',
            'summary' => 'Pixel-perfect, mobile-first layouts that look sharp on every screen and guide visitors toward contacting you.',
            'includes' => ['Mobile-first layouts', 'Figma / design-to-code', 'Conversion-focused page structure', 'Cross-browser testing'],
            'seo_title' => 'Responsive Web Design — Mobile-First Websites',
            'meta' => 'Mobile-first, responsive web design that looks great on every phone, tablet and desktop. Figma-to-code, landing pages and conversion-focused layouts.',
            'h1' => 'Responsive web design that looks great on every screen',
            'intro' => [
                'Most of your visitors are on their phones. If your site is hard to read, slow, or hides the contact button on mobile, you\'re losing customers every day.',
                'I design and build mobile-first layouts — turning your Figma designs (or your ideas) into pixel-perfect pages that work on every phone, tablet and desktop, and guide visitors straight to getting in touch.',
            ],
            'benefits' => [
                ['title' => 'Mobile-first', 'text' => 'Layouts are designed for small screens first, then enhanced for larger ones — not squeezed down as an afterthought.'],
                ['title' => 'Design to code', 'text' => 'Send me a Figma, XD or PSD file and I\'ll turn it into clean HTML, Tailwind or Bootstrap.'],
                ['title' => 'Tested everywhere', 'text' => 'Checked on real devices and the major browsers before launch.'],
            ],
            'faq' => [
                ['q' => 'Can you make my existing site mobile-friendly?', 'a' => 'Usually, yes. I\'ll review the site and either fix the existing layout or suggest a redesign if that\'s more cost-effective.'],
                ['q' => 'Do you design or only develop?', 'a' => 'Both. I can work from your designer\'s files or create a clean, modern layout for you.'],
            ],
            'projects' => [],
        ],
        [
            'slug' => 'api-integration',
            'icon' => 'plug',
            'title' => 'API Integration',
            'summary' => 'Connect your site to the tools you already use — payments, CRMs, maps, email and third-party platforms.',
            'includes' => ['Stripe / PayPal payments', 'CRM & email marketing tools', 'Google Maps & booking APIs', 'Custom REST APIs'],
            'seo_title' => 'API Integration Services for Websites & Web Apps',
            'meta' => 'Connect your website to payment gateways, CRMs, WhatsApp, Google Maps, email marketing and other third-party APIs. Custom REST APIs built with Laravel.',
            'h1' => 'API integrations that connect your website to your business tools',
            'intro' => [
                'Copying leads from your website into a spreadsheet, or taking payments by bank transfer, wastes hours every week. The right integration does it automatically.',
                'I connect websites and Laravel apps to payment gateways, CRMs, email marketing platforms, maps and booking tools — and build custom REST APIs when your mobile app or other systems need to talk to your website.',
            ],
            'benefits' => [
                ['title' => 'Less manual work', 'text' => 'Leads, orders and bookings flow straight into the tools your team already uses.'],
                ['title' => 'Online payments', 'text' => 'Accept card payments with Stripe, PayPal or local gateways, with proper receipts and webhooks.'],
                ['title' => 'Reliable and secure', 'text' => 'Error handling, logging and secure storage of API keys, so integrations keep working.'],
            ],
            'faq' => [
                ['q' => 'Which APIs have you worked with?', 'a' => 'Payment gateways, Google Maps, email services, CRMs and many REST APIs. If your tool has an API, I can usually connect it.'],
                ['q' => 'Can you build an API for my mobile app?', 'a' => 'Yes — I build secure REST APIs with Laravel, including authentication, for mobile and front-end apps.'],
            ],
            'projects' => ['Laravel'],
        ],
        [
            'slug' => 'website-maintenance',
            'icon' => 'wrench',
            'title' => 'Website Maintenance & Fixes',
            'summary' => 'Bugs, slow pages, broken forms or outdated content — I keep your site secure, fast and up to date.',
            'includes' => ['Bug fixes & updates', 'Speed optimisation', 'Security & backups', 'Content changes'],
            'seo_title' => 'Website Maintenance & Bug Fixing for Laravel & WordPress',
            'meta' => 'Reliable website maintenance for Laravel, PHP and WordPress sites: bug fixes, speed optimisation, security updates, backups and content changes.',
            'h1' => 'Website maintenance and fixes — so you can focus on your business',
            'intro' => [
                'A broken contact form, a hacked plugin or a slow homepage can quietly cost you customers. Most business owners don\'t notice until it\'s too late.',
                'I look after Laravel, PHP and WordPress websites: fixing bugs, speeding up slow pages, keeping software updated and making content changes when you need them. One-off fixes or ongoing monthly support — whatever suits you.',
            ],
            'benefits' => [
                ['title' => 'Fast fixes', 'text' => 'Message me on WhatsApp with the problem and I\'ll get on it quickly.'],
                ['title' => 'Faster pages', 'text' => 'Image optimisation, caching and code clean-up to improve load times and Core Web Vitals.'],
                ['title' => 'Peace of mind', 'text' => 'Updates, backups and security checks so your site stays online and safe.'],
            ],
            'faq' => [
                ['q' => 'Can you fix a site someone else built?', 'a' => 'Yes. Most maintenance work is on sites built by other developers. I\'ll review it first and tell you honestly what needs fixing.'],
                ['q' => 'Do you offer monthly maintenance?', 'a' => 'Yes — ask on WhatsApp for a monthly plan that fits the size of your site.'],
            ],
            'projects' => [],
        ],
    ],

    'process' => [
        ['title' => 'Discovery call', 'text' => 'We talk through your goals, audience and budget on WhatsApp or a quick call.'],
        ['title' => 'Clear proposal', 'text' => 'You get a written scope, timeline and price — no surprises later.'],
        ['title' => 'Design & build', 'text' => 'I build in stages and share progress links so you can give feedback early.'],
        ['title' => 'Launch & support', 'text' => 'I launch, test everything on real devices and stay available for fixes.'],
    ],

    /*
    | The live sites shown on the website; each gets a case study at /portfolio/{slug}.
    | More projects are listed only in the CV ('cv_projects' below).
    */
    'projects' => [
        [
            'slug' => 'gulf-cut',
            'title' => 'Gulf Cut',
            'category' => 'Laravel',
            'industry' => 'Construction · UAE',
            'url' => 'https://gulfcut.ae/',
            'image' => 'assets/img/portfolio/gulfcut.webp',
            'summary' => 'Lead-generation website for a Dubai concrete cutting and core drilling company serving the whole UAE.',
            'highlights' => ['Service pages for every cutting method', 'Quote, call and WhatsApp CTAs', 'Projects and blog for local SEO'],
            'about' => [
                'Gulf Cut is a concrete cutting, core drilling and demolition company based in Al Quoz, Dubai, working across the UAE. Contractors searching for these services want proof of expertise and a fast way to get a quote.',
                'The Laravel website gives every service — wall saw, floor saw, wire saw, slab cutting, core drilling, demolition and concrete scanning — its own section, explains why to choose Gulf Cut, and keeps "Get Free Quote" and call buttons visible on every screen.',
            ],
            'features' => ['Dedicated content for 8 cutting & drilling services', '"Why choose us" trust section', 'Working process from free consultation to completion', 'Sticky call and WhatsApp buttons', 'Projects and blog for local SEO', 'Fast, server-rendered Laravel pages'],
            'tech' => ['Laravel', 'PHP', 'JavaScript'],
            'featured' => true,
        ],
        [
            'slug' => 'bella-luxury-limos',
            'title' => 'Bella Luxury Limos',
            'category' => 'Custom PHP',
            'industry' => 'Luxury Transport · USA',
            'url' => 'https://bellaluxurylimos.com/',
            'image' => 'assets/img/portfolio/bellaluxurylimos.webp',
            'summary' => 'A premium website for a Seattle limousine service, designed to reflect the brand and turn visitors into bookings.',
            'highlights' => ['Prominent "Book Now" calls to action', 'Fleet showcase', 'Elegant, brand-matched design'],
            'about' => [
                'Bella Luxury Limos provides luxury limousine transportation in Seattle. Their customers are booking for weddings, events and airport transfers — they want to see the fleet and book quickly.',
                'The custom PHP website uses a dark, premium design that matches the brand, showcases the fleet and service areas, and keeps the "Book Now" button prominent from the first screen.',
            ],
            'features' => ['Premium, brand-matched design', 'Fleet showcase', 'Service areas section', 'Prominent "Book Now" calls to action', 'Client feedback section', 'Responsive on every device'],
            'tech' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
            'featured' => true,
        ],
        [
            'slug' => 'little-cruisers',
            'title' => 'Little Cruisers',
            'category' => 'Custom PHP',
            'industry' => 'Childcare · Canada',
            'url' => 'https://littlecruisers.ca/',
            'image' => 'assets/img/portfolio/littlecruisers.webp',
            'summary' => 'A warm, friendly website for a Canadian childcare center, showing parents its programs, values and daily activities.',
            'highlights' => ['Program pages from infant to kindergarten', 'Playful, parent-friendly design', 'Clear contact path for enquiries'],
            'about' => [
                'Little Cruisers is a childcare center in Canada caring for infants, toddlers, preschoolers and school-age children.',
                'Parents choosing a childcare center want to feel trust and warmth. The website introduces each program, explains the center\'s core values, shows the activities children enjoy — from science experiments to yoga — and makes it easy to get in touch.',
            ],
            'features' => ['Programs: infant, toddler, preschool, kindergarten & OOSC', 'Core values section', 'Activities gallery', 'Playful, colourful design', 'Contact and enquiry section', 'Responsive on every device'],
            'tech' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
            'featured' => true,
        ],
    ],

    // Extra projects listed only in the CV (in addition to 'projects' above).
    'cv_projects' => [
        ['title' => 'Sunfit General Contracting', 'category' => 'Laravel', 'url' => 'https://sunfitgc.com/', 'industry' => 'Construction · UAE'],
        ['title' => 'Concrete Cutting AE', 'category' => 'WordPress', 'url' => 'https://concretecuttingae.com/', 'industry' => 'Construction · UAE'],
        ['title' => 'Qarni Travel', 'category' => 'WordPress', 'url' => 'https://qarnitravel.com/', 'industry' => 'Travel Agency'],
        ['title' => 'Diamond Cutting', 'category' => 'Custom PHP', 'url' => 'https://diamondcutting.biz/', 'industry' => 'Construction · UAE'],
        ['title' => 'Job Recycling', 'category' => 'Custom PHP', 'url' => 'https://jobrecycling.co.uk/', 'industry' => 'Recycling · UK'],
    ],

    'experience' => [
        [
            'period' => '2024 — Present',
            'role' => 'Full-Stack Developer (Laravel & WordPress)',
            'company' => 'BM Group, Lahore',
            'text' => 'Building and maintaining client websites and web apps end to end for businesses in the UAE, Pakistan and abroad — Laravel back ends, WordPress builds, responsive front ends and performance work.',
        ],
        [
            'period' => '2023 — 2024',
            'role' => 'Front-End / Full-Stack Developer',
            'company' => 'Maxflap Technologies, Lahore',
            'text' => 'Developed responsive websites, worked with design and back-end teams on UI implementation, and took part in code reviews.',
        ],
    ],

    'education' => [
        ['period' => '2023 — 2025', 'title' => 'BS Computer Science', 'school' => 'NCBA&E, Lahore'],
        ['period' => '2021 — 2023', 'title' => 'Associate Degree, Computer Science', 'school' => 'University of Central Punjab'],
    ],

    'stack' => [
        'Back end' => ['PHP', 'Laravel', 'MySQL', 'REST APIs'],
        'Front end' => ['JavaScript', 'React', 'Tailwind CSS', 'Bootstrap', 'HTML & CSS'],
        'CMS & tools' => ['WordPress', 'Elementor', 'WooCommerce', 'Git', 'Figma'],
    ],

    'faq' => [
        [
            'q' => 'How much does a website cost?',
            'a' => 'It depends on the pages and features you need. Send me a short description on WhatsApp and I\'ll reply with a clear, itemised quote — no obligation.',
        ],
        [
            'q' => 'How long will my project take?',
            'a' => 'A typical business website takes 2–4 weeks. Larger web apps depend on scope. You\'ll get a timeline in the proposal before any work starts.',
        ],
        [
            'q' => 'Do you work with clients outside Pakistan?',
            'a' => 'Yes — I\'ve built sites for businesses in the UAE, Canada, the UK and Pakistan. We can talk on WhatsApp, email or video call, and I\'m flexible with time zones.',
        ],
        [
            'q' => 'Can you fix or improve my existing website?',
            'a' => 'Absolutely. I can fix bugs, speed up slow pages, redesign sections or add new features to existing Laravel, PHP or WordPress sites.',
        ],
        [
            'q' => 'What do I need to get started?',
            'a' => 'Just a rough idea of what you need, a few websites you like, and your deadline. I\'ll help shape the rest.',
        ],
    ],

    /*
    | Testimonials are only shown when 'approved' is true. These are DRAFTS —
    | send each one to the client, replace the text with their real words,
    | then set 'approved' => true. Never publish a quote the client hasn't approved.
    */
    'testimonials' => [
        [
            'quote' => 'Abrar built our website exactly the way we pictured it. It looks great on phones and he was quick to respond whenever we needed changes.',
            'name' => 'Client name',
            'company' => 'Little Cruisers',
            'approved' => false,
        ],
        [
            'quote' => 'Our new site finally matches the premium service we offer. Customers find it easy to see our fleet and book.',
            'name' => 'Client name',
            'company' => 'Bella Luxury Limos',
            'approved' => false,
        ],
        [
            'quote' => 'Professional, reliable and easy to work with. He understood what we needed and delivered on time.',
            'name' => 'Client name',
            'company' => 'Job Recycling',
            'approved' => false,
        ],
    ],

];
