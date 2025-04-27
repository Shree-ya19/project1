@extends('frontend.layout.master')
@section('container')
<style>
    .goldenfamh1 {
    color: #00440b !important;
    margin-top: 40px;
    font-size: 40px; /* Larger font size for the title */ 
    text-transform: uppercase; /* Transform the title to uppercase */
    letter-spacing: 3px; /* Add letter spacing to make the title feel more spaced out */
    border-bottom: 5px solid #00440b; /* Optional: add a border under the title for emphasis */
    padding-bottom: 10px; /* Padding for spacing below the title */
}


    .gholdenfamp1 {
        color: #00440b !important;
        text-align: center;
        padding: 1rem;
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
        margin-bottom: 30px; /* Space between the cards */
        border-radius: 12px; /* Optional: rounded corners for a smoother look */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Optional: shadow for depth */
        padding: 1.5rem; /* Added padding to the card */
    }

    .avatar1 {
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    .card-body {
        text-align: center;
    }
</style>

<!-- Main Title -->
<h1 class="goldenfamh1 text-center text-primary py-4">Golden ABC Family</h1>


<!-- Principle Section -->
<h2 class="gholdenfamp1 text-info p-1">Our Principle</h2>
<div class="container-fluid goldenfamcont1  p-4 mt-4">
    <div class="text-center">
        <img src="{{ asset('assets/images/avatar1.jpeg') }}" alt="Principal Image" class="avatar1 rounded-circle mb-3">
        <h3 class="mt-3 text-dark">Mrs. Full Name</h3>
        <p class="goldenfamp2 mt-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et recusandae voluptatem rerum aperiam hic sequi quia harum obcaecati doloribus, ullam laudantium cupiditate nulla, blanditiis ducimus officia cumque illum porro velit.</p>
    </div>
</div>

<hr class="my-5">

<!-- Shareholders Section -->
<h2 class="gholdenfamp1 text-info p-1">Our Shareholders</h2>
<div class="container-fluid p-4 goldenfamcont1 mt-5">
    <div class="row text-center">
        <!-- Shareholder 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('assets/images/avatar1.jpeg') }}" alt="Shareholder Image" class="avatar1 rounded-circle mb-3">
                    <h3 class="mt-3 text-dark">Mrs. Full Name</h3>
                    <p class="goldenfamp2 mt-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et recusandae voluptatem rerum aperiam hic sequi quia harum obcaecati doloribus, ullam laudantium cupiditate nulla, blanditiis ducimus officia cumque illum porro velit.</p>
                </div>
            </div>
        </div>

        <!-- Shareholder 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('assets/images/avatar1.jpeg') }}" alt="Shareholder Image" class="avatar1 rounded-circle mb-3">
                    <h3 class="mt-3 text-dark">Mrs. Full Name</h3>
                    <p class="goldenfamp2 mt-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et recusandae voluptatem rerum aperiam hic sequi quia harum obcaecati doloribus, ullam laudantium cupiditate nulla, blanditiis ducimus officia cumque illum porro velit.</p>
                </div>
            </div>
        </div>

        <!-- Shareholder 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('assets/images/avatar1.jpeg') }}" alt="Shareholder Image" class="avatar1 rounded-circle mb-3">
                    <h3 class="mt-3 text-dark">Mrs. Full Name</h3>
                    <p class="goldenfamp2 mt-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et recusandae voluptatem rerum aperiam hic sequi quia harum obcaecati doloribus, ullam laudantium cupiditate nulla, blanditiis ducimus officia cumque illum porro velit.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Teachers Section -->
<h2 class="gholdenfamp1 text-info p-1">Our Teachers</h2>
<div class="container-fluid p-4 goldenfamcont1 mt-5 mb-5">
    <div class="row text-center">
        <!-- Teacher 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('assets/images/avatar1.jpeg') }}" alt="Teacher Image" class="avatar1 rounded-circle mb-3">
                    <h3 class="mt-3 text-dark">Mrs. Full Name</h3>
                    <p class="goldenfamp2 mt-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et recusandae voluptatem rerum aperiam hic sequi quia harum obcaecati doloribus, ullam laudantium cupiditate nulla, blanditiis ducimus officia cumque illum porro velit.</p>
                </div>
            </div>
        </div>

        <!-- Teacher 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('assets/images/avatar1.jpeg') }}" alt="Teacher Image" class="avatar1 rounded-circle mb-3">
                    <h3 class="mt-3 text-dark">Mrs. Full Name</h3>
                    <p class="goldenfamp2 mt-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et recusandae voluptatem rerum aperiam hic sequi quia harum obcaecati doloribus, ullam laudantium cupiditate nulla, blanditiis ducimus officia cumque illum porro velit.</p>
                </div>
            </div>
        </div>

        <!-- Teacher 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('assets/images/avatar1.jpeg') }}" alt="Teacher Image" class="avatar1 rounded-circle mb-3">
                    <h3 class="mt-3 text-dark">Mrs. Full Name</h3>
                    <p class="goldenfamp2 mt-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et recusandae voluptatem rerum aperiam hic sequi quia harum obcaecati doloribus, ullam laudantium cupiditate nulla, blanditiis ducimus officia cumque illum porro velit.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
