<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .principal-section {
      background-color: #00440b;
      padding: 40px 20px;
      color: #e7d31f;
      border: 2px solid #e7d31f;
    }
    .principal-photo {
      max-width: 200px;
      border-radius: 10px;
    }
    video {
      width: 100%;
      height: auto;
      display: block;
    }
    .fixed-back-btn {
      position: fixed;
      bottom: 20px;
      left: 20px;
      z-index: 1000;
    }
    .back {
      background-color: #00440b;
      border: 2px solid #e7d31f;
      color: #e7d31f;
    }
    .back:hover {
      background-color: white;
      border: 2px solid #00440b;
      color: #00440b;
    }
    .col {
      border: 2px solid #e7d31f;
    }
    .about {
      color: #00440b;
    }
  </style>
</head>
<body>

  <!-- Fixed Back to Home Button -->
  <a href="{{ route('welcome') }}" class="btn btn-secondary fixed-back-btn back">&larr; Back to Home</a>

  @foreach($abouts as $about)
  <div class="container-fluid mt-5 about">
    <h2 class="text-center mb-4">About Our School</h2>

    <!-- Our History and Education Philosophy -->
    <div class="row mb-5">
      <div class="col-md-6">
        <div class="p-4 rounded shadow-sm col">
          <h4>Our History</h4>
          <p>{!!   $about->history !!}</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-4 rounded shadow-sm col">
          <h4>Education Philosophy</h4>
          <p>{!! $about->philosophy !!}</p>
        </div>
      </div>
    </div>

    <!-- Message from the Principal -->
    <div class="principal-section text-center mb-5">
      <img src="{{ $about->image }}" alt="Principal" class="principal-photo mb-3">
      <h4>Message from Our Principal</h4>
      <p class="mx-auto" style="max-width: 800px;">{!!  $about->message  !!}</p>
    </div>

    <!-- Autoplay Video Section with Modal Trigger -->
    <div class="container mb-5">
      <h4 class="text-center mb-3">A Glimpse into Our School Life</h4>
      <div class="position-relative" style="cursor: pointer;" onclick="openVideoModal()">
        <video autoplay muted loop playsinline class="w-100 rounded shadow">
          <source src="{{ $about->video }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <!-- Play icon overlay -->
        <div class="position-absolute top-50 start-50 translate-middle">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#ffffffcc" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.271 5.055a.5.5 0 0 0-.771.422v5.046a.5.5 0 0 0 .771.422l4.184-2.523a.5.5 0 0 0 0-.844L6.271 5.055z"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-dark">
          <div class="modal-body p-0">
            <video id="modalVideo" class="w-100 h-100" controls autoplay>
              <source src="{{ $about->video }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>

  <!-- Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script for opening and pausing video -->
  <script>
    function openVideoModal() {
      const modal = new bootstrap.Modal(document.getElementById('videoModal'));
      modal.show();

      const modalVideo = document.getElementById('modalVideo');
      modalVideo.currentTime = 0;
      modalVideo.play();
    }

    document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
      const modalVideo = document.getElementById('modalVideo');
      modalVideo.pause();
    });
  </script>

</body>
</html>
