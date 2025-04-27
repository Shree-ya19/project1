@extends('frontend.layout.master')
@section('container')


<!-- Core Values Timeline Style -->
 <style>
.timeline {
    position: relative;
    margin: 40px auto;
    padding-left: 30px;
    border-left: 3px solid #00440b;
}

.timeline-item {
    position: relative;
    margin-bottom: 30px;
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
    padding-left: 20px;
}
</style>
<h2 class="gholdenfamp1 text-info p-1">Our Core Values</h2>

<div class="container goldenfamcont1 mt-4 mb-5">
    <div class="timeline">

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4 class="text-dark">Integrity</h4>
                <p class="goldenfamp2 text-muted">We uphold honesty and transparency in everything we do.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4 class="text-dark">Innovation</h4>
                <p class="goldenfamp2 text-muted">We constantly look for new and better ways to grow and improve.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4 class="text-dark">Excellence</h4>
                <p class="goldenfamp2 text-muted">We strive for high standards and quality in every task we take on.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4 class="text-dark">Collaboration</h4>
                <p class="goldenfamp2 text-muted">We work together and lift each other up to achieve shared goals.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h4 class="text-dark">Compassion</h4>
                <p class="goldenfamp2 text-muted">We show empathy and care to everyone in our community.</p>
            </div>
        </div>

    </div>
</div>


@endsection
