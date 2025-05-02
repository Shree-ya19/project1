@extends('frontend.layout.master')
@section('container')

<style>
    /* Importing the Veda font */
    @import url('https://fonts.googleapis.com/css2?family=Veda&display=swap');

    /* Global body font */
    body {
        font-family: 'Veda', sans-serif; /* Apply Veda font to the entire page */
    }

    /* Accordion container style */
    .beyondcont {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .beyond {
        font-size: 2.5rem;
        font-weight: bold;
        color: #00440b; /* Green color for the title */
        text-align: center;
    }

    .beyondp1 {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.6;
        max-width: 700px;
        margin: 0 auto 40px auto;
        text-align: center;
    }

    /* Accordion button default styling */
    .accordion-button {
        background-color: #ffffff !important;
        color: #00440b !important;
        border: 2px solid #00440b !important; /* Green border */
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        padding: 18px;
        font-size: 1.1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        text-align: left; /* Left align text */
        box-shadow: none;
    }

    /* Remove the blue border when clicked */
    .accordion-button:focus {
        outline: none;
        box-shadow: none; /* Remove the focus box-shadow */
        border-color: #00440b !important; /* Keep the green border */
    }

    /* Hover effect for the accordion button */
    .accordion-button:hover {
        background-color: #ffffff !important; /* White background on hover */
        color: #00440b !important; /* Green text color */
        border-color: #00440b !important; /* Green border */
        cursor: pointer;
    }

    /* Active state for accordion button */
    .accordion-button:focus {
        outline: none;
        background-color: #ffffff !important; /* White background */
        color: #00440b !important; /* Green text */
        border-color: #00440b !important; /* Green border */
    }

    /* Accordion body style */
    .accordion-body {
        background-color: #ffffff;
        padding: 20px;
        font-size: 1rem;
        color: #333;
        border-top: 2px solid #f1f1f1;
    }

    /* Accordion item styling */
    .accordion-item {
        margin-bottom: 20px;
        border: none;
    }

    /* Image styling inside accordion */
    .img-fluid {
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow for images */
    }

    /* Green arrow icon color when accordion is collapsed */
    .accordion-button::after {
        content: "\f107"; /* Unicode for downward arrow */
        font-family: "Font Awesome 5 Free"; /* Font Awesome */
        font-weight: 900; /* Bold icon */
        color: #00440b; /* Green color */
        font-size: 1.2rem;
        margin-left: auto;
    }

    /* Green arrow color when accordion is expanded */
    .accordion-button:not(.collapsed)::after {
        content: "\f106"; /* Unicode for upward arrow */
        font-family: "Font Awesome 5 Free"; /* Font Awesome */
        font-weight: 900; /* Bold icon */
        color: #00440b; /* Green color */
        font-size: 1.2rem;
        margin-left: auto;
    }

    /* Hover effect for the arrow (green when hovered) */
    .accordion-button:hover::after {
        color: #e7d31f; /* Yellow color on hover */
    }

    /* Change arrow color to yellow when clicked (expanded) */
    .accordion-button:focus::after {
        color: #e7d31f; /* Yellow color when clicked */
    }
</style>

<div class="container-fluid p-4 mt-5 mb-5 beyondcont">
    <h2 class="text-center mb-4 beyond">🌟 Beyond Academics</h2>
    <p class="text-center mb-5 beyondp1">We believe in the holistic development of students. Explore our engaging co-curricular activities below!</p>

    <div class="accordion" id="activitiesAccordion">
        <!-- Loop through beyondacademics -->
        @foreach($beyondacademics as $beyondacademic)
        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="heading{{ $loop->index }}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}" aria-expanded="false" aria-controls="collapse{{ $loop->index }}">
                    {{$beyondacademic->activity}}
                </button>
            </h2>

            <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#activitiesAccordion">
                <div class="accordion-body">
                    <p>{{ $beyondacademic->detail }}</p>

                    <div class="row">
                        @foreach($beyondacademic->images as $activityimage)
                            <div class="col-md-6 mb-3">
                                <img src="{{ $activityimage->image }}" class="img-fluid" alt="Activity Image">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
