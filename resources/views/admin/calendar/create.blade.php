<!-- resources/views/admin/calendar/create.blade.php -->

@extends('admin.layout.master')

@section('container')

<div class="container-fluid mt-5" style="margin-bottom: 90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Add New Calendar Entry</h2>

    <!-- Form for adding a new calendar entry -->
    <form action="{{ route('admin.calendar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Image 1 -->
        <div class="mb-3">
            <label for="img1" class="form-label">Image 1</label>
            <input type="file" class="form-control" id="img1" name="img1" accept="image/*" value{{old ('img1') }}>
        </div>

        <!-- Image 2 -->
        <div class="mb-3">
            <label for="img2" class="form-label">Image 2</label>
            <input type="file" class="form-control" id="img2" name="img2" accept="image/*" value{{old ('img2') }}>
        </div>

        <!-- Image 3 -->
        <div class="mb-3">
            <label for="img3" class="form-label">Image 3</label>
            <input type="file" class="form-control" id="img3" name="img3" accept="image/*" value{{old ('img3') }}>
        </div>

        <!-- Image 4 -->
        <div class="mb-3">
            <label for="img4" class="form-label">Image 4</label>
            <input type="file" class="form-control" id="img4" name="img4" accept="image/*" value{{old ('img4') }}>
        </div>

        <!-- Image 5 -->
        <div class="mb-3">
            <label for="img5" class="form-label">Image 5</label>
            <input type="file" class="form-control" id="img5" name="img5" accept="image/*" value{{old ('img5') }}>
        </div>

        <!-- Image 6 -->
        <div class="mb-3">
            <label for="img6" class="form-label">Image 6</label>
            <input type="file" class="form-control" id="img6" name="img6" accept="image/*" value{{old ('img6') }}>
        </div>

        <!-- PDF -->
        <div class="mb-3">
            <label for="pdf" class="form-label">PDF</label>
            <input type="file" class="form-control" id="pdf" name="pdf" accept="application/pdf">
        </div>

        <!-- Submit Button -->
        <div class="mb-3">
            <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; padding: 10px 20px; font-weight: bold; border-radius: 5px;">
                Save Calendar Entry
            </button>
            <a href="{{ route('admin.calendar.index') }}" class="btn" style="background-color: #00440b; color: #e7d31f; padding: 10px 20px; font-weight: bold; text-decoration: none; border-radius: 5px;">
            Back 
        </a>

        </div>
    </form>

</div>

@endsection
