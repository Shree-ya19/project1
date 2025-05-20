@extends('frontend.layout.master')

@section('container')
<style>
    .interesth{
        margin-top:72px;
        color:#00440b;
    }
    .interestform{
        background-color:  #00440b;
        color:#d6bc1a;
    }
    .interestbtn{
        background-color: #d6bc1a;
        color:#00440b;
        border:2px solid #d6bc1a;
    }
    .interestbtn:hover{
        background-color: #d6bc1a;
        color:#00440b;
        border:2px solid #d6bc1a;
    }
</style>

<h2 class="text-center mb-4 interesth"> Express Your Interest</h2>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ session('success') }}",
        confirmButtonColor: '#00440b'
    });
</script>
@endif
<div class="container-fluid mt-3 interestform mb-5" style="max-width: 650px;">

    {{-- SHOW VALIDATION ERRORS --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORM START --}}
    <form action="{{ route('storeInterestForm') }}" method="post" class="p-4 shadow rounded interestform">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Full Name</label>
            <input type="text" class="form-control" id="name" name="full_name" placeholder="Enter your full name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="your@example.com">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label fw-bold">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone_number" placeholder="98XXXXXXXX">
        </div>

        <div class="mb-3">
            <label for="interest" class="form-label fw-bold">I am interested in</label>
            <select class="form-select" id="interest" name="interest">
                <option selected disabled>Select an option</option>
                <option>Becoming a teacher</option>
                <option>Joining as a student</option>
                <option>Volunteering</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label fw-bold">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write something..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100 fw-bold interestbtn">Submit</button>
    </form>
    {{-- FORM END --}}

</div>

@if (session('success'))
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.classList.add('fade');
                successMessage.classList.remove('show');
            }
        }, 5000); // 5 seconds

        setTimeout(function() {
            location.reload(); // This will refresh the page after 4 seconds
        }, 4000); // 4 seconds
    </script>
@endif

@endsection
