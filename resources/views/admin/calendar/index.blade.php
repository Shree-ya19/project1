@extends('admin.layout.master')
@section('container')

<div class="container-fluid p-3 mt-5 d-flex justify-content-end">
    <a href="{{ route('admin.calendar.create') }}" 
       class="btn" 
       style="background-color: #00440b; color: #e7d31f; padding: 10px 20px; font-weight: bold; text-decoration: none; border-radius: 5px;">
       Add
    </a>
</div>

<div class="container-fluid">
    <table class="table table-striped table-hover" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Img1</th>
                <th>Img2</th>
                <th>Img3</th>
                <th>Img4</th>
                <th>Img5</th>
                <th>Img6</th>
                <th>Pdf</th>
                <th>Actions</th> <!-- Added column for edit and delete actions -->
            </tr>
        </thead>
        <tbody>
        @forelse ($calendars as $calendar)
        <tr>
            <td>{{ $calendar->id }}</td>

            <!-- Display images using null coalescing operator -->
            <td><img src="{{ $calendar->img1 ?? 'default-image.jpg' }}" alt="Image 1" width="100px" /></td>
            <td><img src="{{ $calendar->img2 ?? 'default-image.jpg' }}" alt="Image 2" width="100px" /></td>
            <td><img src="{{ $calendar->img3 ?? 'default-image.jpg' }}" alt="Image 3" width="100px" /></td>
            <td><img src="{{ $calendar->img4 ?? 'default-image.jpg' }}" alt="Image 4" width="100px" /></td>
            <td><img src="{{ $calendar->img5 ?? 'default-image.jpg' }}" alt="Image 5" width="100px" /></td>
            <td><img src="{{ $calendar->img6 ?? 'default-image.jpg' }}" alt="Image 6" width="100px" /></td>
            <td>
    @if($calendar->pdf)
        <a href="{{ asset('storage/' . $calendar->pdf) }}" target="_blank">View PDF</a>
    @else
        No PDF available
    @endif
</td>


            <td>
                <!-- Edit and Delete buttons -->
                <a href="{{ route('admin.calendar.edit', $calendar->id) }}" 
                   class="btn btn-sm" 
                   style="background-color: #00440b; color: #e7d31f; margin-right: 5px;">
                   Edit
                </a>

                <form action="{{ route('admin.calendar.destroy', $calendar->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="9">No data found</td>
        </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
