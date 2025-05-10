@extends('frontend.layout.master')
@section('container')
<style>
    .pdfbtn{
        background-color: #00440b;
        color:#e7d31f;
        border:2px solid #00440b;
    }
    .pdfbtn:hover{
        background-color: #e7d31f;
        color:#00440b;
        border:2px solid #00440b;
    }
    .eventh{
        color:#00440b;
        margin-top: 80px;
    }
</style>

<div class="container-fluid calandercont1  mt-5 mb-5">
    <h2 class="text-center mb-4 eventh">Event Calendar</h2>

    <div class="card p-4 shadow calandercont2">
        <h4 class="mb-3">View Our Full-Year Calendar</h4>

        <p>You can scroll through the calendar pages directly below, or open it in a new tab as a PDF.</p>

        <!-- PDF viewer link -->
        <a href="{{ $calendar->pdf }}" target="_blank" class="btn btn-primary mb-4 pdfbtn">
            Open Calendar as PDF
        </a>
    
        <!-- Display calendar images -->
        <div class="calendar-images mt-4">
            <img src="{{ $calendar->img1 }}" class="img-fluid mb-3" alt="Calendar Page 1">
            <img src="{{ $calendar->img2 }}" class="img-fluid mb-3" alt="Calendar Page 2">
            <img src="{{ $calendar->img3 }}" class="img-fluid mb-3" alt="Calendar Page 3">
            <img src="{{ $calendar->img4 }}" class="img-fluid mb-3" alt="Calendar Page 4">
            <img src="{{ $calendar->img5 }}" class="img-fluid mb-3" alt="Calendar Page 5">
            <img src="{{ $calendar->img6 }}" class="img-fluid mb-3" alt="Calendar Page 6">
            <!-- Add more pages as needed -->
        </div>

    </div>
</div>

@endsection
