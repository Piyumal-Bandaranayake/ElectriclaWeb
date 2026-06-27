<?php
// About Page for Douglas Electrical Solutions
include_once 'header.php';
?>

<!-- 1. PAGE HERO BANNER -->
<section class="about-hero">
    <div class="hero-overlay"></div>
    <div class="container about-hero-container">
        <h1 class="about-hero-title">About Douglas Electrical Solutions</h1>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
            <span>About</span>
        </nav>
    </div>
</section>

<!-- 2. OUR STORY SECTION -->
<section class="about-story section-padding">
    <div class="container story-container">
        <div class="story-grid">
            <!-- Left Column: Electrician Image -->
            <div class="story-image-col">
                <div class="story-img-wrapper">
                    <img src="assets/logo.png" alt="Douglas Electrical Solutions Professional Electrician at Work">
                </div>
            </div>
            <!-- Right Column: Story Text and Highlights -->
            <div class="story-content-col">
                <div class="section-title-wrapper section-title-left">
                    <span class="section-subtitle">Who We Are</span>
                    <h2 class="section-title">Our Story</h2>
                </div>
                <p class="story-text">At Dauglas Electrical Solution, we are dedicated to powering your home safely, efficiently, and reliably. Founded in Colombo, our business has built a solid reputation for quality craftsmanship, transparency, and top-tier customer service. We understand that electrical work in your home requires absolute trust, and we strive to earn that trust every single day.</p>
                <p class="story-text">We handle a comprehensive range of residential and commercial electrical solutions, from emergency repairs and lighting installations to complete switchboard upgrades and safety inspections. We work cleanly, arrive on schedule, and use only premium materials, guaranteeing the longevity and safety of your installations.</p>
                
                <div class="story-stats">
                    <div class="stat-box">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Jobs Done</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">10+</div>
                        <div class="stat-label">Years Exp</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number"><i class="fa-solid fa-certificate" aria-hidden="true"></i></div>
                        <div class="stat-label">100% Licensed</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. MEET THE OWNER -->
<section class="meet-owner section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">Leadership</span>
            <h2 class="section-title">Meet the Owner</h2>
        </div>
        
        <div class="owner-card-wrapper">
            <div class="owner-card">
                <div class="owner-body">
                    <h3>Dauglas</h3>
                    <span class="owner-title">Master Electrician &amp; Founder</span>
                    <p class="owner-bio">With years of industry experience, Dauglas serves as the lead master electrician and founder of Dauglas Electrical Solution. He is passionate about providing safe, high-standard electrical solutions and takes pride in serving clients across Colombo. Dauglas personally oversees major electrical works and safety inspections, ensuring every job meets his strict criteria for safety and excellence.</p>
                    <div class="owner-socials">
                        <a href="mailto:<?php echo $business_email; ?>" aria-label="Email Dauglas"><i class="fa-solid fa-envelope" aria-hidden="true"></i></a>
                        <a href="tel:<?php echo $phone_number_raw; ?>" aria-label="Call Dauglas"><i class="fa-solid fa-phone" aria-hidden="true"></i></a>
                        <a href="https://wa.me/94757027799" target="_blank" rel="noopener noreferrer" aria-label="Dauglas on WhatsApp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. WHY CHOOSE US -->
<section class="why-choose-us section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">Our Promise</span>
            <h2 class="section-title">Why Choose Us</h2>
        </div>
        
        <div class="values-grid">
            <!-- Card 1 -->
            <div class="value-card">
                <div class="value-icon" aria-hidden="true">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h3>Licensed &amp; Insured</h3>
                <p>We are registered electrical contractors and carry full liability insurance to guarantee complete protection on every visit.</p>
            </div>
            <!-- Card 2 -->
            <div class="value-card">
                <div class="value-icon" aria-hidden="true">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <h3>Punctual &amp; Reliable</h3>
                <p>We value your schedule. We arrive on time, keep you informed of our progress, and work efficiently to minimize disruption to your day.</p>
            </div>
            <!-- Card 3 -->
            <div class="value-card">
                <div class="value-icon" aria-hidden="true">
                    <i class="fa-solid fa-broom"></i>
                </div>
                <h3>Clean &amp; Tidy Work</h3>
                <p>We treat your home with respect. We lay drop sheets, clean up all debris, and leave your living areas clean and tidy post-installation.</p>
            </div>
            <!-- Card 4 -->
            <div class="value-card">
                <div class="value-icon" aria-hidden="true">
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
                <h3>Satisfaction Guaranteed</h3>
                <p>Your satisfaction is our goal. All our materials and labor are covered by a comprehensive warranty to ensure complete peace of mind.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. INFINITE PHOTO STRIP -->
<section class="photo-strip-section" aria-label="Our Work Gallery">
    <div class="section-title-wrapper text-center" style="padding: 60px 20px 30px;">
        <span class="section-subtitle">Our Work</span>
        <h2 class="section-title">See Us In Action</h2>
    </div>

    <div class="photo-marquee-wrapper">
        <!-- Fade edges -->
        <div class="marquee-fade marquee-fade--left"></div>
        <div class="marquee-fade marquee-fade--right"></div>

        <!-- Scrolling track (images duplicated for seamless loop) -->
        <div class="marquee-track" id="marqueeTrack">
            <div class="marquee-inner">
                <img src="assets/1.jpeg"    alt="Electrician at work" class="marquee-img">
                <img src="assets/2.jpeg"              alt="Electrical services" class="marquee-img">
                <img src="assets/3.jpeg"        alt="Douglas master electrician" class="marquee-img">
                <img src="assets/4.jpeg"   alt="Safety inspection" class="marquee-img">
                <img src="assets/5.jpeg"     alt="Lighting installation" class="marquee-img">
                <img src="assets/6.jpeg"  alt="Switchboard upgrade" class="marquee-img">
                <img src="assets/7.jpeg"       alt="Electrical wiring" class="marquee-img">
                <img src="assets/8.jpeg"  alt="Switchboard upgrade" class="marquee-img">
                <img src="assets/9.jpeg"       alt="Electrical wiring" class="marquee-img">
                <img src="assets/10.jpeg"  alt="Switchboard upgrade" class="marquee-img">
                <img src="assets/11.jpeg"       alt="Electrical wiring" class="marquee-img">

                <!-- Duplicate set for seamless infinite loop -->
                <img src="assets/1.jpeg"    alt="Electrician at work" class="marquee-img">
                <img src="assets/2.jpeg"              alt="Electrical services" class="marquee-img">
                <img src="assets/3.jpeg"        alt="Douglas master electrician" class="marquee-img">
                <img src="assets/4.jpeg"   alt="Safety inspection" class="marquee-img">
                <img src="assets/5.jpeg"     alt="Lighting installation" class="marquee-img">
                <img src="assets/6.jpeg"  alt="Switchboard upgrade" class="marquee-img">
                <img src="assets/7.jpeg"       alt="Electrical wiring" class="marquee-img">
            </div>
        </div>
    </div>
</section>

<!-- 7. CTA BANNER -->
<section class="cta-banner">
    <div class="container cta-container">
        <h2>Ready to Work With Us?</h2>
        <p>Book your professional electrical inspection or get a service estimate with Dauglas today.</p>
        <div class="cta-actions">
            <a href="tel:<?php echo $phone_number_raw; ?>" class="cta-phone" aria-label="Call us now">
                <i class="fa-solid fa-phone-volume" aria-hidden="true"></i> <?php echo $phone_number; ?>
            </a>
            <a href="contact.php" class="btn btn-amber" id="aboutCtaBookBtn">
                Book Now <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
