<!-- resources/views/admin/calendar/index.blade.php -->

@extends('admin.layout.master')

@section('container')

<div class="container-fluid mt-5"style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Calendar </h2>

    <!-- Add Button -->
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('admin.calendar.create') }}" class="btn" style="background-color: #00440b; color: #e7d31f; padding: 10px 20px; font-weight: bold; text-decoration: none; border-radius: 5px;">
            Add New Calendar Entry
        </a>
    </div>

    <!-- Table to display calendars -->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Img1</th>
                <th>Img2</th>
                <th>Img3</th>
                <th>Img4</th>
                <th>Img5</th>
                <th>Img6</th>
                <th>PDF</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($calendars as $calendar)
                <tr>
                    <td>{{ $calendar->id }}</td>

                    <!-- Display images -->
                    <td><img src="{{ $calendar->img1}}" alt="Image 1" width="100px"></td>
                    <td><img src="{{  $calendar->img2}}" alt="Image 2" width="100px"></td>
                    <td><img src="{{  $calendar->img3}}" alt="Image 3" width="100px"></td>
                    <td><img src="{{  $calendar->img4}}" alt="Image 4" width="100px"></td>
                    <td><img src="{{  $calendar->img5}}" alt="Image 5" width="100px"></td>
                    <td><img src="{{  $calendar->img6}}" alt="Image 6" width="100px"></td>

                    <!-- Display PDF link -->
                    <td>
                        @if($calendar->pdf)
                            <a href="{{ $calendar->pdf}}" target="_blank">View PDF</a>
                        @else
                            No PDF available
                        @endif
                    </td>

                    <!-- Actions (Edit and Delete) -->
                    <td>
                        <a href="{{ route('admin.calendar.edit', $calendar) }}" class="btn btn-sm" style="background-color: #00440b; color: #e7d31f; margin-right: 5px;">
                            Edit
                        </a>

                        <form action="{{ route('admin.calendar.destroy', $calendar) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">No calendars available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
