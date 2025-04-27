@extends('frontend.layout.master')
@section('container')


<div class="container  contactcont">
    <h2 class="text-center  contacth"><i class="bi bi-telephone"></i> Contact Us</h2>
    <p class="text-center mb-5">Feel free to reach out to us for any inquiries, admissions, or feedback!</p>
    @if (session('success'))
            <div id="successMessage" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-6">
    <div class="card shadow-sm p-4 contact">
        <h4 class="mb-3"><i class="bi bi-chat-left-text"></i> Send us a message</h4>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('storeContactMessage') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary msgbtn">Send Message</button>
        </form>
    </div>
</div>


        <!-- Contact Info -->
        <div class="col-md-6 ">
            <div class="card shadow-sm p-4 address">
                <h4 class="mb-3"><i class="bi bi-building"></i> School Address</h4>
                <p><strong>Golden ABC Public School</strong><br>
                Salyanibangala, Neplagunj<br>
                Banke District<br>
                Nepal</p>

                <p><strong>Phone:</strong> 9858048498</p>
                <p><strong>Email:</strong> goldenabc@gmial.com</p>

                <!-- Optional: Google Map Embed -->
                <div class="mt-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.406878108537!2d85.3206!3d27.7052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDQyJzE4LjciTiA4NcKwMTknMTQuMiJF!5e0!3m2!1sen!2snp!4v1615580346375!5m2!1sen!2snp"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('success'))
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.classList.add('fade');
                successMessage.classList.remove('show');
            }
        }, 5000); // 5000 milliseconds = 5 seconds

        // Refresh the page after 4 seconds
        setTimeout(function() {
            location.reload(); // This will refresh the page
        }, 4000); // 4000 milliseconds = 4 seconds
    </script>
@endif

@endsection
