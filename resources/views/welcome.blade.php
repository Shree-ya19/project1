@extends('frontend.layout.master')
@section('container')
<!----SLIDE START---------------------------------------------------------------------------->
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
  <p class="intropara">{!! $welcome->since!!}</p>


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
  <div class="card-header whyh">
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
@endsection
