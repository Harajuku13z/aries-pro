document.addEventListener('DOMContentLoaded', () => {
    const root = document.documentElement;
    const header = document.querySelector('.site-header');
    const menuToggle = document.getElementById('menu-toggle');
    const menuClose = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    root.classList.add('has-motion');

    if (header) {
        const onScroll = () => {
            header.classList.toggle('scrolled', window.scrollY > 24);
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    const setMenuState = (isOpen) => {
        if (!mobileMenu) {
            return;
        }

        mobileMenu.classList.toggle('open', isOpen);
        mobileMenu.setAttribute('aria-hidden', String(!isOpen));
        document.body.style.overflow = isOpen ? 'hidden' : '';
        document.body.classList.toggle('menu-open', isOpen);

        if (menuToggle) {
            menuToggle.setAttribute('aria-expanded', String(isOpen));
        }
    };

    if (menuToggle) {
        menuToggle.addEventListener('click', () => setMenuState(true));
    }

    if (menuClose) {
        menuClose.addEventListener('click', () => setMenuState(false));
    }

    document.querySelectorAll('#mobile-menu a').forEach((link) => {
        link.addEventListener('click', () => setMenuState(false));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            setMenuState(false);
        }
    });

    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach((element) => observer.observe(element));
    } else {
        revealEls.forEach((element) => element.classList.add('visible'));
    }

    const currentPath = window.location.pathname;
    document.querySelectorAll('.header-nav a').forEach((link) => {
        const href = link.getAttribute('href');

        if (href === currentPath || (currentPath !== '/' && href !== '/' && currentPath.startsWith(href))) {
            link.classList.add('active');
        }
    });

    const counters = document.querySelectorAll('[data-count]');

    if (counters.length) {
        const countObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                const element = entry.target;
                const target = Number.parseInt(element.dataset.count ?? '0', 10);
                const suffix = element.dataset.suffix ?? '';
                let current = 0;
                const step = Math.max(1, Math.ceil(target / 48));

                const timer = window.setInterval(() => {
                    current = Math.min(current + step, target);
                    element.textContent = `${current}${suffix}`;

                    if (current >= target) {
                        window.clearInterval(timer);
                    }
                }, 24);

                countObserver.unobserve(element);
            });
        }, { threshold: 0.5 });

        counters.forEach((element) => countObserver.observe(element));
    }

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function handleAnchorClick(event) {
            const target = document.querySelector(this.getAttribute('href'));

            if (!target) {
                return;
            }

            event.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    const syncMotionPreference = () => {
        root.classList.toggle('reduced-motion', prefersReducedMotion.matches);
    };

    syncMotionPreference();
    if (typeof prefersReducedMotion.addEventListener === 'function') {
        prefersReducedMotion.addEventListener('change', syncMotionPreference);
    } else if (typeof prefersReducedMotion.addListener === 'function') {
        prefersReducedMotion.addListener(syncMotionPreference);
    }
});
