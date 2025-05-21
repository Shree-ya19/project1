@extends('frontend.layout.master')

@section('container')
<style>
    .cont
    {
        margin-top:90px;
        width:94%;
    
    }
    .post
    {
        background-color: #00440b;
        color:#e7d31f;
    }
    .btn
    {
        background-color:#e7d31f;
        color:#00440b;
        
    }
    .card-body
{
background-color: #00440b;
}
.nam
{
    color: #e7d31f;
}

.give
{
    margin-bottom: 40px;
}

</style>
<div class="container-fluid cont ">
  <h2 class="text-center mb-4">Share Your Review</h2>

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

  <!-- Review Form -->
  <form action="{{ route('storeSubmitReview') }}" method="POST">

    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="relation" class="form-label">Your Relation (e.g. Father of Grade 3 Student)</label>
      <input type="text" name="relation" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Your Review</label>
      <textarea name="message" class="form-control" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn ">Submit Review</button>
  </form>

  <!-- Display Reviews (2 per row, more than 3 rows) -->
  <h3 class="mb-4 text-center">Recent Reviews</h3>
  <div class="row">
    @foreach($reviews as $review)
      <div class="col-md-6 mb-4">
        <div class="card shadow-sm  h-100">
          <div class="card-body">
            <h5 class="card-title nam">{{$review->name}}</h5>
            <small class="d-block mb-2 text-white">{{$review->relation}}</small>
            <p class="card-text font-italic nam">{{$review->message}}</p>
          </div>
        </div>
      </div>
      @endforeach
  </div>
</div>

      <div class="text-center mt-4">
    <a href="{{ route('frontend.reviewall') }}" class="btn btn-review px-4 py-2 give">View a Review</a>
  </div>
@endsection
