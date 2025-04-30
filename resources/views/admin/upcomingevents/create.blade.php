@extends('admin.layout.master')

@section('container')
<div class="container mt-4" style="margin-bottom: 90px;">
    <h4>Add Upcoming Event</h4>

    <form action="{{ route('admin.upcomingevents.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input 
                type="text" 
                name="title" 
                class="form-control" 
                id="title" 
                value="{{ old('title') }}" 
                required
            >
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input 
                type="date" 
                name="date" 
                class="form-control" 
                id="date" 
                value="{{ old('date') }}" 
                required
            >
        </div>

        <div class="mb-3">
            <label for="detail" class="form-label">Detail</label>
            <textarea 
                name="detail" 
                class="form-control" 
                id="detail" 
                rows="4" 
                required
            >{{ old('detail') }}</textarea>
        </div>

        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Save Event
        </button>
        <a href="{{ route('admin.upcomingevents.index') }}" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Back
        </a>
    </form>
</div>
@endsection
