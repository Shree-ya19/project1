@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Admission Details</h2>

    <!-- Add New Admission Button -->
    <div class="mb-3">
        <a href="{{ route('admin.admission.create') }}" class="btn btn-success" style="background-color: #00440b; color: #e7d31f;">Add </a>
    </div>

    <!-- Admissions Table -->
    <table class="table table-bordered" style="border-color: #00440b;">
        <thead style="background-color: white; color: #e7d31f;">
            <tr>
                <th>#</th>
                <th>Requirements</th>
                <th>Process</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admissions as $admission)
                <tr>
                    <td>{{ $admission->id }}</td>

                    <!-- Display Requirements as a List -->
                    <td>
                        @if($admission->requirements)
                            <ul>
                                @foreach(explode("\n", $admission->requirements) as $req)
                                    <li>{{ trim($req) }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No requirements available.</p>
                        @endif
                    </td>

                    <!-- Display Process as an Ordered List -->
                    <td>
                        @if($admission->process)
                            <ol>
                                @foreach(explode("\n", $admission->process) as $proc)
                                    <li>{{ trim($proc) }}</li>
                                @endforeach
                            </ol>
                        @else
                            <p>No process steps available.</p>
                        @endif
                    </td>

                    <!-- Action Buttons (View, Edit, Delete) -->
                    <td class="text-center">
                        <!-- <a href="{{ route('admin.admission.show', $admission) }}" class="btn btn-info btn-sm">View</a>-->
                      <a href="{{ route('admin.admission.edit', $admission) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete Button -->
                        <form action="{{ route('admin.admission.destroy', $admission) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this admission?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Back Button -->
    <div class="text-end">
        <a href="{{ route('admin.admission.index') }}" class="btn btn-secondary" style="background-color: #00440b; color: #e7d31f;">Back</a>
    </div>
</div>

@endsection
