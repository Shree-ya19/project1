@extends('frontend.layout.master')
@section('container')


<h2 class="text-center mb-4 interesth">💬 Express Your Interest</h2>

<div class="container mt-3 interestform mb-5" style="max-width: 650px;">
    <form class="p-4 shadow rounded interestform">
        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your full name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="your@example.com">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label fw-bold">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="98XXXXXXXX">
        </div>

        <div class="mb-3">
            <label for="interest" class="form-label fw-bold">I am interested in</label>
            <select class="form-select" id="interest">
                <option selected disabled>Select an option</option>
                <option>Becoming a teacher</option>
                <option>Joining as a student</option>
                <option>Volunteering</option>
                <option>Learning more about the platform</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label fw-bold">Your Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Write something..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100 fw-bold interestbtn">Submit</button>
    </form>
</div>


@endsection
