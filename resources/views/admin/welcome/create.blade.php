@extends('admin.layout.master')

@section('container')
<div class="container mt-4" style="margin-bottom:90px;">
    <h4>Add New Data</h4>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.welcome.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <input type="text" name="caption" class="form-control" id="caption" value="{{ old('caption') }}" required>
        </div>

        <div class="mb-3">
            <label for="since" class="form-label">Since Paragraph</label>
            <textarea name="since" class="form-control" id="editor1" rows="4" required>{{ old('since') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="why" class="form-label">Why Paragraph</label>
            <textarea name="why" class="form-control" id="editor2" rows="4" required>{{ old('why') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>

        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Create Data</button>
        <a href="{{ route('admin.welcome.index') }}" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');

    // Make sure CKEditor updates textarea before form submit
    document.querySelector('form').addEventListener('submit', function (e) {
        for (let instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    });
</script>
@endpush
