@extends('frontend.layout.master')
@section('container')

<style>
    .program-section {
        border: 4px solid #00440b;
    }

    .program-title,
    .program-title1 {
        color: #00440b;
    }

    .program-card,
    .highlight-card {
        border: 2px solid #e7d31f;
    }

    .highlight-title {
        color: #00440b;
    }

    .program-text {
        color: #e7d31f;
    }
</style>

<div class="container-fluid p-4 mt-5 mb-5">
    <h2 class="text-center mb-4 program-title1">📘 Our Programs</h2>
    <p class="text-center mb-5 highlight-title">Explore our structured academic journey designed to support students from their first steps to secondary level education.</p>

    <!-- Pre-Primary Section -->
    @foreach($levels as $level)
    <div class="card shadow-sm mb-5 p-4 program-section">
        <h4 class="mb-3 program-title">{{ $level->title }}</h4>
        <div class="row">
            @foreach($level->levels as $class)
            <div class="col-md-4 mb-4">
                <div class="card h-100 program-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title highlight-title">{{ $class->title }}</h5>
                        <ul>
                            @foreach($class->subjects as $subject)
                            <li>{{ $subject->title }}</li>
                           @endforeach
                        </ul>
                        <div class="mt-3">
                            <h6 class="highlight-title">Program Highlights</h6>
                            {!! $class->description !!}
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
    @endforeach

    <!-- Primary Section -->
    <!-- <div class="card shadow-sm mb-5 p-4 program-section">
        <h4 class="mb-3 program-title">Primary (Grade 1 to 5)</h4>
        <div class="row">
            @for($i = 1; $i <= 5; $i++)
            <div class="col-md-4 mb-4">
                <div class="card h-100 program-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title highlight-title">Grade {{ $i }}</h5>
                        <ul>
                            <li>English</li>
                            <li>Nepali</li>
                            <li>Mathematics</li>
                            <li>Science</li>
                            <li>Social Studies</li>
                            <li>Moral Education</li>
                            <li>Art & Craft</li>
                            <li>Music</li>
                        </ul>
                        <div class="mt-3">
                            <h6 class="highlight-title">Program Highlights</h6>
                            <ul>
                                <li>Activity-based learning in Grade {{ $i }}</li>
                                <li>Hands-on creativity</li>
                                <li>Value-based education</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div> -->

    <!-- Lower Secondary Section -->
    <!-- <div class="card shadow-sm mb-5 p-4 program-section">
        <h4 class="mb-3 program-title">Lower Secondary (Grade 6 to 8)</h4>
        <div class="row">
            @for($i = 6; $i <= 8; $i++)
            <div class="col-md-4 mb-4">
                <div class="card h-100 program-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title highlight-title">Grade {{ $i }}</h5>
                        <ul>
                            <li>English</li>
                            <li>Nepali</li>
                            <li>Mathematics</li>
                            <li>Science</li>
                            <li>Social Studies</li>
                            <li>Health & Physical Education</li>
                            <li>Computer Science</li>
                            <li>Music</li>
                            <li>Art</li>
                        </ul>
                        <div class="mt-3">
                            <h6 class="highlight-title">Program Highlights</h6>
                            <ul>
                                <li>Research projects and presentations</li>
                                <li>Technology integration</li>
                                <li>Exploratory field visits</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div> -->

    <!-- Secondary Section -->
    <!-- <div class="card shadow-sm mb-5 p-4 program-section">
        <h4 class="mb-3 program-title">Secondary (Grade 9 & 10)</h4>
        <div class="row">
            @for($i = 9; $i <= 10; $i++)
            <div class="col-md-6 mb-4">
                <div class="card h-100 program-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title highlight-title">Grade {{ $i }}</h5>
                        <ul>
                            <li>English</li>
                            <li>Nepali</li>
                            <li>Mathematics</li>
                            <li>Science</li>
                            <li>Social Studies</li>
                            <li>Health & Physical Education</li>
                            <li>Computer Science</li>
                            <li>Additional Math</li>
                        </ul>
                        <div class="mt-3">
                            <h6 class="highlight-title">Program Highlights</h6>
                            <ul>
                                <li>Preparation for SEE exams</li>
                                <li>Career-focused activities</li>
                                <li>Mentorship and guidance for Grade {{ $i }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div> -->
</div>

@endsection