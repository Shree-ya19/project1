@extends('frontend.layout.master')
@section('container')


<div class="container-fluid mt-5 mb-5">
    <h2 class="text-center mb-4 newsh"> News &  Events</h2>

    <!-- News Section -->
    <div class="mb-5">
        <h4 class="mb-3"><i class="bi bi-newspaper"></i> Latest News</h4>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 eventcard">
                    <img src="{{ asset('assets/images/news1.jpg') }}" class="card-img-top" alt="Quiz Competition">
                    <div class="card-body">
                        <h5 class="card-title">Inter-School Quiz Win</h5>
                        <p class="card-text"><small class="text-muted">March 2025</small></p>
                        <p class="card-text">Our school won the Inter-School Quiz Competition with top marks!</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 eventcard">
                    <img src="{{ asset('assets/images/news2.jpg') }}" class="card-img-top" alt="Board Results">
                    <div class="card-body">
                        <h5 class="card-title">Board Exam Results</h5>
                        <p class="card-text"><small class="text-muted">February 2025</small></p>
                        <p class="card-text">Class 10 board results announced with outstanding student performance.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 eventcard">
                    <img src="{{ asset('assets/images/news3.jpg') }}" class="card-img-top" alt="School Ranking">
                    <div class="card-body">
                        <h5 class="card-title">Top School Ranking</h5>
                        <p class="card-text"><small class="text-muted">January 2025</small></p>
                        <p class="card-text">Our school ranked in the Top 10 nationally by the Education Board.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Events Section -->
    <div>
        <h4 class="mb-3"><i class="bi bi-calendar-event"></i> Upcoming Events</h4>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm p-3 h-100 eventcard">
                    <h5>Annual Day Celebration</h5>
                    <p>Date: April 28, 2025</p>
                    <p>Join us for a grand cultural celebration with performances and awards night!</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm p-3 h-100 eventcard">
                    <h5>Science Exhibition</h5>
                    <p>Date: May 10, 2025</p>
                    <p>Students will present their innovative science models and ideas. Open for parents and guests.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
