<?php
// Main Home Page for Douglas Electrical Solutions
include_once 'header.php';
?>

<!-- 1. HERO SLIDESHOW SECTION -->
<section id="home" class="hero">
    <!-- Slide 1 -->
    <div class="hero-slide active" style="background-image: url('assets/7.jpeg');">
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="slide-content">
                <h1 class="hero-title">
                    Electrician<br>
                    <span class="text-amber">Solutions</span>
                </h1>
                <p class="hero-desc">Expert residential electrical installations, switchboard upgrades, and emergency solutions. We come directly to your home with guaranteed safety and 24/7 support.</p>
                <div class="hero-buttons">
                    <a href="contact.php" class="btn btn-amber btn-pill">
                        Book a Visit
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slide 2 -->
    <div class="hero-slide" style="background-image: url('assets/service-lighting.png');">
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="slide-content">
                <h1 class="hero-title">
                    Modern Lighting &amp;<br>
                    <span class="text-amber">Power Upgrades</span>
                </h1>
                <p class="hero-desc">Upgrade your living space with energy-efficient LED downlights, custom outdoor lighting, and modern USB charging outlets installed by experts.</p>
                <div class="hero-buttons">
                    <a href="services.php" class="btn btn-amber btn-pill">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slide 3 -->
    <div class="hero-slide" style="background-image: url('assets/45.webp');">
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="slide-content">
                <h1 class="hero-title">
                    24/7 Emergency<br>
                    <span class="text-amber">Repairs &amp; Support</span>
                </h1>
                <p class="hero-desc">Tripped breakers, sparking outlets, or sudden power outages? Our licensed emergency response team is available day or night.</p>
                <div class="hero-buttons">
                    <a href="contact.php" class="btn btn-amber btn-pill">
                        Call Emergency
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Dots -->
    <div class="hero-controls" aria-label="Hero Slideshow Controls">
        <button class="hero-dot active" data-slide="0" aria-label="Go to Slide 1"></button>
        <button class="hero-dot" data-slide="1" aria-label="Go to Slide 2"></button>
        <button class="hero-dot" data-slide="2" aria-label="Go to Slide 3"></button>
    </div>
</section>

<!-- 2. TRUST BAR -->
<section class="trust-bar">
    <div class="container trust-container">
        <!-- Trust Badge 1 -->
        <div class="trust-item">
            <div class="trust-icon" aria-hidden="true">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div class="trust-content">
                <h4>Licensed &amp; Insured</h4>
                <p>Full compliance &amp; safety guaranteed</p>
            </div>
        </div>
        <!-- Trust Badge 2 -->
        <div class="trust-item">
            <div class="trust-icon" aria-hidden="true">
                <i class="fa-solid fa-truck-fast"></i>
            </div>
            <div class="trust-content">
                <h4>Same-Day Service</h4>
                <p>Fast dispatch for urgent jobs</p>
            </div>
        </div>
        <!-- Trust Badge 3 -->
        <div class="trust-item">
            <div class="trust-icon" aria-hidden="true">
                <i class="fa-solid fa-award"></i>
            </div>
            <div class="trust-content">
                <h4>10+ Years Experience</h4>
                <p>Trusted industry expertise</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICES PREVIEW SECTION -->
