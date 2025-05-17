@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom: 90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Add Features</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Message -->
        <div class="mb-3">
            <label for="message" class="form-label fw-semibold">Message from Principal</label>
            <textarea class="form-control" id="editor-message" name="message" rows="4" required>{{ old('message') }}</textarea>
        </div>

        <!-- History -->
        <div class="mb-3">
            <label for="history" class="form-label fw-semibold">History</label>
            <textarea class="form-control" id="editor-history" name="history" rows="4" required>{{ old('history') }}</textarea>
        </div>

        <!-- Philosophy -->
        <div class="mb-3">
            <label for="philosophy" class="form-label fw-semibold">Philosophy</label>
            <textarea class="form-control" id="editor-philosophy" name="philosophy" rows="4" required>{{ old('philosophy') }}</textarea>
        </div>
        <div class="mb-3">

            <label for="image" class="form-label fw-semibold">Principle Image</label>
             <input type="file" class="form-control" id="image" name="image">
        </div>

        <!-- Video Upload -->
        <div class="mb-3">
            <label for="video" class="form-label fw-semibold">Video</label>
            <input type="file" class="form-control" id="video" name="video">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Save
        </button>

        <!-- Back Button -->
        <a href="{{ route('admin.about.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
    </form>
    @push('scripts')
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor-message');
    CKEDITOR.replace('editor-history');
    CKEDITOR.replace('editor-philosophy');
</script>
@endpush
</div>


@endsection
