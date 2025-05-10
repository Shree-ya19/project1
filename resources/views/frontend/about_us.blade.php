<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Our School</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body, html {
      margin: 0;
      padding: 0;
    }

    .carousel-item video {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }

    .btn-home {
      background-color: #00440b;
      color: #e7d31f;
      padding: 10px 25px;
      font-size: 1rem;
      display: inline-block;
      text-align: center;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-home:hover {
      background-color: #003308;
      color: #e7d31f;
    }

    .logo-top-left {
      background-color: #00440b;
      padding: 8px;
      border-radius: 50%;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    .logo-top-left img {
      height: 150px;
      width: 150px;
      object-fit: cover;
      border-radius: 50%;
    }

    .principal-message {
      background-color: #00440b;
      padding: 3rem;
      border-left: 8px solid #e7d31f;
      margin-top: 3rem;
      margin-bottom: 3rem;
      color: #e7d31f;
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      align-items: center;
      gap: 2rem;
    }

    .section-box {
      background-color: #00440b;
      padding: 2rem;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      margin-top: 2rem;
      color: #e7d31f;
      font-family: Arial, Helvetica, sans-serif;
      border-left: 6px solid #e7d31f;
    }

    .principal-img {
      width: 250px;
      height: auto;
      border-radius: 10px;
      object-fit: cover;
    }

    @media (max-width: 768px) {
      .principal-message {
        flex-direction: column;
        text-align: center;
      }
      .principal-img {
        width: 80%;
      }
    }
  </style>
</head>
<body>

<!-- Fullscreen Carousel with Video -->
@foreach($abouts as $about)
<div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active position-relative">
      <video autoplay muted loop playsinline>
        <source src="{{ $about->video }}" type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <!-- Top-left logo -->
      <div class="position-absolute top-0 start-0 m-4 z-3">
        <div class="logo-top-left">
          <img src="{{ $systemsetting->logo }}" alt="School Logo">
        </div>
      </div>

      <!-- Back to Home button -->
      <a href="/" class="btn btn-home position-absolute bottom-0 end-0 m-4 z-3">
        Back to Home
      </a>
    </div>
  </div>
</div>

<!-- Principal's Message -->
<div class="container-fluid">
  <div class="principal-message">
    
    <!-- Principal Image -->
    <div>
      <img src="{{ $about->image }}" alt="Principal" class="principal-img">
    </div>

    <!-- Message Text -->
    <div>
      <h3>Message from the Principal</h3>
      <p>{{ $about->message }}</p>
    </div>
  </div>

  <!-- Our History -->
  <div class="section-box">
    <h4>Our History</h4>
    <p>{{ $about->history }}</p>
  </div>

  <!-- Educational Philosophy -->
  <div class="section-box">
    <h4>Our Educational Philosophy</h4>
    <p>{{ $about->philosophy }}</p>
  </div>
</div>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
