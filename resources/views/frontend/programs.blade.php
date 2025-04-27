@extends('frontend.layout.master')
@section('container')

<style>
    .program-section {
       border:4px solid #00440b;  
        
    }

    .program-title {
        color:#00440b;
    
    }
    .program-title1 {
        color:#00440b;
       
    }
    .program-card
    {
        border:2px solid #e7d31f;
    }
    .highlight-card
    {
        border:2px solid #e7d31f;
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
    <div class="card shadow-sm mb-5 p-4 program-section">
        <h4 class="mb-3 program-title"> Pre-Primary (Nursery to UKG)</h4>
        <div class="row">
            @foreach(['Nursery', 'LKG', 'UKG'] as $class)
            <div class="col-md-4 mb-4">
                <div class="card h-100  program-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title highlight-title">{{ $class }}</h5>
                        <ul>
                            <li>Rhymes</li>
                            <li>Alphabet Recognition</li>
                            <li>Number Recognition</li>
                            <li>Creative Play</li>
                            <li>Group Activities</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Program Highlights -->
        <div class="card  highlight-card mb-3">
            <div class="card-body">
                <h5 class="card-title highlight-title">Program Highlights</h5>
                <ul>
                    <li>Interactive learning experiences</li>
                    <li>Fun activities and games</li>
                    <li>Early childhood development</li>
                </ul>
            </div>
        </div>
    </div>
<hr>
    <!-- Primary Section -->
    <div class="card shadow-sm mb-5 p-4 program-section">
        <h4 class="mb-3 program-title"> Primary (Grade 1 to 5)</h4>
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
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <!-- Program Highlights -->
        <div class="card  highlight-card mb-3">
            <div class="card-body">
                <h5 class="card-title highlight-title">Program Highlights</h5>
                <ul>
                    <li>Activity-based learning</li>
                    <li>Focus on developing creativity</li>
                    <li>Regular outdoor play and group activities</li>
                </ul>
            </div>
        </div>
    </div>
<hr>
    <!-- Lower Secondary Section -->
    <div class="card shadow-sm mb-5 p-4 program-section">
        <h4 class="mb-3 program-title"> Lower Secondary (Grade 6 to 8)</h4>
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
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <!-- Program Highlights -->
        <div class="card  highlight-card mb-3">
            <div class="card-body">
                <h5 class="card-title highlight-title">Program Highlights</h5>
                <ul>
                    <li>Advanced projects and presentations</li>
                    <li>Introduction to technology and programming</li>
                    <li>Hands-on lab work and field trips</li>
                </ul>
            </div>
        </div>
    </div>
<hr>
    <!-- Secondary Section -->
    <div class="card shadow-sm mb-5 p-4 program-section">
        <h4 class="mb-3 program-title"> Secondary (Grade 9 & 10)</h4>
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
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <!-- Program Highlights -->
        <div class="card  highlight-card mb-3">
            <div class="card-body">
                <h5 class="card-title highlight-title">Program Highlights</h5>
                <ul>
                    <li>Focused preparation for board exams</li>
                    <li>In-depth subject learning</li>
                    <li>Career orientation and guidance</li>
                </ul>
            </div>
        </div>
    </div>

</div>

@endsection
