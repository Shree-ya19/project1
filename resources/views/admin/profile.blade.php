@extends('admin.layout.master')

@section('container')
<div class="d-flex justify-content-center mt-5">
    <div class="card p-4 shadow-sm" style="max-width: 500px; width: 100%;">
        <h4 class="mb-4 text-center">{{ Auth::user()->name }}</h4>

        <!-- Round Profile Photo -->
         
        <div class="text-center mb-4">
            <img src="{{ $user->image }}" alt="Profile Image" class="rounded-circle" width="120" height="120" style="object-fit: cover;">
        </div>
        

        <!-- Profile Form -->
        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Image Upload -->

            <div class="mb-3">
                <label class="form-label">Profile Image</label>
                <input type="file" name="image" class="form-control" value="{{ $user->image }}">
            </div>

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $user->address }}">
            </div>

            <!-- Phone Number -->
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" value="{{ $user->phone_number }}">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Update Profile</button>
            </div>
        </form>
    </div>
</div>
@endsection
