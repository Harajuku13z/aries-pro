/* ═══════════════════════════════════════════
   ARIES — Premium Animation Engine v3
   Inspired by baselarea.swiss × GSAP patterns
═══════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', () => {
    const root = document.documentElement;
    root.classList.add('js-ready');

    /* ── Hero Ken Burns ── */
    const heroMedia = document.querySelector('.h-hero__media img');
    if (heroMedia) {
        requestAnimationFrame(() => {
            document.querySelector('.h-hero')?.classList.add('loaded');
        });
    }

    /* ── Header scroll ── */
    const header = document.querySelector('.site-header');
    if (header) {
        const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 32);
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* ── Mobile menu ── */
    const mobileMenuToggle = document.querySelector('[data-mobile-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');

    if (mobileMenuToggle && mobileMenu) {
        const mobileMenuPanel = mobileMenu.querySelector('[data-mobile-menu-panel]');
        const mobileMenuLinks = mobileMenu.querySelectorAll('[data-mobile-menu-link]');
        const desktopMq = window.matchMedia('(min-width: 1024px)');
        let closingTimer;
        let openFrame;

        const finishClose = () => {
            mobileMenu.hidden = true;
        };

        const closeMobileMenu = () => {
            window.cancelAnimationFrame(openFrame);
            window.clearTimeout(closingTimer);
            mobileMenu.classList.remove('is-open');
            mobileMenuToggle.classList.remove('is-open');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            mobileMenuToggle.setAttribute('aria-label', 'Ouvrir le menu');
            root.classList.remove('menu-open');
            closingTimer = window.setTimeout(finishClose, 220);
        };

        const openMobileMenu = () => {
            window.clearTimeout(closingTimer);
            mobileMenu.hidden = false;
            openFrame = window.requestAnimationFrame(() => {
                mobileMenu.classList.add('is-open');
                mobileMenuToggle.classList.add('is-open');
                mobileMenuToggle.setAttribute('aria-expanded', 'true');
                mobileMenuToggle.setAttribute('aria-label', 'Fermer le menu');
                root.classList.add('menu-open');
            });
        };

        mobileMenuToggle.addEventListener('click', () => {
            if (mobileMenu.classList.contains('is-open')) {
                closeMobileMenu();
                return;
            }

            openMobileMenu();
        });

        mobileMenuLinks.forEach((link) => {
            link.addEventListener('click', closeMobileMenu);
        });

        document.addEventListener('click', (event) => {
            if (mobileMenu.hidden) return;
            if (mobileMenuToggle.contains(event.target)) return;
            if (event.target === mobileMenu) {
                closeMobileMenu();
                return;
            }
            if (mobileMenuPanel?.contains(event.target)) return;
            closeMobileMenu();
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
                closeMobileMenu();
            }
        });

        const syncMenuToViewport = (event) => {
            if (event.matches) closeMobileMenu();
        };

        if (desktopMq.addEventListener) {
            desktopMq.addEventListener('change', syncMenuToViewport);
        } else {
            desktopMq.addListener(syncMenuToViewport);
        }
    }

    /* ── Scroll Reveal — IntersectionObserver ── */
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const delay = el.dataset.delay ?? '0';
                el.style.transitionDelay = delay + 'ms';
                el.classList.add('visible');
                io.unobserve(el);
            });
        }, { threshold: 0.10, rootMargin: '0px 0px -60px 0px' });

        revealEls.forEach((el) => io.observe(el));
    } else {
        revealEls.forEach((el) => el.classList.add('visible'));
    }

    /* ── Split text reveal for h-hero__title ── */
    const heroTitle = document.querySelector('.h-hero__title');
    if (heroTitle && heroTitle.dataset.split !== 'false') {
        const words = heroTitle.innerHTML.split(/(<[^>]+>|\s+)/);
        let wrapped = '';
        let delay = 0;
        words.forEach((word) => {
            if (!word.trim() || word.startsWith('<')) {
                wrapped += word;
            } else {
                wrapped += `<span class="word-reveal" style="animation-delay:${delay}ms">${word}</span>`;
                delay += 80;
            }
        });
        heroTitle.innerHTML = wrapped;
        heroTitle.classList.add('title-split');
    }

    /* ── Animated counters ── */
    const counters = document.querySelectorAll('[data-count]');
    if (counters.length) {
        const ease = (t) => t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t; // easeInOut

        const countObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = parseInt(el.dataset.count ?? '0', 10);
                const suffix = el.dataset.suffix ?? '';
                const duration = 1800;
                const start = performance.now();

                const tick = (now) => {
                    const elapsed = now - start;
                    const progress = Math.min(elapsed / duration, 1);
                    const value = Math.round(ease(progress) * target);
                    el.textContent = value + suffix;
                    if (progress < 1) requestAnimationFrame(tick);
                };

                requestAnimationFrame(tick);
                countObserver.unobserve(el);
            });
        }, { threshold: 0.5 });

        counters.forEach((el) => countObserver.observe(el));
    }

    /* ── Parallax on scroll (hero media) ── */
    const parallaxEls = document.querySelectorAll('[data-parallax]');
    if (parallaxEls.length) {
        window.addEventListener('scroll', () => {
            const y = window.scrollY;
            parallaxEls.forEach((el) => {
                const speed = parseFloat(el.dataset.parallax ?? '0.3');
                el.style.transform = `translateY(${y * speed}px)`;
            });
        }, { passive: true });
    }

    /* ── Magnetic buttons ── */
    document.querySelectorAll('.h-btn--primary, .h-btn--ghost').forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            btn.style.transform = `translate(${x * 0.18}px, ${y * 0.24}px)`;
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = '';
        });
    });

    /* ── Smooth anchor scroll ── */
    document.querySelectorAll('a[href^="#"]').forEach((a) => {
        a.addEventListener('click', (e) => {
            const target = document.querySelector(a.getAttribute('href'));
            if (!target) return;
            e.preventDefault();
            const offset = 80;
            const top = target.getBoundingClientRect().top + window.scrollY - offset;
            window.scrollTo({ top, behavior: 'smooth' });
        });
    });

    /* ── Active nav link ── */
    const path = window.location.pathname;
    document.querySelectorAll('.header-nav a, .mobile-nav__link').forEach((link) => {
        const href = link.getAttribute('href');
        if (href === path || (path !== '/' && href !== '/' && path.startsWith(href))) {
            link.classList.add('active');
        }
    });

    /* ── Cursor glow (desktop only) ── */
    if (window.innerWidth > 1024 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const glow = document.createElement('div');
        glow.className = 'cursor-glow';
        document.body.appendChild(glow);

        let mx = 0, my = 0, cx = 0, cy = 0;
        document.addEventListener('mousemove', (e) => {
            mx = e.clientX;
            my = e.clientY;
        });

        const animateCursor = () => {
            cx += (mx - cx) * 0.08;
            cy += (my - cy) * 0.08;
            glow.style.transform = `translate(${cx - 160}px, ${cy - 160}px)`;
            requestAnimationFrame(animateCursor);
        };
        animateCursor();
    }

    /* ── Reduced motion ── */
    const mq = window.matchMedia('(prefers-reduced-motion: reduce)');
    const syncMotion = () => root.classList.toggle('reduced-motion', mq.matches);
    syncMotion();
    (mq.addEventListener ?? mq.addListener).call(mq, mq.addEventListener ? 'change' : syncMotion, syncMotion);
});
