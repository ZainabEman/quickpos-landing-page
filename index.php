<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Modern Point of Sale System</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <span class="logo-icon">⚡</span>
                <span class="logo-text">QuickPOS</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#features" class="nav-link">Features</a></li>
                <li><a href="#pricing" class="nav-link">Pricing</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
                <li><a href="#signup" class="nav-btn">Sign Up</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <canvas id="canvas"></canvas>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Transform Your Business</h1>
            <p class="hero-subtitle">The fastest, smartest point of sale system for modern retail</p>
            <button class="cta-btn hero-cta" id="signup">Get Started Free</button>
        </div>
        <div class="hero-mockup">
            <div class="mockup-device">
                <div class="mockup-screen"></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="section-header">
            <h2>Powerful Features</h2>
            <p>Everything you need to run your business efficiently</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📦</div>
                <h3>Inventory Management</h3>
                <p>Real-time stock tracking with automated alerts and multi-location support</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Sales Analytics</h3>
                <p>Comprehensive insights into your sales performance with detailed reports</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔗</div>
                <h3>Easy Integration</h3>
                <p>Seamlessly connect with your existing tools and payment processors</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">☁️</div>
                <h3>Cloud Sync</h3>
                <p>Access your data anywhere, anytime with secure cloud synchronization</p>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing">
        <div class="section-header">
            <h2>Simple, Transparent Pricing</h2>
            <p>Choose the plan that fits your business</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Basic</h3>
                <div class="price">$29<span>/mo</span></div>
                <ul class="price-features">
                    <li>✓ Up to 1 location</li>
                    <li>✓ Basic analytics</li>
                    <li>✓ Email support</li>
                    <li>✗ API access</li>
                </ul>
                <button class="pricing-btn">Get Started</button>
            </div>
            <div class="pricing-card featured">
                <div class="badge">Most Popular</div>
                <h3>Pro</h3>
                <div class="price">$79<span>/mo</span></div>
                <ul class="price-features">
                    <li>✓ Up to 5 locations</li>
                    <li>✓ Advanced analytics</li>
                    <li>✓ Priority support</li>
                    <li>✓ API access</li>
                </ul>
                <button class="pricing-btn">Get Started</button>
            </div>
            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">Custom</div>
                <ul class="price-features">
                    <li>✓ Unlimited locations</li>
                    <li>✓ Custom analytics</li>
                    <li>✓ 24/7 support</li>
                    <li>✓ Dedicated account manager</li>
                </ul>
                <button class="pricing-btn">Contact Sales</button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="section-header">
            <h2>Get in Touch</h2>
            <p>We'd love to hear from you</p>
        </div>
        <form class="contact-form" action="process_contact.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            </div>
            <button type="submit" class="cta-btn">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>QuickPOS</h4>
                <p>The modern point of sale system for your business</p>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#" class="social-link">Twitter</a>
                    <a href="#" class="social-link">LinkedIn</a>
                    <a href="#" class="social-link">Facebook</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 QuickPOS. All rights reserved.</p>
        </div>
</footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
