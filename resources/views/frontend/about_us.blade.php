@extends('frontend.layout.master')
@section('container')

<style>
    .section-card {
        border: 2px solid #00440b; /* dark green border */
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    .main-heading {
        color: #00440b; /* dark green */
        font-weight: bold;
        margin-top: 50px;
    }
    .sub-heading {
        color: #006400; /* a slightly lighter green */
        font-weight: bold;
    }
    .text {
        font-size: 16px;
        color: black;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>

<div class="container-fluid p-5">
    <h2 class="text-center main-heading"><i class="bi bi-info-circle"></i> About Golden ABC Public School</h2>

    <!-- About the School -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card section-card">
                <h4 class="mb-3 sub-heading">About Our School</h4>
                <p class="text">
                    Golden ABC Public School is dedicated to nurturing young minds with knowledge, creativity, and discipline. 
                    Our mission is to provide a holistic education that fosters academic excellence, character development, 
                    and a lifelong love of learning. We believe every child has the potential to shine and succeed in a supportive and inspiring environment.
                </p>
            </div>
        </div>
    </div>

    <!-- Message from the Principal -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card section-card">
                <h4 class="mb-3 sub-heading">Message from the Principal</h4>
                <p class="text">
                    Dear Parents and Students,<br><br>
                    At Golden ABC Public School, we are committed to creating a nurturing environment where students are empowered to grow academically, socially, and emotionally.
                    We strive to provide a balanced education that prepares students for the challenges of the future. 
                    Together with our dedicated staff, I am confident that we will continue to achieve great milestones.
                    <br><br>
                    Warm regards,<br>
                    <strong>Mr. Ram Sharma</strong><br>
                    Principal, Golden ABC Public School
                </p>
            </div>
        </div>
    </div>

    <!-- Video Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card section-card text-center">
                <h4 class="mb-4 sub-heading">A Glimpse of Our School</h4>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/your_video_id" title="School Video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
