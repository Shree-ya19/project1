@extends('admin.layout.master')

@section('container')
<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Edit Admission</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Form -->
    <form action="{{ route('admin.admission.update', $admission->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Explanation -->
        <div class="mb-3">
            <label for="explanation" class="form-label fw-bold">Explanation</label>
            <textarea name="explanation" id="explanation" class="form-control" rows="3" required>{{ old('explanation', $admission->explanation) }}</textarea>
        </div>

        <!-- Requirements -->
        <div class="mb-3">
            <label for="requirements" class="form-label fw-bold">Requirements</label>
            <textarea name="requirements" id="requirements" class="form-control" rows="3" required>{{ old('requirements', $admission->requirements) }}</textarea>
        </div>

        <!-- Process -->
        <div class="mb-3">
            <label for="process" class="form-label fw-bold">Process</label>
            <textarea name="process" id="process" class="form-control" rows="3" required>{{ old('process', $admission->process) }}</textarea>
        </div>

        <!-- Submit and Back Button -->
        <div class="text-end">
            <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
                Update
            </button>

            <!-- Back Button -->
            <a href="{{ route('admin.admission.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f;">Back</a>
        </div>

    </form>
</div>
@endsection