<section id="services" class="services-section section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">What We Do</span>
            <h2 class="section-title">Our Professional Services</h2>
        </div>
        
        <div class="services-grid">
            <!-- Service Card 1 -->
            <article class="service-card" id="serviceWiring">
                <div class="service-card-body">
                    <div class="service-card-header">
                        <div class="service-card-icon">
                            <i class="fa-solid fa-plug-circle-bolt" aria-hidden="true"></i>
                        </div>
                        <h3>Wiring &amp; Rewiring</h3>
                    </div>
                    <p>Complete home rewiring, repairs, and extensions. We replace old, hazardous wiring with modern, high-standard cable systems to ensure safety and compliance.</p>
                    <a href="services.php#wiring" class="service-card-link">
                        Read More <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <!-- Service Card 2 -->
            <article class="service-card" id="serviceSwitchboard">
                <div class="service-card-body">
                    <div class="service-card-header">
                        <div class="service-card-icon">
                            <i class="fa-solid fa-circle-nodes" aria-hidden="true"></i>
                        </div>
                        <h3>Switchboard Upgrades</h3>
                    </div>
                    <p>Keep your home safe from electrical hazards. We replace outdated fuse boxes with modern switchboards equipped with modern RCD safety switches.</p>
                    <a href="services.php#switchboard" class="service-card-link">
                        Read More <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <!-- Service Card 3 -->
            <article class="service-card" id="servicePowerPoints">
                <div class="service-card-body">
                    <div class="service-card-header">
                        <div class="service-card-icon">
                            <i class="fa-solid fa-lightbulb" aria-hidden="true"></i>
                        </div>
                        <h3>Power Points &amp; Lighting</h3>
                    </div>
                    <p>Installation of smart lighting, energy-efficient LEDs, outdoor illumination, and extra power outlets with USB charging capability.</p>
                    <a href="services.php#lighting" class="service-card-link">
                        Read More <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <!-- Service Card 4 -->
            <article class="service-card" id="serviceInspections">
                <div class="service-card-body">
                    <div class="service-card-header">
                        <div class="service-card-icon">
                            <i class="fa-solid fa-clipboard-check" aria-hidden="true"></i>
                        </div>
                        <h3>Safety Inspections</h3>
                    </div>
                    <p>Preventative safety audits for peace of mind. We inspect insulation, smoke alarms, grounding systems, and overall electrical integrity.</p>
                    <a href="services.php#inspections" class="service-card-link">
                        Read More <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Before & After Comparison Section -->
<section class="before-after-section section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">Real Transformations</span>
            <h2 class="section-title">Before &amp; After Upgrades</h2>
        </div>
        <div class="slider-wrapper">
            <div class="comparison-slider" id="comparisonSlider">
                <!-- After Image (Background) -->
                <img src="assets/service-switchboard.png" alt="Modern Switchboard Panel Upgrade (After)" class="slider-image image-after">
                
                <!-- Before Image (Resizeable overlay) -->
                <div class="image-before-wrapper" id="beforeImageWrapper">
                    <img src="assets/switchboard_before.png" alt="Messy Outdated Fuse Box (Before)" class="slider-image image-before">
                </div>
                
                <!-- Slide Handle Bar -->
                <div class="slider-handle" id="sliderHandle" aria-label="Drag slider to compare Before and After">
                    <div class="handle-line"></div>
                    <div class="handle-button">
                        <i class="fa-solid fa-arrows-left-right"></i>
                    </div>
                </div>

                <!-- Labels -->
                <span class="slider-label label-before">Before</span>
                <span class="slider-label label-after">After</span>
            </div>
        </div>
    </div>
</section>

<!-- 4. HOW IT WORKS SECTION -->
<section class="how-it-works-section section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">Process</span>
            <h2 class="section-title">How It Works</h2>
        </div>
        
        <div class="steps-container">
            <!-- Step 1 -->
            <div class="step-card" id="step1">
                <div class="step-number-wrapper">
                    <div class="step-icon" aria-hidden="true">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <div class="step-number">1</div>
                </div>
                <h3>Call Us</h3>
                <p>Get in touch via phone or our online request form to schedule your visit.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="step-card" id="step2">
                <div class="step-number-wrapper">
                    <div class="step-icon" aria-hidden="true">
                        <i class="fa-solid fa-house-chimney-user"></i>
                    </div>
                    <div class="step-number">2</div>
                </div>
                <h3>We Visit Your Home</h3>
                <p>Our licensed technician arrives on time with a fully equipped service vehicle.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="step-card" id="step3">
                <div class="step-number-wrapper">
                    <div class="step-icon" aria-hidden="true">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div class="step-number">3</div>
                </div>
                <h3>Job Done &amp; Guaranteed</h3>
                <p>We perform quality work and clean up, backed by our structural satisfaction guarantee.</p>
            </div>
        </div>
    </div>
</section>



<!-- 6. CALL-TO-ACTION BANNER -->
<section class="cta-banner">
    <div class="container cta-container">
        <h2>Need an Electrician Today?</h2>
        <p>Speak directly with our professional electricians. We'll answer your questions and arrange a same-day service call.</p>
        <div class="cta-actions">
            <a href="tel:<?php echo $phone_number_raw; ?>" class="cta-phone" aria-label="Call us now">
                <i class="fa-solid fa-phone-volume" aria-hidden="true"></i> <?php echo $phone_number; ?>
            </a>
            <a href="contact.php" class="btn btn-amber" id="ctaBookBtn">
                Book Now <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
