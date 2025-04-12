@extends('frontend.layout.master')
@section('container')

<div class="container-fluid calandercont1  mt-5 mb-5">
    <h2 class="text-center mb-4 eventh">📅 Event Calendar</h2>

    <div class="card p-4 shadow calandercont2">
        <h4 class="mb-3">View Our Full-Year Calendar</h4>

        <p>You can scroll through the calendar pages directly below, or open it in a new tab as a PDF.</p>

        <!-- PDF viewer link -->
        <a href="{{ asset('assets/pdfs/calander.pdf') }}" target="_blank" class="btn btn-primary mb-4 pdfbtn">
            Open Calendar as PDF
        </a>

        <!-- Display calendar images -->
        <div class="calendar-images mt-4">
            <img src="{{ asset('assets/images/calander_page1.jpg') }}" class="img-fluid mb-3" alt="Calendar Page 1">
            <img src="{{ asset('assets/images/calander_page2.jpg') }}" class="img-fluid mb-3" alt="Calendar Page 2">
            <img src="{{ asset('assets/images/calander_page3.jpg') }}" class="img-fluid mb-3" alt="Calendar Page 3">
            <img src="{{ asset('assets/images/calander_page4.jpg') }}" class="img-fluid mb-3" alt="Calendar Page 4">
            <img src="{{ asset('assets/images/calander_page5.jpg') }}" class="img-fluid mb-3" alt="Calendar Page 5">
            <img src="{{ asset('assets/images/calander_page6.jpg') }}" class="img-fluid mb-3" alt="Calendar Page 6">
            <!-- Add more pages as needed -->
        </div>

    </div>
</div>

@endsection
