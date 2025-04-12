@extends('frontend.layout.master')
@section('container')

<div style="height: 100vh; background-color: #f8f9fa;" class="d-flex justify-content-center align-items-center">
    <div class="card shadow p-4 logincont" style="width: 100%; max-width: 600px; min-height: 500px;">
        <h3 class="text-center mb-4" style="font-weight: bold;">
            <i class="bi bi-person-lock fs-2"></i> Login to Your Account
        </h3>

        <form action="submit" method="POST">
            <!-- CSRF Token if using Laravel -->
            <!-- @csrf -->

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Login as</label>
                <select class="form-select" id="role" name="role" required>
                    <option selected disabled>Select your role</option>
                    <option value="teacher">Admin</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-2 loginbtn" style="padding: 10px;">Login</button>
        </form>

        <p class="text-center mt-4 mb-0">
            Don't have an account?
            <a href="{{ route('student_register') }}" style="text-decoration: none; font-weight: bold;">Register</a>
        </p>
    </div>
</div>

@endsection
