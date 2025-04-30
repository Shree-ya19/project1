@extends('admin.layout.master')

@section('container')
<div class="container mt-4" style="margin-bottom:90px;">
    <h4>Add New Event</h4>
    
    <form action="{{ route('admin.latestnews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value={{ old('title') }}>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" class="form-control" id="date"  value={{ old('date')}}>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="4"  value={{ old('description')}} required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Event Image</label>
            <input type="file" name="image" class="form-control" id="image"  value={{ old('image')}}>
        </div>

        <button type="submit" class="btn" style="background-color: #00440b;color:#e7d31f;border-color:#00440b;">Create Event</button>
        <a href="{{ route('admin.latestnews.index') }}" class="btn" style="background-color: #00440b;color:#e7d31f;border-color:#00440b;">Back</a>

    </form>
</div>
@endsection
