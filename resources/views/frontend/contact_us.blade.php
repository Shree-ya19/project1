@extends('frontend.layout.master')

@section('container')

<style>
    .contactcont {
        margin-top: 65px;
        margin-bottom: 50px;
        width: 95%;
        border: 2px solid #00440b;
    }

    .contacth {
        font-size: 2.5rem;
        margin-bottom: 20px;
        margin-top: 15px;
        color: #00440b;
    }

    .msgbtn {
        width: 100%;
        background-color: #e7d31f;
        border: none;
        transition: background-color 0.3s ease;
        color: #00440b;
    }

    .msgbtn:hover {
        background-color: white;
        color: #00440b;
        border: 2px solid #00440b;
    }

    .map-container {
        width: 100%;
        height: 400px;
        overflow: hidden;
        border-radius: 8px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    .contactcol {
        background-color: #00440b;
        border-radius: 8px;
        color: #e7d31f;
        margin-bottom:90px;
    }
</style>

<div class="container-fluid contactcont">
    <div class="container-fluid">
        <h2 class="text-center contacth"><i class="bi bi-telephone"></i> Contact Us</h2>
        <p class="text-center mb-5">Feel free to reach out to us for any inquiries, admissions, or feedback!</p>

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

 @if ($errors->any())
    <div class="alert alert-danger" id="error-alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <script>
        // After 6 seconds (6000 ms), fade out and remove the alert
        setTimeout(() => {
            const alert = document.getElementById('error-alert');
            if (alert) {
                alert.style.transition = "opacity 0.5s ease";
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500); // remove from DOM after fade out
            }
        }, 6000);
    </script>
@endif


        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="card shadow-sm p-4 contactcol">
                    <h4 class="mb-3"><i class="bi bi-chat-left-text"></i> Send us a message</h4>
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
            <div class="col-md-6">
                <div class="card shadow-sm p-4 address contactcol">
                    <h4 class="mb-3"><i class="bi bi-building"></i> School Address</h4>
                    <p><strong>{{ $systemsetting->title }}</strong><br>
                        {{ $systemsetting->address }}<br>
                        Banke District<br>
                        Nepal</p>

                    <p><strong>Phone:</strong> {{ $systemsetting->phone_number }}</p>
                    <p><strong>Email:</strong> {{ $systemsetting->email }}</p>

                    <!-- Google Map -->
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
</div>

@if (session('success'))
    <script>
        setTimeout(function () {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.classList.add('fade');
                successMessage.classList.remove('show');
            }
        }, 5000);

        setTimeout(function () {
            location.reload();
        }, 4000);
    </script>
@endif

@endsection
