@extends('admin.layout')

@section('title', 'Manage Careers')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-white">Manage Careers</h1>
        <a href="{{ route('admin.careers.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Add Career
        </a>
    </div>

    <div class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
        <table class="min-w-full divide-y divide-gray-700">
            <thead class="bg-gray-900">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Location</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Type</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-400 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @forelse($careers as $career)
                    <tr class="hover:bg-gray-700/30">
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-white">{{ $career->title }}</div>
                            <div class="text-sm text-gray-400">{{ Str::limit($career->description, 60) }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $career->location }}</td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $career->type }}</td>
                        <td class="px-6 py-4 text-right text-sm font-medium">
                            <a href="{{ route('admin.careers.edit', $career) }}" class="text-indigo-400 hover:text-indigo-300 mr-3">Edit</a>
                            <form action="{{ route('admin.careers.destroy', $career) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                            No careers found. <a href="{{ route('admin.careers.create') }}" class="text-indigo-400">Create one now</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">{{ $careers->links() }}</div>
</div>
@endsection
