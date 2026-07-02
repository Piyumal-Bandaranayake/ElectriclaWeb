<?php
// Services Page for Douglas Electrical Solutions
$page_title = "Our Services | Dauglas Electrical Solution";
$page_description = "Explore our professional electrical services including residential wiring, switchboard upgrades, fault finding, and emergency repairs in Colombo.";
include_once 'header.php';
?>

<!-- 1. PAGE HERO BANNER -->
<section class="about-hero">
    <div class="hero-overlay"></div>
    <div class="container about-hero-container">
        <h1 class="about-hero-title">Our Electrical Services</h1>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
            <span>Services</span>
        </nav>
    </div>
</section>

<!-- 2. SERVICES GRID -->
<section class="services-section section-padding">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">What We Offer</span>
            <h2 class="section-title">Professional Residential Solutions</h2>
        </div>

        <div class="services-grid-detailed">
            <!-- Card 1: Wiring & Rewiring -->
            <article class="detailed-service-card" id="wiring">
                <div class="detailed-service-card-top">
                    <div class="detailed-service-icon" aria-hidden="true">
                        <i class="fa-solid fa-plug-circle-bolt"></i>
                    </div>
                    <h3>Wiring &amp; Rewiring</h3>
                    <p class="detailed-service-desc">Professional residential wiring and rewiring services to ensure safety, reliability, and full electrical compliance across your property.</p>
                    <ul class="detailed-sub-services" aria-label="Wiring &amp; Rewiring sub-services">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Full Home Rewiring</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Appliance Circuits</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Switch &amp; Socket Relocation</li>
                    </ul>
                </div>
                <a href="https://wa.me/<?php echo $whatsapp_number_raw; ?>?text=Hi%20Dauglas%20Electrical%20Solution,%20I'd%20like%20a%20quote%20for%20Wiring%20%26%20Rewiring%20service." class="btn-quote" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="margin-right:6px;"></i>Get a Quote</a>
            </article>

            <!-- Card 2: Switchboard Upgrades -->
            <article class="detailed-service-card" id="switchboard">
                <div class="detailed-service-card-top">
                    <div class="detailed-service-icon" aria-hidden="true">
                        <i class="fa-solid fa-circle-nodes"></i>
                    </div>
                    <h3>Switchboard Upgrades</h3>
                    <p class="detailed-service-desc">Modernize your electrical panel to prevent switchboard failures, circuit overloading, and provide essential RCD safety switches.</p>
                    <ul class="detailed-sub-services" aria-label="Switchboard Upgrades sub-services">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> RCD Safety Switches</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Surge Protection</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Smart Meter Integration</li>
                    </ul>
                </div>
                <a href="https://wa.me/<?php echo $whatsapp_number_raw; ?>?text=Hi%20Dauglas%20Electrical%20Solution,%20I'd%20like%20a%20quote%20for%20Switchboard%20Upgrades%20service." class="btn-quote" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="margin-right:6px;"></i>Get a Quote</a>
            </article>

            <!-- Card 3: Power Points & Lighting -->
            <article class="detailed-service-card" id="lighting">
                <div class="detailed-service-card-top">
                    <div class="detailed-service-icon" aria-hidden="true">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3>Power Points &amp; Lighting</h3>
                    <p class="detailed-service-desc">Upgrade your home with energy-efficient LED downlights, custom outdoor task lights, and new USB-enabled power points.</p>
                    <ul class="detailed-sub-services" aria-label="Power Points &amp; Lighting sub-services">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> LED Downlight Fitouts</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Smart Home Lighting</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> USB Power Outlets</li>
                    </ul>
                </div>
                <a href="https://wa.me/<?php echo $whatsapp_number_raw; ?>?text=Hi%20Dauglas%20Electrical%20Solution,%20I'd%20like%20a%20quote%20for%20Power%20Points%20%26%20Lighting%20service." class="btn-quote" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="margin-right:6px;"></i>Get a Quote</a>
            </article>

            <!-- Card 4: Safety Inspections -->
            <article class="detailed-service-card" id="inspections">
                <div class="detailed-service-card-top">
                    <div class="detailed-service-icon" aria-hidden="true">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <h3>Safety Inspections</h3>
                    <p class="detailed-service-desc">Thorough residential safety audits, compliance reports, and fault finding inspections to maintain a secure environment.</p>
                    <ul class="detailed-sub-services" aria-label="Safety Inspections sub-services">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Electrical Fault Finding</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Smoke Alarm Testing</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Compliance Certifications</li>
                    </ul>
                </div>
                <a href="https://wa.me/<?php echo $whatsapp_number_raw; ?>?text=Hi%20Dauglas%20Electrical%20Solution,%20I'd%20like%20a%20quote%20for%20Safety%20Inspections%20service." class="btn-quote" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="margin-right:6px;"></i>Get a Quote</a>
            </article>

            <!-- Card 5: Power Supply & Distribution Core -->
            <article class="detailed-service-card" id="power-supply">
                <div class="detailed-service-card-top">
                    <div class="detailed-service-icon" aria-hidden="true">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h3>Power Supply &amp; Distribution Core</h3>
                    <p class="detailed-service-desc">The backbone of an industrial plant transforms bulk utility power into usable plant-level voltages:</p>
                    <ul class="detailed-sub-services" aria-label="Power Supply &amp; Distribution Core sub-services">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Step-Down Transformers</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Main Distribution Panels (MDP)</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Busbar Trunking Systems</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Secondary Distribution Panels (SDP)</li>
                    </ul>
                </div>
                <a href="https://wa.me/<?php echo $whatsapp_number_raw; ?>?text=Hi%20Dauglas%20Electrical%20Solution,%20I'd%20like%20a%20quote%20for%20Power%20Supply%20%26%20Distribution%20Core%20service." class="btn-quote" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="margin-right:6px;"></i>Get a Quote</a>
            </article>

            <!-- Card 6: Emergency Repairs -->
            <article class="detailed-service-card" id="emergency">
                <div class="detailed-service-card-top">
                    <div class="detailed-service-icon" aria-hidden="true">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3>Emergency Repairs</h3>
                    <p class="detailed-service-desc">Urgent residential support for power outages, spark or smoke hazards, and immediate fault resolution 24 hours a day.</p>
                    <ul class="detailed-sub-services" aria-label="Emergency Repairs sub-services">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Power Outage Restorations</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Sparking Outlets Repair</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Emergency Hazard Isolation</li>
                    </ul>
                </div>
                <a href="https://wa.me/<?php echo $whatsapp_number_raw; ?>?text=Hi%20Dauglas%20Electrical%20Solution,%20I'd%20like%20a%20quote%20for%20Emergency%20Repairs%20service." class="btn-quote" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="margin-right:6px;"></i>Get a Quote</a>
            </article>

            <!-- Card 7: Containment & Cable Management -->
            <article class="detailed-service-card" id="containment">
                <div class="detailed-service-card-top">
                    <div class="detailed-service-icon" aria-hidden="true">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3>Containment &amp; Cable Management</h3>
                    <p class="detailed-service-desc">Industrial cables must be shielded against physical degradation, oils, and environmental stressors:</p>
                    <ul class="detailed-sub-services" aria-label="Containment &amp; Cable Management sub-services">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Heavy-Duty Conduits</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Cable Trays &amp; Ladders</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Industrial Cables</li>
                    </ul>
                </div>
                <a href="https://wa.me/<?php echo $whatsapp_number_raw; ?>?text=Hi%20Dauglas%20Electrical%20Solution,%20I'd%20like%20a%20quote%20for%20Containment%20%26%20Cable%20Management%20service." class="btn-quote" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="margin-right:6px;"></i>Get a Quote</a>
            </article>
        </div>
    </div>
