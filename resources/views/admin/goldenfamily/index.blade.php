@extends('admin.layout.master')

@section('container')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Golden Family Members</h1>

    <a href="{{ route('goldenfamily.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add New Member</a>

    <table class="w-full border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Role</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Phone</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td class="border px-4 py-2">{{ $member->name }}</td>
                    <td class="border px-4 py-2">{{ ucfirst($member->role) }}</td>
                    <td class="border px-4 py-2">{{ $member->email }}</td>
                    <td class="border px-4 py-2">{{ $member->phone }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('goldenfamily.edit', $member->id) }}" class="text-blue-500">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
