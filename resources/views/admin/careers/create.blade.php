@extends('admin.layout')

@section('title', 'Create Career')

@section('content')
<div class="p-8">
    <div class="max-w-4xl">
        <h1 class="text-3xl font-bold text-white mb-6">Create New Career</h1>

        <form action="{{ route('admin.careers.store') }}" method="POST" class="bg-gray-800 border border-gray-700 rounded-xl p-6 space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-300 mb-2">Job Title *</label>
                <input type="text" name="title" id="title" required value="{{ old('title') }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                @error('title')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-300 mb-2">Description *</label>
                <textarea name="description" id="description" rows="6" required class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-300 mb-2">Location *</label>
                    <input type="text" name="location" id="location" required value="{{ old('location') }}" placeholder="e.g., Remote, New York, NY" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    @error('location')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-300 mb-2">Job Type *</label>
                    <select name="type" id="type" required class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">Select Type</option>
                        <option value="Full-time" {{ old('type') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                        <option value="Part-time" {{ old('type') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                        <option value="Contract" {{ old('type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                        <option value="Internship" {{ old('type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                        <option value="Remote" {{ old('type') == 'Remote' ? 'selected' : '' }}>Remote</option>
                    </select>
                    @error('type')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    Create Career
                </button>
                <a href="{{ route('admin.careers.index') }}" class="px-6 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition-colors">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
