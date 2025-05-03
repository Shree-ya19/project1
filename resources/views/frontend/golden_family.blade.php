@extends('frontend.layout.master')

@section('container')
<style>
    .goldenfamh1 {
        color: #00440b !important;
        margin-top: 70px;
        font-size: 40px;
        text-transform: uppercase;
        letter-spacing: 3px;
        padding-bottom: 10px;
    }

    .gholdenfamp1 {
        color: #e7d31f !important;
        text-align: center;
        padding: 1rem;
        border: 2px solid #00440b;
        margin-top: 30px;
        background-color: #00440b;
    }

    .goldenfamcont1 {
        color: #00440b !important;
    }

    .avatar1 {
        border: 3px solid #00440b !important;
    }

    .goldenfamp2 {
        color: #00440b !important;
    }
    
    /* Card Styling */
    .card {
        margin-bottom: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 1.5rem;
        width: 100%;
        
    }

    .avatar1 {
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    .card-body {
        text-align: center;
    }

    .catbtn1 {
        width: 200px;
    }

    .catbtn {
        border: 2px solid #00440b;
        color: #00440b;
        margin-top: 80px;
        margin-bottom: 20px;
        height: 60px;
        font-weight: 600;
        font-size: large;
    }

    .catbtn:hover {
        background-color: #00440b;
        color: #e7d31f;
    }

    .catbtn1:hover {
        background-color: #00440b;
        color: #e7d31f;
    }

    .maincont {
        border: 2px solid #00440b;
        margin-bottom: 40px;
        width:93%;
    }

    .nav-tabs .nav-link {
        color: #00440b;
        font-weight: 600;
        font-size: 1.2rem;
    }

    .nav-tabs .nav-link.active {
        background-color: #00440b;
        color: #e7d31f;
    }

    /* Flexbox for centering card when there is only one data */
    .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

</style>

<!-- Main Title -->
<h1 class="goldenfamh1 text-center">Golden ABC Members</h1>

<!-- Tab Navigation -->
<div class="container-fluid">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="principal-tab" data-bs-toggle="tab" href="#principal" role="tab" aria-controls="principal" aria-selected="true">Our Principal</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="teachers-tab" data-bs-toggle="tab" href="#teachers" role="tab" aria-controls="teachers" aria-selected="false">Our Teachers</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="shareholders-tab" data-bs-toggle="tab" href="#shareholders" role="tab" aria-controls="shareholders" aria-selected="false">Our Shareholders</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="dedicated-members-tab" data-bs-toggle="tab" href="#dedicated-members" role="tab" aria-controls="dedicated-members" aria-selected="false">Other Dedicated Members</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <!-- PRINCIPAL SECTION -->
        <div class="tab-pane fade show active" id="principal" role="tabpanel" aria-labelledby="principal-tab">
            <h2 class="gholdenfamp1 text-info p-1">Our Principal</h2>
            <div class="container-fluid goldenfamcont1 p-4 mt-4">
                <div class="row text-center card-container">
                    @foreach($principal as $member)
                    <div class="col-md-12 mb-4"> <!-- Changed col-md-4 to col-md-12 -->
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ $member->image }}" alt="Principal Image" class="avatar1 rounded-circle mb-3">
                                <h3 class="mt-3 text-dark">{{ $member->name }}</h3>
                                <p class="goldenfamp2 mt-2 text-muted">{{ $member->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- SHAREHOLDERS SECTION -->
        <div class="tab-pane fade" id="shareholders" role="tabpanel" aria-labelledby="shareholders-tab">
            <h2 class="gholdenfamp1 text-info p-1">Our Shareholders</h2>
            <div class="container-fluid p-4 goldenfamcont1 mt-5">
                <div class="row text-center card-container">
                    @foreach($shareholders as $member)
                    <div class="col-md-12 mb-4"> <!-- Changed col-md-4 to col-md-12 -->
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ $member->image }}" alt="Shareholder Image" class="avatar1 rounded-circle mb-3">
                                <h3 class="mt-3 text-dark">{{ $member->name }}</h3>
                                <p class="goldenfamp2 mt-2 text-muted">{{ $member->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- TEACHERS SECTION -->
        <div class="tab-pane fade" id="teachers" role="tabpanel" aria-labelledby="teachers-tab">
            <h2 class="gholdenfamp1 text-info p-1">Our Teachers</h2>
            <div class="container-fluid p-4 goldenfamcont1 mt-5 mb-5">
                <div class="row text-center card-container">
                    @foreach($teachers as $member)
                    <div class="col-md-12 mb-4"> <!-- Changed col-md-4 to col-md-12 -->
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ $member->image }}" alt="Teacher Image" class="avatar1 rounded-circle mb-3">
                                <h3 class="mt-3 text-dark">{{ $member->name }}</h3>
                                <p class="goldenfamp2 mt-2 text-muted">{{ $member->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- DEDICATED MEMBERS SECTION -->
        <div class="tab-pane fade" id="dedicated-members" role="tabpanel" aria-labelledby="dedicated-members-tab">
            <h2 class="gholdenfamp1 text-info p-1">Other Dedicated Members</h2>
            <div class="container-fluid p-4 goldenfamcont1 mt-5 mb-5">
                <div class="row text-center card-container">
                    @foreach($dedicated as $member)
                    <div class="col-md-12 mb-4"> <!-- Changed col-md-4 to col-md-12 -->
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ $member->image }}" alt="Member Image" class="avatar1 rounded-circle mb-3">
                                <h3 class="mt-3 text-dark">{{ $member->name }}</h3>
                                <p class="goldenfamp2 mt-2 text-muted">{{ $member->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top Button -->
<button id="backToTopBtn" 
    style="position: fixed; bottom: 20px; right: 20px; background-color: #00440b; color: #e7d31f; border: none; border-radius: 50%; padding: 10px 15px; font-size: 20px; display: none; cursor: pointer; transition: background-color 0.3s, color 0.3s;" 
    onclick="scrollToTop()">
   Top ↑
</button>

<script>
    var mybutton = document.getElementById("backToTopBtn");

    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    };

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
</script>

@endsection
