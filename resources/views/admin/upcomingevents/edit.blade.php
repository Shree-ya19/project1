@extends('admin.layout.master')
@section('container')

<div class="container p-5 mb-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.upcomingevents.update', $upcomingevent) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $upcomingevent->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $upcomingevent->date) }}" required>
        </div>

        <div class="mb-3">
            <label for="detail" class="form-label">Detail</label>
            <textarea name="detail" class="form-control" id="detail" rows="4" required>{{ old('detail', $upcomingevent->detail) }}</textarea>
        </div>

        <button type="submit" 
                class="btn" 
                style="background-color: #00440b; color: #e7d31f; padding: 10px 20px; font-weight: bold; text-decoration: none; border-radius: 5px;">
            Submit
        </button>
    </form>
</div>

@endsection
