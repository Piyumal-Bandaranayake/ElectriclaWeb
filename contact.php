<?php
// Contact Page for Douglas Electrical Solutions
include_once 'header.php';
?>

<!-- 1. PAGE HERO BANNER -->
<section class="about-hero">
    <div class="hero-overlay"></div>
    <div class="container about-hero-container">
        <h1 class="about-hero-title">Contact Us</h1>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
            <span>Contact</span>
        </nav>
    </div>
</section>

<!-- 2. CONTACT COLUMNS SECTION -->
<section class="contact-section section-padding">
    <div class="container">
            <!-- Contact Info Cards Grid -->
            <div class="contact-cards-grid">

                <!-- Card 1: Phone Number -->
                <div class="contact-card">
                    <div class="contact-card-icon contact-card-icon--phone" aria-hidden="true">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-card-body">
                        <h4 class="contact-card-label">Phone Number</h4>
                        <a href="tel:<?php echo $phone_number_raw; ?>" class="contact-card-value"><?php echo $phone_number; ?></a>
                        <span class="contact-card-sub">Available Mon–Fri, 7AM–5PM</span>
                    </div>
                </div>

                <!-- Card 2: Email Address -->
                <div class="contact-card">
                    <div class="contact-card-icon contact-card-icon--email" aria-hidden="true">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-card-body">
                        <h4 class="contact-card-label">Email Address</h4>
                        <a href="mailto:<?php echo $business_email; ?>" class="contact-card-value"><?php echo $business_email; ?></a>
                        <span class="contact-card-sub">We reply within 24 hours</span>
                    </div>
                </div>

                <!-- Card 3: Service Area -->
                <div class="contact-card">
                    <div class="contact-card-icon contact-card-icon--location" aria-hidden="true">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-card-body">
                        <h4 class="contact-card-label">Service Area</h4>
                        <span class="contact-card-value"><?php echo $business_address; ?></span>
                        <span class="contact-card-sub">Residential &amp; commercial coverage</span>
                    </div>
                </div>

                <!-- Card 4: Working Hours -->
                <div class="contact-card">
                    <div class="contact-card-icon contact-card-icon--hours" aria-hidden="true">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="contact-card-body">
                        <h4 class="contact-card-label">Working Hours</h4>
                        <span class="contact-card-value">Mon – Fri: 7:00 AM – 5:00 PM</span>
                        <span class="contact-card-sub">Sat – Sun: Emergencies Only (24/7)</span>
                    </div>
                </div>

            </div>

    </div>
</section>

<!-- 3. SERVICE COVERAGE MAP SECTION -->
<section class="map-section section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">Our Location</span>
            <h2 class="section-title">Areas We Serve</h2>
        </div>
        
        <div class="map-card">
            <div class="map-iframe-wrapper">
                <iframe 
                    title="Dauglas Electrical Solution Service Location Map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.60885756671!2d79.7861988!3d6.9218374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1625000000000!5m2!1sen!2sus" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
