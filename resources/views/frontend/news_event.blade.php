@extends('frontend.layout.master')

@section('container')
<div class="container  mb-5"style="margin-top:57px">
    <div class="text-center mb-5">
        <h2 class="fw-bold "style="color: #00440b;" >News & Events</h2>
        <p class="text-muted">Stay updated with the latest news and upcoming events from our school.</p>
    </div>

    <!-- Latest News Section -->
    <section class="mb-5">
        <h4 class="mb-4 fw-semibold" style="color: #00440b;">
            <i class="bi bi-newspaper"></i> Latest News
        </h4>
        <div class="row g-4">
            @foreach($latestNews as $latestnews)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm  eventcard">
                    <img src="{{ $latestnews->image }}" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title  fw-bold"style="color: #00440b;">{{ $latestnews->title }}</h5>
                        <p class="card-text">
                            <small class="text-muted">{{ $latestnews->date }}</small>
                        </p>
                        <p class="card-text">{{ $latestnews->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <hr class="my-5">

    <!-- Upcoming Events Section -->
    <section>
        <h4 class="mb-4 fw-semibold" style="color: #00440b;">
            <i class="bi bi-calendar-event"></i> Upcoming Events
        </h4>
        <div class="row g-4">
            @foreach($upcomingEvents as $upcomingevent)
            <div class="col-md-6">
                <div class="card h-100 shadow-sm p-4  eventcard">
                    <h5 class="fw-bold "style="color: #00440b;">{{ $upcomingevent->title }}</h5>
                    <p class="mb-1"><i class="bi bi-clock"></i> {{ $upcomingevent->date }}</p>
                    <p>{{ $upcomingevent->detail }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