</section>

<!-- 3. HOW IT WORKS -->
<section class="how-it-works-section section-padding" style="background-color: var(--color-white);">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">Our Process</span>
            <h2 class="section-title">How It Works</h2>
        </div>

        <div class="services-steps-container">
            <!-- Step 1 -->
            <div class="services-step-card">
                <div class="services-step-number">1</div>
                <h3>Call Us</h3>
                <p>Call or submit our online request form to describe your electrical requirements.</p>
            </div>

            <!-- Step 2 -->
            <div class="services-step-card">
                <div class="services-step-number">2</div>
                <h3>Book a Time</h3>
                <p>Choose a convenient time window. We provide accurate timeframes for our arrival.</p>
            </div>

            <!-- Step 3 -->
            <div class="services-step-card">
                <div class="services-step-number">3</div>
                <h3>We Visit</h3>
                <p>Our licensed electrician arrives in a fully equipped service vehicle ready to solve the issue.</p>
            </div>

            <!-- Step 4 -->
            <div class="services-step-card">
                <div class="services-step-number">4</div>
                <h3>Job Guaranteed</h3>
                <p>We execute standard-compliant electrical work and clean up, fully insured and guaranteed.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. FREQUENTLY ASKED QUESTIONS (FAQ) -->
<section class="faq-section section-padding" style="background-color: var(--bg-dark);">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">Common Queries</span>
            <h2 class="section-title" style="color: var(--white);">Frequently Asked Questions</h2>
        </div>
        
        <div class="faq-accordion" style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item" style="background: var(--bg-lighter); margin-bottom: 15px; border-radius: 8px; padding: 20px;">
                <h3 style="color: var(--amber); margin-bottom: 10px; font-size: 18px;">What are your response times for emergency callouts?</h3>
                <p style="color: var(--text-gray); font-size: 15px;">We offer 24/7 emergency services and aim to reach any location within the Colombo District as quickly as possible. For urgent issues, we dispatch our nearest available technician immediately.</p>
            </div>
            <div class="faq-item" style="background: var(--bg-lighter); margin-bottom: 15px; border-radius: 8px; padding: 20px;">
                <h3 style="color: var(--amber); margin-bottom: 10px; font-size: 18px;">What areas do you cover?</h3>
                <p style="color: var(--text-gray); font-size: 15px;">We serve all suburbs within the Colombo District. Whether you are in Colombo 1-15, Nugegoda, Dehiwala, Mount Lavinia, or any other nearby suburb, our team will come directly to your home.</p>
            </div>
            <div class="faq-item" style="background: var(--bg-lighter); margin-bottom: 15px; border-radius: 8px; padding: 20px;">
                <h3 style="color: var(--amber); margin-bottom: 10px; font-size: 18px;">Are your electricians certified and insured?</h3>
                <p style="color: var(--text-gray); font-size: 15px;">Yes, Dauglas Electrical Solution is fully licensed (EL-SL-2024) and insured. All our technicians are experienced professionals who adhere to Sri Lankan safety standards and regulations.</p>
            </div>
            <div class="faq-item" style="background: var(--bg-lighter); margin-bottom: 15px; border-radius: 8px; padding: 20px;">
                <h3 style="color: var(--amber); margin-bottom: 10px; font-size: 18px;">How do you charge for your services?</h3>
                <p style="color: var(--text-gray); font-size: 15px;">Our pricing varies depending on the job. We provide clear, upfront estimates before any work begins. Please contact us directly for an accurate quote for your specific needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What are your response times for emergency callouts?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We offer 24/7 emergency services and aim to reach any location within the Colombo District as quickly as possible. For urgent issues, we dispatch our nearest available technician immediately."
    }
  },{
    "@type": "Question",
    "name": "What areas do you cover?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We serve all suburbs within the Colombo District. Whether you are in Colombo 1-15, Nugegoda, Dehiwala, Mount Lavinia, or any other nearby suburb, our team will come directly to your home."
    }
  },{
    "@type": "Question",
    "name": "Are your electricians certified and insured?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, Dauglas Electrical Solution is fully licensed (EL-SL-2024) and insured. All our technicians are experienced professionals who adhere to Sri Lankan safety standards and regulations."
    }
  },{
    "@type": "Question",
    "name": "How do you charge for your services?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our pricing varies depending on the job. We provide clear, upfront estimates before any work begins. Please contact us directly for an accurate quote for your specific needs."
    }
  }]
}
</script>


<!-- 5. EMERGENCY CTA BANNER -->
<section class="emergency-cta">
    <div class="container emergency-cta-container">
        <h2>Electrical Emergency? We're Available Now</h2>
        <a href="tel:<?php echo $phone_number_raw; ?>" class="emergency-phone" aria-label="Call emergency hotline">
            <i class="fa-solid fa-phone-volume" aria-hidden="true"></i> <?php echo $phone_number; ?>
        </a>
        <div>
            <a href="tel:<?php echo $phone_number_raw; ?>" class="btn-emergency-call">
                <i class="fa-solid fa-phone" aria-hidden="true"></i> Call Now
            </a>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
