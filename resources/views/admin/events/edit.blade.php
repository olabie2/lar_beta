@extends('admin.layout')

@section('title', 'Edit Event')

@section('content')
<div class="p-8">
    <div class="max-w-4xl">
        <h1 class="text-3xl font-bold text-white mb-6">Edit Event</h1>

        <form action="{{ route('admin.events.update', $event) }}" method="POST" class="bg-gray-800 border border-gray-700 rounded-xl p-6 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-300 mb-2">Title *</label>
                <input type="text" name="title" id="title" required value="{{ old('title', $event->title) }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">
                @error('title')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-300 mb-2">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">{{ old('description', $event->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="start_time" class="block text-sm font-medium text-gray-300 mb-2">Start Time *</label>
                    <input type="datetime-local" name="start_time" id="start_time" required value="{{ old('start_time', $event->start_time->format('Y-m-d\TH:i')) }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">
                    @error('start_time')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="end_time" class="block text-sm font-medium text-gray-300 mb-2">End Time *</label>
                    <input type="datetime-local" name="end_time" id="end_time" required value="{{ old('end_time', $event->end_time->format('Y-m-d\TH:i')) }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">
                    @error('end_time')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-300 mb-2">Location</label>
                    <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">
                    @error('location')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="capacity" class="block text-sm font-medium text-gray-300 mb-2">Capacity</label>
                    <input type="number" name="capacity" id="capacity" min="1" value="{{ old('capacity', $event->capacity) }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">
                    @error('capacity')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-300 mb-2">Price</label>
                    <input type="text" name="price" id="price" value="{{ old('price', $event->price) }}" placeholder="Free or $50" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">
                    @error('price')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="banner_image" class="block text-sm font-medium text-gray-300 mb-2">Banner Image URL</label>
                    <input type="url" name="banner_image" id="banner_image" value="{{ old('banner_image', $event->banner_image) }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">
                    @error('banner_image')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-gray-300 mb-2">Status *</label>
                <select name="status" id="status" required class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500">
                    <option value="1" {{ old('status', $event->status) == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $event->status) == '0' ? 'selected' : '' }}>Closed</option>
                </select>
                @error('status')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    Update Event
                </button>
                <a href="{{ route('admin.events.index') }}" class="px-6 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition-colors">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
