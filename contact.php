<?php
// Contact Page for Douglas Electrical Solutions
$page_title = "Contact Us | Dauglas Electrical Solution";
$page_description = "Get in touch with Dauglas Electrical Solution today. We are ready to help with your electrical installations, repairs, and emergencies in Colombo.";
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
                        <div style="margin-top: 5px; font-size: 0.9em;">
                            <a href="tel:0783048871" style="color: inherit; text-decoration: none;">078 304 8871 - Mr. Rohan</a><br>
                            <a href="tel:0758704503" style="color: inherit; text-decoration: none;">075 870 4503 - Mr. Sehan</a>
                        </div>
                        <span class="contact-card-sub" style="display: inline-block; margin-top: 10px;">Available Mon–Fri, 7AM–5PM</span>
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
                        <span class="contact-card-sub">All Colombo District Suburbs</span>
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

<!-- 2.5 BOOKING FORM SECTION -->
<section class="booking-section section-padding" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <span class="section-subtitle">Book a Service</span>
            <h2 class="section-title">Request an Appointment</h2>
        </div>
        <div class="booking-form-wrapper" style="max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <form id="whatsappBookingForm">
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="bookName" style="display: block; margin-bottom: 5px; font-weight: 500;">Name *</label>
                    <input type="text" id="bookName" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="bookPhone" style="display: block; margin-bottom: 5px; font-weight: 500;">Phone Number *</label>
                    <input type="tel" id="bookPhone" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="bookAddress" style="display: block; margin-bottom: 5px; font-weight: 500;">Address *</label>
                    <input type="text" id="bookAddress" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="bookService" style="display: block; margin-bottom: 5px; font-weight: 500;">Wanted Service *</label>
                    <select id="bookService" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                        <option value="">-- Select a Service --</option>
                        <option value="Wiring & Rewiring">Wiring & Rewiring</option>
                        <option value="Switchboard Upgrades">Switchboard Upgrades</option>
                        <option value="Power & Lighting">Power & Lighting</option>
                        <option value="Safety Inspections">Safety Inspections</option>
                        <option value="Emergency Repairs">Emergency Repairs</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="bookDescription" style="display: block; margin-bottom: 5px; font-weight: 500;">Description</label>
                    <textarea id="bookDescription" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"></textarea>
                </div>
                <button type="submit" class="btn btn-amber btn-pill" style="width: 100%; border: none; padding: 12px; font-size: 16px; cursor: pointer;">
                    Book via WhatsApp
                </button>
            </form>
        </div>
    </div>
</section>

<script>
document.getElementById('whatsappBookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var name = document.getElementById('bookName').value.trim();
    var phone = document.getElementById('bookPhone').value.trim();
    var address = document.getElementById('bookAddress').value.trim();
    var service = document.getElementById('bookService').value;
    var description = document.getElementById('bookDescription').value.trim();
    
    var whatsappNumber = "<?php echo $whatsapp_number_raw; ?>";
    
    var message = "Hello Dauglas Electrical Solution,\nI would like to book a service.\n\n" +
                  "*Name:* " + name + "\n" +
                  "*Phone:* " + phone + "\n" +
                  "*Address:* " + address + "\n" +
                  "*Service:* " + service + "\n";
                  
    if(description) {
        message += "*Description:* " + description + "\n";
    }
    
    var encodedMessage = encodeURIComponent(message);
    var whatsappUrl = "https://wa.me/" + whatsappNumber + "?text=" + encodedMessage;
    
    window.open(whatsappUrl, '_blank');
});
</script>

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
