@extends('admin.layout.master')
@section('container')

<div class="container-fluid p-3 mt-5 d-flex justify-content-end">
    <a href="{{ route('admin.systemSetting.create') }}" 
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
                <th>Title</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($systemSettings as $systemSetting)
        <tr>
            <td>{{ $systemSetting->id }}</td>
            <td>{{ $systemSetting->title }}</td>
            <td>{{ $systemSetting->email }}</td>
            <td>{{ $systemSetting->phone_number }}</td>
            <td>{{ $systemSetting->address }}</td>
            <td>
                <a href="{{ route('admin.systemSetting.edit', $systemSetting) }}" 
                   class="btn btn-sm" 
                   style="background-color: #00440b; color: #e7d31f; margin-right: 5px;">
                   Edit
                </a>

                <form action="{{ route('admin.systemSetting.destroy', $systemSetting->id) }}" method="POST" class="d-inline">
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
            <td colspan="6">No data found</td>
        </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
