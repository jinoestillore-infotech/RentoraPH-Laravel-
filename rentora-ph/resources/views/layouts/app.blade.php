<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token for Secure Laravel Requests -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Dynamic Page Title with Default Fallback -->
    <title>@yield('title', 'Rentora PH | Modern Boarding House Finder & Management')</title>

    <!-- Bootstrap 5.3.3 CSS (Standard Modern Core) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Premium Typography: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Minimal Custom Styling conforming to Bootstrap Design Systems -->
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #fafafa;
            letter-spacing: -0.01em;
        }
        main {
            flex: 1 0 auto;
        }
        /* Custom smooth focus and active link states */
        .nav-link {
            transition: color 0.2s ease;
        }
        .nav-link:hover {
            color: #000000 !important;
        }
    </style>

    <!-- Child-Specific Custom Styles -->
    @yield('styles')
</head>
<body class="bg-light text-dark d-flex flex-column h-100">

    <!-- Navigation Header (Sleek, Pure White, Light Borders, Dark Brand) -->
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom border-light-subtle py-3 shadow-sm">
            <div class="container">
                <!-- System Logo / Brand in Pure Dark -->
                <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-dark" href="{{ url('/') }}">
                    <i class="bi bi-circle-half text-dark fs-4"></i>
                    <span class="tracking-tight text-uppercase" style="font-weight: 800; letter-spacing: -0.5px;">
                        Rentora <span class="fw-normal text-muted">PH</span>
                    </span>
                </a>

                <!-- Mobile Hamburger Button -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#rentoraNavbar" aria-controls="rentoraNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links & High-Contrast Buttons -->
                <div class="collapse navbar-collapse" id="rentoraNavbar">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium px-3 small" aria-current="page" href="{{ url('/') }}">Explore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-medium px-3 small" href="#">Browse Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-medium px-3 small" href="#">How it Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-medium px-3 small" href="#">Contact Support</a>
                        </li>
                    </ul>

                    <!-- Right Auth Actions: Pure Dark & Light Tandem -->
                    <div class="d-flex align-items-center gap-2">
                        <a href="#" class="btn btn-light btn-sm text-dark border-0 fw-semibold px-3 py-2">Sign In</a>
                        <a href="#" class="btn btn-dark btn-sm fw-semibold px-3 py-2 rounded-2">Create Account</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- App Sticky Footer in Deep Ink (SaaS Tandem Highlight) -->
    <footer class="footer bg-dark text-white py-5 mt-auto border-top border-secondary">
        <div class="container">
            <div class="row g-4">
                <!-- Branding & Tagline -->
                <div class="col-lg-4 col-md-12">
                    <a class="text-white text-decoration-none d-flex align-items-center gap-2 fs-5 mb-3 fw-bold" href="{{ url('/') }}">
                        <i class="bi bi-circle-half text-white"></i>
                        <span>RENTORA <span class="text-secondary fw-normal">PH</span></span>
                    </a>
                    <p class="text-secondary small lh-lg" style="color: #94a3b8 !important;">
                        The central system of choice for secure, streamlined boarding house directory listings and management workflows across the Philippines. Built for renters, property owners, and administrative teams.
                    </p>
                </div>

                <!-- Quick Navigation Links -->
                <div class="col-lg-2 col-6 col-md-4">
                    <h6 class="text-uppercase mb-3 fw-bold small text-white" style="letter-spacing: 1px;">Discover</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small hover-link" style="color: #94a3b8 !important;">Property Search</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small" style="color: #94a3b8 !important;">Platform Benefits</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small" style="color: #94a3b8 !important;">Owner Pricing</a></li>
                    </ul>
                </div>

                <!-- System Roles Shortcut Information -->
                <div class="col-lg-3 col-6 col-md-4">
                    <h6 class="text-uppercase mb-3 fw-bold small text-white" style="letter-spacing: 1px;">System Access</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small" style="color: #94a3b8 !important;">Boarders / Tenants Dashboard</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small" style="color: #94a3b8 !important;">Property Owner Portal</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small" style="color: #94a3b8 !important;">Platform Administrator</a></li>
                    </ul>
                </div>

                <!-- Contact & Support -->
                <div class="col-lg-3 col-md-4">
                    <h6 class="text-uppercase mb-3 fw-bold small text-white" style="letter-spacing: 1px;">Inquiries</h6>
                    <p class="small mb-2" style="color: #94a3b8 !important;"><i class="bi bi-envelope me-2"></i> support@rentora.ph</p>
                    <p class="small mb-3" style="color: #94a3b8 !important;"><i class="bi bi-telephone me-2"></i> +63 (02) 8123-4567</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-facebook text-white small"></i></a>
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-twitter-x text-white small"></i></a>
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-linkedin text-white small"></i></a>
                    </div>
                </div>
            </div>

            <hr class="my-4 border-secondary opacity-25">

            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0" style="color: #64748b !important;">&copy; 2026 Rentora PH. Engineered with standard safety constraints.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <a href="#" class="small text-decoration-none me-3" style="color: #64748b !important;">Privacy Policy</a>
                    <a href="#" class="small text-decoration-none" style="color: #64748b !important;">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Additional Child-Specific Scripts -->
    @yield('scripts')
</body>
</html>