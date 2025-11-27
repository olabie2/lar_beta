@extends('admin.layout')

@section('title', 'Manage Events')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-white">Manage Events</h1>
        <a href="{{ route('admin.events.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Add Event
        </a>
    </div>

    <div class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
        <table class="min-w-full divide-y divide-gray-700">
            <thead class="bg-gray-900">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Location</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Start Time</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Status</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-400 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @forelse($events as $event)
                    <tr class="hover:bg-gray-700/30">
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-white">{{ $event->title }}</div>
                            <div class="text-sm text-gray-400">{{ Str::limit($event->description, 50) }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $event->location ?? 'N/A' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $event->start_time->format('M d, Y g:i A') }}</td>
                        <td class="px-6 py-4">
                            @if($event->status)
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-600/20 text-green-400">Active</span>
                            @else
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-600/20 text-red-400">Closed</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right text-sm font-medium">
                            <a href="{{ route('admin.events.edit', $event) }}" class="text-indigo-400 hover:text-indigo-300 mr-3">Edit</a>
                            <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                            No events found. <a href="{{ route('admin.events.create') }}" class="text-indigo-400">Create one now</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">{{ $events->links() }}</div>
</div>
@endsection
