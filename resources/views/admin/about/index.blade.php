@extends('admin.layout.master')

@section('container')
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h4>About Us Sections</h4>
        <a href="{{ route('admin.about.create') }}" class="btn btn-primary" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Add New</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="">
            <tr>
                <th>#</th>
                <th>Video</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($abouts as  $about)
            <tr>
                <td>{{$about->id }}</td>
                <td>
                    <a href="{{ $about->video }}" target="_blank">View Video</a>
                </td>

                 <td>
    @if($about->image)
        <img src="{{ $about->image }}" alt="Feature Image" width="80" height="80">
    @else
        No Image
    @endif

                <td>
                    <a href="{{ route('admin.about.edit',$about) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.about.destroy',$about) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this entry?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No About Us records found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
