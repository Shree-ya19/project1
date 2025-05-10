@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom: 90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Edit Features</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Message -->
        <div class="mb-3">
            <label for="message" class="form-label fw-semibold">Message from Principal</label>
            <textarea class="form-control" id="editor-message" name="message" rows="4" required>{{ old('message', $about->message) }}</textarea>
        </div>

        <!-- History -->
        <div class="mb-3">
            <label for="history" class="form-label fw-semibold">History</label>
            <textarea class="form-control" id="editor-history" name="history" rows="4" required>{{ old('history', $about->history) }}</textarea>
        </div>

        <!-- Philosophy -->
        <div class="mb-3">
            <label for="philosophy" class="form-label fw-semibold">Philosophy</label>
            <textarea class="form-control" id="editor-philosophy" name="philosophy" rows="4" required>{{ old('philosophy', $about->philosophy) }}</textarea>
        </div>

        <!-- Existing Video Preview (optional) -->

      

        <div class="mb-3">

            <label for="image" class="form-label fw-semibold">Image</label>
             <input type="file" class="form-control" id="image" name="image">
        </div>
         @if($about->image)
        <div class="mb-2">
            <img src="{{  $about->image }}" alt="Current Image" class="img-fluid" style="max-height: 200px;">
        </div>
    @endif

        <!-- Video Upload -->
        <div class="mb-3">
            <label for="video" class="form-label fw-semibold">Change Video</label>
            <input type="file" class="form-control" id="video" name="video">
        </div>
         @if($about->video)
        <div class="mb-3">
            <label class="form-label fw-semibold">Current Video:</label>
            <video width="320" height="240" controls>
                <source src="{{ $about->video}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
          @endif

        <!-- Submit Button -->
        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Update
        </button>

        <!-- Back Button -->
        <a href="{{ route('admin.about.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
    </form>
</div>
 @push('scripts')
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor-message');
    CKEDITOR.replace('editor-history');
    CKEDITOR.replace('editor-philosophy');
</script>
@endpush

@endsection
