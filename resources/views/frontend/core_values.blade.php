@extends('frontend.layout.master')
@section('container')

<!-- Core Values Timeline Style -->
<style>
    .timeline {
        position: relative;
        margin: 40px auto;
        padding-left: 30px;
        border-left: 3px solid #00440b;
        background-color: #f4f4f4;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
    }

    .timeline-dot {
        position: absolute;
        left: -11px;
        top: 5px;
        width: 20px;
        height: 20px;
        background-color: #00440b;
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 0 0 3px #00440b;
    }

    .timeline-content {
        padding-left: 30px;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 6px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Core Values Heading */
    .gholdenfamp1 {
        font-size: 35px;
        text-align: center;
        font-weight: bold;
        color: #00440b;  /* Your specific green color */
        margin-top: 61px;  /* Push it below the navbar */
        margin-bottom: -20px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .timeline-content h4 {
        font-size: 1.6rem;
        font-weight: bold;
        color: #00440b;  /* Your specific green color */
        margin-bottom: 10px;
    }

    .timeline-content p {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.6;
    }

    .goldenfamp2 {
        font-size: 20px;
        color: #00440b;
        margin-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Timeline Item Spacing */
    .timeline-item:last-child {
        margin-bottom: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .timeline {
            padding-left: 10px;
        }
        .timeline-content {
            padding-left: 20px;
        }
    }
    .int{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 24px;
    }
</style>

<h2 class="gholdenfamp1  p-1">Our Core Values</h2>

<div class="container-fluid goldenfamcont1 mt-4 mb-5">
    <div class="timeline">
@foreach($corevalues as $corevalue)
        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4 class="'int">{{$corevalue->title}}</h4>
                <p class="goldenfamp2">{{$corevalue->describe}}</p>
            </div>
        </div>
        @endforeach

      <!--  <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4>Innovation</h4>
                <p class="goldenfamp2">We constantly look for new and better ways to grow and improve. Golden Abs embraces creative thinking, technology, and fresh ideas to foster an environment where innovation leads to transformative learning experiences for our students.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4>Excellence</h4>
                <p class="goldenfamp2">We strive for high standards and quality in everything we do. Our pursuit of excellence drives us to deliver exceptional educational outcomes and cultivate an environment that nurtures the full potential of each student.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4>Collaboration</h4>
                <p class="goldenfamp2">We believe in working together to achieve greater success. Golden Abs encourages teamwork and collaboration among students, teachers, and the entire school community to reach shared goals and foster mutual support.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4>Compassion</h4>
                <p class="goldenfamp2">We show empathy and care for everyone in our community. Golden Abs is dedicated to building an inclusive environment where students, staff, and parents feel valued, respected, and supported at all times.</p>
            </div>
        </div>-->

    </div>
</div>

@endsection
