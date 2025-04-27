@extends('frontend.layout.master')
@section('container')

<style>
    .custom-shadow {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15); /* soft shadow */
        border-radius: 10px; /* optional: rounded corners */
    }
    .card{
        border:2px solid #00440b;
    }
    .add{
        color:#00440b;
    }
    .addbtn
    {
        background-color: #00440b;
        color:#e7d31f;
        border:2px solid #00440b;
    }
    .addbtn:hover
    {
        background-color: white;
        color: #00440b;
        border:2px solid #00440b;
    }
</style>

<div class="container-fluid p-3">
    <h2 class="text-center  p-5 add"><i class="bi bi-journal-check"></i> Admission Information</h2>
    
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card p-4 custom-shadow">
                <h4 class="mb-3 add">Welcome to Golden ABC Public School</h4>
                <p>We are now accepting applications for the upcoming academic year. Our school offers a supportive learning environment, modern facilities, and a curriculum designed to help every child thrive.</p>
                
                <hr>
                <h5 class="mb-2 add"> Admission Requirements:</h5>
                <ul>
                    <li>Copy of birth certificate</li>
                    <li>2 passport-size photographs</li>
                    <li>Previous school transfer certificate (if applicable)</li>
                    <li>Last academic report card</li>
                </ul>
                
                <hr>
                <h5 class="mb-2 add"> Admission Process:</h5>
                <ol>
                    <li>Fill out the admission form (available in school or online)</li>
                    <li>Submit required documents</li>
                    <li>Attend an interaction/interview (for selected classes)</li>
                    <li>Receive admission confirmation</li>
                </ol>

                <hr>
                <div class="text-center mt-4">
                    <p> For any inquiries or assistance, contact us at <strong>9858048498</strong> or email <strong>goldenabc@gmail.com</strong>.</p>
                    <a href="contact.html" class="btn btn-primary addbtn">Contact for Admission</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
