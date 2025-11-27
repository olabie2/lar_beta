@extends('admin.layout')

@section('title', 'Demo Requests')

@section('content')
<div class="p-8">
    <h1 class="text-3xl font-bold text-white mb-6">Demo Requests</h1>

    <div class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
        <table class="min-w-full divide-y divide-gray-700">
            <thead class="bg-gray-900">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Company</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Service</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Requested</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-400 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @forelse($demos as $demo)
                    <tr class="hover:bg-gray-700/30">
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-white">{{ $demo->full_name }}</div>
                            <div class="text-sm text-gray-400">{{ $demo->email }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $demo->company }}</td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $demo->service }}</td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $demo->created_at->diffForHumans() }}</td>
                        <td class="px-6 py-4 text-right text-sm font-medium">
                            <a href="{{ route('admin.demos.show', $demo) }}" class="text-indigo-400 hover:text-indigo-300 mr-3">View</a>
                            <form action="{{ route('admin.demos.destroy', $demo) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-500">No demo requests yet</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">{{ $demos->links() }}</div>
</div>
@endsection
