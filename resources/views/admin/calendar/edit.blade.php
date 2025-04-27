@extends('admin.layout.master')
@section('container')

<div class="container-fluid p-3 d-flex justify-content-end">
    <a href="{{ route('admin.calendar.index') }}" 
       class="btn" 
       style="background-color: #00440b; color: #e7d31f; padding: 10px 20px; font-weight: bold; text-decoration: none; border-radius: 5px;">
       Back
    </a>
</div>

<!-- Form to Edit Calendar Entry -->
<div class="container-fluid mt-5" style="margin-bottom: 100px;">
    <h2>Edit Calendar Entry</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.calendar.update', $calendar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Use PUT method for updating data -->

        <div class="form-group">
            <label for="img1">Image 1</label>
            <input type="file" name="img1" id="img1" class="form-control">
            @if($calendar->img1)
                <img src="{{ asset('storage/' . $calendar->img1) }}" alt="Image 1" width="100px" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="img2">Image 2</label>
            <input type="file" name="img2" id="img2" class="form-control">
            @if($calendar->img2)
                <img src="{{ asset('storage/' . $calendar->img2) }}" alt="Image 2" width="100px" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="img3">Image 3</label>
            <input type="file" name="img3" id="img3" class="form-control">
            @if($calendar->img3)
                <img src="{{ asset('storage/' . $calendar->img3) }}" alt="Image 3" width="100px" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="img4">Image 4</label>
            <input type="file" name="img4" id="img4" class="form-control">
            @if($calendar->img4)
                <img src="{{ asset('storage/' . $calendar->img4) }}" alt="Image 4" width="100px" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="img5">Image 5</label>
            <input type="file" name="img5" id="img5" class="form-control">
            @if($calendar->img5)
                <img src="{{ asset('storage/' . $calendar->img5) }}" alt="Image 5" width="100px" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="img6">Image 6</label>
            <input type="file" name="img6" id="img6" class="form-control">
            @if($calendar->img6)
                <img src="{{ asset('storage/' . $calendar->img6) }}" alt="Image 6" width="100px" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="pdf">PDF</label>
            <input type="file" name="pdf" id="pdf" class="form-control">
            @if($calendar->pdf)
                <a href="{{ asset('storage/' . $calendar->pdf) }}" target="_blank" class="mt-2">View current PDF</a>
            @endif
        </div>

        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; padding: 10px 20px; font-weight: bold; text-decoration: none; border-radius: 5px;">
            Save
        </button>
    </form>
</div>

@endsection
