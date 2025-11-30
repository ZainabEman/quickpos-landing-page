<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Modern Point of Sale System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Header & Navigation -->
    <header class="header">
        <nav class="nav container">
            <!-- Logo -->
            <div class="logo">
                <a href="#" class="logo-link">QuickPOS</a>
            </div>

            <!-- Desktop Navigation Links -->
            <ul class="nav-links">
                <li><a href="#features" class="nav-link">Features</a></li>
                <li><a href="#pricing" class="nav-link">Pricing</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>

            <!-- Sign Up Button -->
            <div class="nav-cta">
                <a href="#signup" class="btn-signup">Sign Up</a>
            </div>

            <!-- Mobile Hamburger Menu -->
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <ul class="mobile-nav-links">
                <li><a href="#features" class="mobile-nav-link">Features</a></li>
                <li><a href="#pricing" class="mobile-nav-link">Pricing</a></li>
                <li><a href="#contact" class="mobile-nav-link">Contact</a></li>
                <li><a href="#signup" class="mobile-nav-link mobile-cta">Sign Up</a></li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-container container">
                <div class="hero-content">
                    <h1 class="hero-headline">Transform Your Business with Smart Point of Sale</h1>
                    <p class="hero-subheadline">Streamline operations, boost sales, and delight customers with our all-in-one POS solution designed for modern retailers.</p>
                    <a href="#signup" class="btn-hero-cta">Get Started Free</a>
                </div>
                <div class="hero-image-wrapper">
                    <img src="https://via.placeholder.com/600x400/1F2937/4ADE80?text=QuickPOS+Dashboard" alt="QuickPOS Dashboard Mockup" class="hero-image">
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features" id="features">
            <div class="features-container container">
                <h2 class="features-title">Powerful Features for Modern Retail</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 8H17M7 12H17M7 16H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">Real-Time Analytics</h3>
                        <p class="feature-description">Track sales, inventory, and customer data in real-time with comprehensive dashboards and insights.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">Inventory Management</h3>
                        <p class="feature-description">Automate stock tracking, low-stock alerts, and seamless supplier integration for efficient operations.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">Customer Management</h3>
                        <p class="feature-description">Build lasting relationships with customer profiles, purchase history, and loyalty program integration.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">24/7 Support</h3>
                        <p class="feature-description">Get instant help with round-the-clock customer support, live chat, and comprehensive documentation.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section class="pricing" id="pricing">
            <div class="pricing-container container">
                <h2 class="pricing-title">Choose Your Plan</h2>
                <div class="pricing-grid">
                    <!-- Basic Plan -->
                    <div class="pricing-card">
                        <h3 class="pricing-plan-name">Basic</h3>
                        <div class="pricing-price">
                            <span class="price-amount">$29</span>
                            <span class="price-period">/month</span>
                        </div>
                        <ul class="pricing-features">
                            <li>Up to 2 POS terminals</li>
                            <li>Basic inventory tracking</li>
                            <li>Sales reports</li>
                            <li>Email support</li>
                            <li>Mobile app access</li>
                        </ul>
                        <a href="#signup" class="btn-pricing-cta">Get Started</a>
                    </div>

                    <!-- Pro Plan (Highlighted) -->
                    <div class="pricing-card pricing-card-pro">
                        <div class="popular-badge">Most Popular</div>
                        <h3 class="pricing-plan-name">Pro</h3>
                        <div class="pricing-price">
                            <span class="price-amount">$79</span>
                            <span class="price-period">/month</span>
                        </div>
                        <ul class="pricing-features">
                            <li>Up to 10 POS terminals</li>
                            <li>Advanced inventory management</li>
                            <li>Real-time analytics dashboard</li>
                            <li>Customer loyalty program</li>
                            <li>Priority support</li>
                            <li>API access</li>
                            <li>Custom integrations</li>
                        </ul>
                        <a href="#signup" class="btn-pricing-cta">Get Started</a>
                    </div>

                    <!-- Enterprise Plan -->
                    <div class="pricing-card">
                        <h3 class="pricing-plan-name">Enterprise</h3>
                        <div class="pricing-price">
                            <span class="price-amount">$199</span>
                            <span class="price-period">/month</span>
                        </div>
                        <ul class="pricing-features">
                            <li>Unlimited POS terminals</li>
                            <li>Enterprise inventory system</li>
                            <li>Advanced analytics & AI insights</li>
                            <li>Multi-location management</li>
                            <li>Dedicated account manager</li>
                            <li>Custom development</li>
                            <li>24/7 phone support</li>
                            <li>SLA guarantee</li>
                        </ul>
                        <a href="#signup" class="btn-pricing-cta">Contact Sales</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact" id="contact">
            <div class="contact-container container">
                <h2 class="contact-title">Get In Touch</h2>
                <p class="contact-subtitle">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                
                <?php if (isset($_GET['error'])): ?>
                    <div class="form-error">
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <form action="process_contact.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-input" 
                            placeholder="Your name"
                            value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-input" 
                            placeholder="your.email@example.com"
                            value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            class="form-input form-textarea" 
                            rows="6" 
                            placeholder="Tell us how we can help..."
                            required
                        ><?php echo isset($_GET['message']) ? htmlspecialchars($_GET['message']) : ''; ?></textarea>
                    </div>

                    <button type="submit" class="btn-contact-submit">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container container">
            <div class="footer-content">
                <p class="footer-copyright">&copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved..</p>
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
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>

