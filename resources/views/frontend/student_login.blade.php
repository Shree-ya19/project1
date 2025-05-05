@extends('frontend.layout.master')
@section('container')

<div class="login-container">
    <div class="welcome-side">
        <div class="welcome-content">
            <div class="icon-circle">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <h1>Welcome Back!</h1>
            <p>Log in to access your school dashboard, results, announcements, and more!</p>
        </div>
    </div>

    <div class="form-side">
        <div class="form-box">
            <h2 style="color:#00440b;">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <input type="email" name="email" class="form-control" placeholder="Email address" required>

                <input type="password" name="password" class="form-control" placeholder="Password" required>

                <select name="role" class="form-select" required>
                    <option selected disabled>Select your role</option>
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                </select>

                <button type="submit" class="btn-login mt-2">Login</button>
            </form>

            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('student_register') }}"><span style="color:#00440b;">Register</span></a></p>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    .login-container {
        display: flex;
        height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .welcome-side {
        flex: 1;
        background: linear-gradient(135deg,#00440b,#00440b);
        color:#e7d31f;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        position: relative;
        overflow: hidden;
    }

    .welcome-content {
        text-align: center;
        max-width: 400px;
        z-index: 1;
    }

    .icon-circle {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
    }

    .welcome-side h1 {
        font-size: 32px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .welcome-side p {
        font-size: 16px;
        opacity: 0.9;
    }

    .form-side {
        flex: 1;
        background: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
    }

    .form-box {
        width: 100%;
        max-width: 400px;
    }

    .form-box h2 {
        font-weight: bold;
        color: #0d47a1;
        margin-bottom: 30px;
        text-align: center;
    }

    .form-control,
    .form-select {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
        font-size: 16px;
    }

    .btn-login {
        background-color:#00440b;
        color:#e7d31f;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        padding: 10px;
        width: 100%;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-login:hover {
        background-color:white;
        border:2px solid #00440b;
        color:#00440b;
    }

    .register-link {
        text-align: center;
        margin-top: 15px;
    }

    .register-link a {
        text-decoration: none;
        color: #0d47a1;
        font-weight: bold;
    }

    .register-link a:hover {
        text-decoration: underline;
    }
    @media (max-width: 768px) {
    .login-container {
        flex-direction: column;
        height: auto;
    }

    .welcome-side,
    .form-side {
        flex: none;
        width: 100%;
        padding: 30px 20px;
        text-align: center;
    }

    .form-box {
        max-width: 100%;
    }

    .icon-circle {
        margin-bottom: 10px;
    }

    .welcome-side h1 {
        font-size: 24px;
    }

    .welcome-side p {
        font-size: 14px;
    }

    .btn-login {
        font-size: 16px;
        padding: 10px;
    }
}
</style>

@endsection
