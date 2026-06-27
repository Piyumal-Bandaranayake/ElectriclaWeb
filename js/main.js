

document.addEventListener('DOMContentLoaded', () => {
    // 1. STICKY NAVBAR SCROLL EVENT
    const navbar = document.querySelector('.navbar');

    const checkScroll = () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };

    // Check scroll state on load and scroll
    window.addEventListener('scroll', checkScroll);
    checkScroll();

    // 2. MOBILE HAMBURGER MENU TOGGLE
    const hamburger = document.getElementById('hamburgerToggle');
    const navMenu = document.getElementById('navMenu');
    const navLinks = document.querySelectorAll('.nav-link');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');

            // Toggle body scroll locking when mobile menu is active
            if (navMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
    }

    // Close menu when a link is clicked
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (hamburger && navMenu && navMenu.classList.contains('active')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });

    // 3. SMOOTH SCROLL OFFSET ADJUSTMENT (for Sticky Header)
    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            // Check if it's an internal link or relative hash
            const url = new URL(this.href, window.location.href);
            const currentUrl = new URL(window.location.href);

            // Normalize pathnames (e.g. '/' or '/index.php')
            const normalizePath = (path) => path.replace(/\/index\.php$/, '/');
            const targetPath = normalizePath(url.pathname);
            const currentPath = normalizePath(currentUrl.pathname);

            if (targetPath === currentPath) {
                const targetId = url.hash;
                if (!targetId) return;
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    e.preventDefault();

                    const headerHeight = document.querySelector('.navbar').offsetHeight;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if active
                    if (hamburger && navMenu && navMenu.classList.contains('active')) {
                        hamburger.classList.remove('active');
                        navMenu.classList.remove('active');
                        document.body.style.overflow = '';
                    }

                    // Update URL hash without scroll jump
                    history.pushState(null, null, targetId);
                }
            }
        });
    });

    // 4. HERO SLIDESHOW CONTROLLER
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot');

    if (slides.length > 0 && dots.length > 0) {
        let currentSlideIndex = 0;
        let slideInterval;

        const goToSlide = (index) => {
            // Deactivate current slide and dot
            slides[currentSlideIndex].classList.remove('active');
            dots[currentSlideIndex].classList.remove('active');

            // Activate target slide and dot
            currentSlideIndex = index;
            slides[currentSlideIndex].classList.add('active');
            dots[currentSlideIndex].classList.add('active');
        };

        const nextSlide = () => {
            let nextIndex = (currentSlideIndex + 1) % slides.length;
            goToSlide(nextIndex);
        };

        const startAutoPlay = () => {
            slideInterval = setInterval(nextSlide, 5000);
        };

        const resetAutoPlay = () => {
            clearInterval(slideInterval);
            startAutoPlay();
        };

        // Add click events to dot controls
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
                resetAutoPlay();
            });
        });

        // Start slideshow autoplay
        startAutoPlay();
    }

    // 5. BEFORE & AFTER COMPARISON SLIDER DRAG LOGIC
    const comparisonSlider = document.getElementById('comparisonSlider');
    const beforeImageWrapper = document.getElementById('beforeImageWrapper');
    const beforeImage = beforeImageWrapper ? beforeImageWrapper.querySelector('.slider-image') : null;
    const sliderHandle = document.getElementById('sliderHandle');

    if (comparisonSlider && beforeImageWrapper && beforeImage && sliderHandle) {
        let isDragging = false;

        // Set the width of the before image dynamically on load & resize to align perfectly
        const alignBeforeImage = () => {
            const sliderWidth = comparisonSlider.offsetWidth;
            beforeImage.style.width = sliderWidth + 'px';
        };

        window.addEventListener('resize', alignBeforeImage);
        alignBeforeImage();

        // Delay alignment slightly to ensure images are fully loaded and layout is calculated
        window.addEventListener('load', alignBeforeImage);
        setTimeout(alignBeforeImage, 500);

        const moveSlider = (clientX) => {
            const rect = comparisonSlider.getBoundingClientRect();
            const positionX = clientX - rect.left;
            let percentage = (positionX / rect.width) * 100;

            // Constrain between 0% and 100%
            if (percentage < 0) percentage = 0;
            if (percentage > 100) percentage = 100;

            // Apply position percentage
            beforeImageWrapper.style.width = percentage + '%';
            sliderHandle.style.left = percentage + '%';
        };

        // Event listeners for pointer drag (mouse and touch unified)
        const onDragStart = (e) => {
            isDragging = true;
        };

        const onDragMove = (e) => {
            if (!isDragging) return;
            const clientX = e.clientX || (e.touches && e.touches[0] ? e.touches[0].clientX : null);
            if (clientX !== null) {
                moveSlider(clientX);
            }
        };

        const onDragEnd = () => {
            isDragging = false;
        };

        // Pointer start on the handle
        sliderHandle.addEventListener('mousedown', onDragStart);
        sliderHandle.addEventListener('touchstart', onDragStart, { passive: true });

        // Pointer move on window
        window.addEventListener('mousemove', onDragMove);
        window.addEventListener('touchmove', onDragMove, { passive: false });

        // Pointer end on window
        window.addEventListener('mouseup', onDragEnd);
        window.addEventListener('touchend', onDragEnd);
        window.addEventListener('touchcancel', onDragEnd);

        // Allow clicking on the slider to move it instantly
        comparisonSlider.addEventListener('click', (e) => {
            if (!isDragging && e.target !== sliderHandle && !sliderHandle.contains(e.target)) {
                moveSlider(e.clientX);
            }
        });
    }

    // SERVICE CARD HIGHLIGHT ON HASH NAVIGATION
    function highlightTargetCard() {
        var hash = window.location.hash;
        if (hash) {
            var targetCard = document.querySelector(hash + '.detailed-service-card');
            if (targetCard) {
                // Smooth scroll with offset for fixed navbar
                setTimeout(function () {
                    var headerHeight = document.querySelector('.navbar') ? document.querySelector('.navbar').offsetHeight : 70;
                    var cardTop = targetCard.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
                    window.scrollTo({ top: cardTop, behavior: 'smooth' });

                    // Add highlight class
                    targetCard.classList.add('highlight');

                    // Remove highlight after animation completes
                    setTimeout(function () {
                        targetCard.classList.remove('highlight');
                    }, 4000);
                }, 300);
            }
        }
    }

    highlightTargetCard();
    window.addEventListener('hashchange', highlightTargetCard);
});
