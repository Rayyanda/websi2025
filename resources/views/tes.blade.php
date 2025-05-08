<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Testimonial Carousel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .carousel-item {
      transition: transform 0.5s ease, opacity 0.5s ease;
      opacity: 0.5;
      transform: scale(0.9);
    }

    .carousel-item.active {
      opacity: 1;
      transform: scale(1);
      z-index: 2;
    }

    .testimonial {
      padding: 20px;
      background-color: white;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .testimonial img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .carousel-inner {
      display: flex;
      justify-content: center;
    }

    .carousel-item {
      flex: 0 0 33.3333%;
      max-width: 33.3333%;
    }

    @media (max-width: 768px) {
      .carousel-item {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-5">
  <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="testimonial">
          <img src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
          <h5 class="text-primary">Ronne Galle</h5>
          <small class="text-muted">Project Manager</small>
          <p class="mt-3">" Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat "</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="testimonial">
          <img src="https://randomuser.me/api/portraits/women/11.jpg" alt="">
          <h5 class="text-info">Missy Limana</h5>
          <small class="text-muted">Engineer</small>
          <p class="mt-3">" Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat "</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="testimonial">
          <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
          <h5 class="text-danger">Martha Brown</h5>
          <small class="text-muted">Project Manager</small>
          <p class="mt-3">" Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat "</p>
        </div>
      </div>
    </div>

    <div class="carousel-indicators mt-4">
      <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
