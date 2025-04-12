@extends('frontend.layout.master')
@section('container')

<div style="height: 100vh; background-color: #f8f9fa;" class="d-flex justify-content-center align-items-center">
    <div class="card shadow p-4 logincont mt-4" style="width: 100%; max-width: 600px; min-height: 500px;">
        <h3 class="text-center mb-4" style="font-weight: bold;">
            <i class="bi bi-person-plus fs-2"></i> Create Your Account
        </h3>

        <form action="student_register_submit" method="POST">
            <!-- CSRF Token -->
            <!-- @csrf -->

            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Choose a strong password" required>
            </div>

            <div class="mb-3">
                <label for="confirm_password" class="form-label fw-bold">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Repeat your password" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Register as</label>
                <select class="form-select" id="role" name="role" required>
                    <option selected disabled>Select your role</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success w-100 mt-2 loginbtn" style="padding: 10px;">Register</button>
        </form>

        <p class="text-center mt-4 mb-0">
            Already have an account?
            <a href="{{ route('student_login') }}" style="text-decoration: none; font-weight: bold;">Login</a>
        </p>
    </div>
</div>

@endsection
