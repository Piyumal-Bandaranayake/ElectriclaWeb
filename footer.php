<?php
// Ensure config is included in case footer is rendered independently, but require_once prevents double inclusions
require_once 'config.php';
?>
    <!-- Footer Section -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-top">
                <!-- Column 1: About Business -->
                <div class="footer-column footer-about">
                    <a href="index.php" class="logo">
                        <i class="fa-solid fa-bolt-lightning logo-icon" aria-hidden="true"></i>
                        <span class="logo-text">DAUGLAS<span class="logo-sub" style="color: rgba(255,255,255,0.7);">Electrical Solution</span></span>
                    </a>
                    <p>Providing Colombo homes and businesses with premium electrical solutions. Fast response, licensed quality craftsmanship, and trusted customer service.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://instagram.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://linkedin.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="footer-column footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services Links -->
                <div class="footer-column footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="services.php#wiring">Wiring & Rewiring</a></li>
                        <li><a href="services.php#switchboard">Switchboards</a></li>
                        <li><a href="services.php#lighting">Power & Lighting</a></li>
                        <li><a href="services.php#inspections">Safety Inspections</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Details -->
                <div class="footer-column footer-contact">
                    <h4>Get In Touch</h4>
                    <ul>
                        <li>
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                            <span>
                                <strong>Phone Number</strong>
                                <a href="tel:<?php echo $phone_number_raw; ?>" style="color: inherit;"><?php echo $phone_number; ?></a>
                            </span>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                            <span>
                                <strong>Email Address</strong>
                                <a href="mailto:<?php echo $business_email; ?>" style="color: inherit;"><?php echo $business_email; ?></a>
                            </span>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                            <span>
                                <strong>Service Area</strong>
                                <?php echo $business_address; ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div class="container footer-bottom-container">
                <p>&copy; <?php echo date("Y"); ?> <?php echo $business_name; ?>. All Rights Reserved. | License: <?php echo $license_number; ?></p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/<?php echo $whatsapp_number_raw; ?>?text=Hi%20Dauglas%20Electrical%20Solution,%20I'd%20like%20to%20inquire%20about%20your%20services." class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
    </a>

    <!-- Main JavaScript File -->
    <script src="js/main.js?v=<?php echo filemtime('js/main.js'); ?>"></script>
</body>
</html>
