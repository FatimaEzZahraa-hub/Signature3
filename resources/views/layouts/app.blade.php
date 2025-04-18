<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/svg+xml">
  <title>{{ $title ?? 'EduTrustSign' }}</title>
  
  <!-- le script qui active le menu responsive de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  @stack('styles')
  
  <style>
    :root {
      --primary: #3d0072;
      --primary-dark: #2b0052;
      --primary-light: #5c1a9e;
      --secondary: #e1b300;
      --text-dark: #2d3436;
      --text-light: #636e72;
      --background: #f8f9fa;
      --white: #ffffff;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: var(--background);
      color: var(--text-dark);
      padding-top: 76px;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0;
      line-height: 1.6;
    }

    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      padding-bottom: 0;
    }

    /* Navbar Styling */
    .navbar {
      background-color: var(--white);
      border-bottom: 1px solid rgba(0,0,0,0.05);
      padding: 1rem 0;
      transition: all 0.3s ease;
    }

    .navbar.scrolled {
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
      padding: 0.7rem 0;
    }

    .navbar-brand {
      font-weight: 800;
      font-size: 1.4rem;
      color: var(--primary) !important;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .navbar-brand img {
      transition: transform 0.3s ease;
    }

    .navbar-brand:hover img {
      transform: rotate(-5deg);
    }

    .nav-link {
      font-weight: 600;
      color: var(--text-dark) !important;
      padding: 0.5rem 1rem !important;
      position: relative;
      transition: all 0.3s ease;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      width: 0;
      height: 2px;
      background: var(--primary);
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-link:hover {
      color: var(--primary) !important;
    }

    .nav-link:hover::after {
      width: 80%;
    }

    /* Buttons */
    .btn {
      padding: 0.6rem 1.5rem;
      border-radius: 8px;
      font-weight: 600;
      letter-spacing: 0.3px;
      transition: all 0.3s ease;
    }

    .btn-primary {
      background: var(--primary);
      border-color: var(--primary);
      box-shadow: 0 4px 15px rgba(61, 0, 114, 0.2);
    }

    .btn-primary:hover {
      background: var(--primary-dark);
      border-color: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(61, 0, 114, 0.3);
    }

    .btn-outline-light {
      border: 2px solid var(--primary);
      color: var(--primary) !important;
    }

    .btn-outline-light:hover {
      background: var(--primary);
      color: var(--white) !important;
      transform: translateY(-2px);
    }

    /* Custom Navbar Toggler */
    .navbar-toggler {
      border: none;
      padding: 0;
      width: 30px;
      height: 30px;
      position: relative;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-toggler-icon {
      background-image: none;
      background-color: var(--primary);
      height: 2px;
      width: 100%;
      position: absolute;
      top: 50%;
      transition: all 0.3s ease;
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 2px;
      background-color: var(--primary);
      transition: all 0.3s ease;
    }

    .navbar-toggler-icon::before {
      top: -8px;
    }

    .navbar-toggler-icon::after {
      bottom: -8px;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
      background-color: transparent;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
      transform: rotate(45deg);
      top: 0;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
      transform: rotate(-45deg);
      bottom: 0;
    }

    /* Sections */
    section {
      padding: 5rem 0;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 800;
      color: var(--primary);
      margin-bottom: 1rem;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 3px;
      background: var(--primary);
      border-radius: 2px;
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    /* Footer */
    footer {
      background-color: var(--primary);
      color: var(--white);
      padding: 4rem 0 2rem;
    }

    .footer-title {
      font-weight: 700;
      margin-bottom: 1.5rem;
      font-size: 1.2rem;
    }

    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-links li {
      margin-bottom: 0.8rem;
    }

    .footer-links a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      color: var(--white);
      padding-left: 5px;
    }

    /* Animations */
    .fade-up {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease;
    }

    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .navbar-collapse {
        background: var(--white);
        padding: 1rem;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-top: 1rem;
      }

      .nav-link {
        padding: 0.8rem 1rem !important;
      }

      .nav-link::after {
        display: none;
      }

      .section-title {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <!-- ✅ Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/EDUTRUSTSIGN (3).svg') }}" alt="Logo" width="35" height="35">
            EduTrustSign
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar" aria-controls="menuNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq') }}">
                        <i class="bi bi-question-circle me-1"></i>FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">
                        <i class="bi bi-envelope me-1"></i>Contact
                    </a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('connexion') }}">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Connexion
                        </a>
                    </li>
            </ul>
        </div>
    </div>
  </nav>

  <!-- ✅ Contenu -->
  <main>
    @yield('content')
  </main>

  <!-- JavaScript pour animations -->
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Fade up animation
    document.addEventListener("DOMContentLoaded", function() {
      const fadeElements = document.querySelectorAll('.fade-up');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1
      });

      fadeElements.forEach(element => {
        observer.observe(element);
      });
    });

    // Navbar height adjustment
    window.addEventListener('DOMContentLoaded', () => {
      const navHeight = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navHeight + 'px';
    });
  </script>
</body>
</html>