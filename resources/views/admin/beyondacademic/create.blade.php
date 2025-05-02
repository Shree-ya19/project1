@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Add Beyond Academic Activity</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('admin.beyondacademic.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="activity" class="form-label">Activity Name</label>
            <input type="text" name="activity" class="form-control" value="{{ old('activity') }}">
        </div>

        <div class="mb-3">
            <label for="detail" class="form-label">Detail</label>
            <textarea name="detail" rows="4" class="form-control" required>{{ old('detail') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Activity Images</label>
            <input type="file" name="image[]" class="form-control"  multiple required>
        </div>

        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f;">
            Submit
        </button>
        <a href="{{ route('admin.beyondacademic.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f;">back</a>
    </form>
</div>

@endsection
