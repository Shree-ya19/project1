@extends('frontend.layout.master') <!-- Or change to your layout -->
@section('container')
<style>
.all{
  margin-top:80px;
}
.container {
  margin-bottom: 40px;
}
.ram {
  color:#e7d31f;
}
.de {
  color:#e7d31f;
}
.card-body {
  background-color: #00440b;
}
.give {
  background-color: #00440b;
  color:#e7d31f;
}
</style>

<div class="container mt-5">
  <h2 class="text-center mb-4 all">What parents say About Us</h2>

  <div class="row">
    @foreach($reviews as $review)
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card shadow-sm bg-success text-white h-100">
          <div class="card-body">
            <h5 class="card-title ram">{{ $review->name }}</h5>
            <small class="d-block mb-2">{{ $review->relation }}</small>
            <p class="card-text font-italic de">"{{ $review->message }}"</p>
          </div>
        </div>
      </div>
    @endforeach

    <div class="text-center mt-4 w-100">
      <a href="{{ route('frontend.give_review') }}" class="btn btn-review px-4 py-2 give">Give a Review</a>
    </div>
  </div>
</div>
@endsection
