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
        <div class="footer-container container">
            <div class="footer-content">
                <p class="footer-copyright">&copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved.</p>
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 3C22.0424 3.67548 20.9821 4.19211 19.86 4.53C19.2577 3.83751 18.4573 3.34669 17.567 3.12393C16.6767 2.90116 15.7395 2.95718 14.8821 3.28445C14.0247 3.61173 13.2884 4.1944 12.773 4.95372C12.2575 5.71303 11.9877 6.61234 12 7.53V8.53C10.2426 8.57557 8.50127 8.18581 6.93101 7.39545C5.36074 6.60508 4.01032 5.43864 3 4C3 4 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.5C20.9991 7.22145 20.9723 6.94359 20.92 6.67C21.9406 5.66349 22.6608 4.39271 23 3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 9H2V21H6V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 11.37C16.1234 12.2022 15.9813 13.0522 15.5938 13.799C15.2063 14.5458 14.5932 15.1514 13.8416 15.5297C13.0901 15.908 12.2385 16.0396 11.4078 15.9059C10.5771 15.7723 9.80976 15.3801 9.21485 14.7852C8.61993 14.1902 8.22774 13.4229 8.09408 12.5922C7.96042 11.7615 8.09202 10.9099 8.47029 10.1584C8.84856 9.40685 9.45419 8.79374 10.201 8.40624C10.9478 8.01874 11.7978 7.87659 12.63 8C13.4789 8.12588 14.2649 8.52146 14.8717 9.1283C15.4785 9.73515 15.8741 10.5211 16 11.37Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.5 6.5H17.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
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
