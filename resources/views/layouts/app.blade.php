<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>@yield('title','Information Systems - Unsada')</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#home">Information Systems</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#home" onclick="scrollToSection(event, 'home')">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about-section" onclick="scrollToSection(event, 'about-section')">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#features-section" onclick="scrollToSection(event, 'features-section')">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#apply-section" onclick="scrollToSection(event, 'apply-section')">Apply</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

<footer>
  &copy; 2025 InfoSys Study Program &sdot; Empowering Tomorrow's Innovators
</footer>
<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script>
  // Smooth scroll and close navbar on link click (Bootstrap collapse)
  function scrollToSection(event, sectionId) {
    event.preventDefault();
    const section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
      // Close navbar if open (for mobile)
      const navbarCollapse = document.querySelector('.navbar-collapse');
      if (navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).toggle();
      }
      // Update active nav link
      document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
      });
      event.target.classList.add('active');
    }
  }
</script>
</body>
</html>
