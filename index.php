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
    </main>

    <script src="assets/js/main.js"></script>
</body>
</html>

