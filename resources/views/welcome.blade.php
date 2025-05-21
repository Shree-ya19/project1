@extends('frontend.layout.master')
@section('container')
<!----SLIDE START---------------------------------------------------------------------------->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
  .school-carousel .carousel-item {
    height: 80vh;
    min-height: 400px;
    position: relative;
  }

  .school-carousel .carousel-item img {
    object-fit: cover;
    height: 100%;
    width: 100%;
  }

  /* Overlay behind the caption, does NOT affect position */
  .carousel-overlay {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.4); /* You can increase to 0.5 or 0.6 if needed */
    z-index: 1;
  }

  .school-carousel .carousel-caption {
    bottom: 20%;
    z-index: 2;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    width: 100%;
    padding: 0 15px;
  }

  .school-carousel .carousel-caption h1 {
    font-size: 3rem;
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
  }

  .school-carousel .carousel-caption p {
    font-size: 1.25rem;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.6);
  }

  @media (max-width: 768px) {
    .school-carousel .carousel-caption h1 {
      font-size: 2rem;
    }

    .school-carousel .carousel-caption p {
      font-size: 1rem;
    }

    .school-carousel .carousel-item {
      height: 60vh;
    }
  }

  .learn {
    background-color: #00440b;
    color: #e7d31f;
    border: 2px solid #00440b;
  }

  .learn:hover {
    background-color: #00440b;
    color: #e7d31f;
    border: 2px solid #00440b;
  }
</style>


    @if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ session('success') }}",
        confirmButtonColor: '#00440b'
    });
</script>
@endif
<!-- Carousel -->
<div id="schoolCarousel" class="carousel slide school-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($welcomes as $welcome)
    <div class="carousel-item active position-relative">
      <img src="{{ $welcome->image }}" class="d-block w-100" alt="School Assembly">

      <!-- ✅ Non-intrusive overlay -->
      <div class="carousel-overlay"></div>

      <!-- Caption -->
      <div class="carousel-caption text-white">
        <h1>{{$welcome->title}}</h1>
        <p>{{$welcome->caption}}</p>
        <a href="{{ route('about_us') }}" class="btn btn-warning mt-3 learn">Learn More</a>
      </div>
    </div>
  </div>
</div>




<!----SLIDE END---------------------------------------------------------------------------->

<!----CONTAINER1 START---------------------------------------------------------------------------->
<div class="container container1">
     <h1 class="intro">Since 2060</h1>
  <p class="intropara">{!! $welcome->since !!}</p>



</div>
  </div>
</div>

<!----CONTAINER1 ENDS---------------------------------------------------------------------------->

<!--SLIDE START------------------------------------------------------------------------------>
<div class="container-fluid slidercont">
  <div class="row justify-content-center sliderrow">
    @foreach($features as $feature)
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card1 sliderc">
        <img src="{{ $feature->image}}" class="card-img-top" alt="..." >
        <div class="card-body text-center">
          <a href="{{ route($feature->route_name) }}" class="arrow"><i class="{{$feature->icon}}  sliderbi"></i></a>
          <span class="foodf">{{$feature->title}}</span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!--SLIDE END-------------------------------------------------------------------------------->

<!--WHY US CONTAINER START------------------------------------------------------------------------->
<div class="container whycontainer">
<div class="card whycard">
  <div class="card-header whyh text-center">
    Why GOLDEN ABC ACADEMY BANKE HIGH SCHOOL?
  </div>
  <div class="card-body">
    <p class="card-text whyp">{!! $welcome->why!!}</p>
    <!--<a href="#" class="btn btn-primary whybtn"><span class="whyp1">About Us</span></a>-->
  <div class="container subcont">
  <div class="row subrow">
    <div class="col-md-3 subp">
    <i class="bi bi-balloon laptop"></i> <br>
    <span class="laptopp">Spacious Playground </span>
    </div>
    <div class="col-md-3 subp">
    <i class="bi bi-fan laptop"></i><br><span class="laptopp">well-ventilated classrooms</span>
    </div>
    <div class="col-md-3 subp">
    <i class="bi bi-laptop laptop"></i><br><span class="laptopp">
    Excellent well-equipped Labs</span>
    </div>
    <div class="col-md-3 subp">
    <i class="bi bi-people-fill laptop"></i><br><span class="laptopp">Highly Qualified Teachers </span>
    </div>
  </div>
</div>
</div>
@endforeach
</div>
</div>



<!--WHY US CONTAINER ENDS-------------------------------------------------------------------------->
<style>
.review-slider {
  height: 250px;
  overflow: hidden;
  position: relative;
}
.review-track {
  display: flex;
  width: calc(200%);
  animation: scrollSlider 30s linear infinite;
  gap: 1rem;
}
.review-card {
  flex: 0 0 25%;
  background: #00440b;
  padding: 1rem;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  text-align: center;
  transition: transform 0.3s;
}
.review-card h5 {
  color: #e7d31f;
  font-weight: bold;
}
.review-card p {
  font-style: italic;
  font-size: 0.95rem;
  margin-top: 0.5rem;
  color: #e7d31f;
}
.btn-review {
  background-color: #00440b;
  color: #e7d31f;
  margin-top: -92px;
  margin-bottom: 95px;
  position: relative;
  z-index: 10;
}
.btn-review:hover {
  border: 2px solid #00440b;
  color: white;
}
@keyframes scrollSlider {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
@media (max-width: 768px) {
  .review-card { flex: 0 0 50%; }
}
</style>

<!-- Reviews Section -->
 
<div class="container-fluid mt-5">
  <h2 class="text-center mb-4">What Parents Say About Us</h2>
  <p class="text-center mb-4" style="color:  #00440b">
  We truly value the voices of our parents and community. Your feedback helps us grow, improve, and continue providing the best experience for your children. Please take a moment to share your thoughts and experiences with us — your review can inspire other families and help shape a brighter future together!
</p>

  <div class="review-slider">
    <div class="review-track">
      @foreach($reviews as $review)
      <div class="review-card">
        <h5>{{ $review->name }}</h5>
        <small class="text-white">{{ $review->reation }}</small>
        <p>{{ $review->message }}</p>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Buttons -->
  <div class="text-center mt-4">
    <a href="{{ route('frontend.reviewall') }}" class="btn btn me-2 btn-review">View All Reviews</a>
    <a href="{{ route('frontend.give_review') }}" class="btn btn btn-review">Give a Review</a>
  </div>
</div>

@endsection