@extends('admin.layout')

@section('title', 'Create Project')

@section('content')
<div class="p-8">
    <div class="max-w-4xl">
        <h1 class="text-3xl font-bold text-white mb-6">Create New Project</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST" class="bg-gray-800 border border-gray-700 rounded-xl p-6 space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-300 mb-2">Title *</label>
                <input type="text" name="title" id="title" required value="{{ old('title') }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                @error('title')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="client" class="block text-sm font-medium text-gray-300 mb-2">Client *</label>
                <input type="text" name="client" id="client" required value="{{ old('client') }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                @error('client')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="start_date" class="block text-sm font-medium text-gray-300 mb-2">Start Date *</label>
                    <input type="date" name="start_date" id="start_date" required value="{{ old('start_date') }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    @error('start_date')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="end_date" class="block text-sm font-medium text-gray-300 mb-2">End Date</label>
                    <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    @error('end_date')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-300 mb-2">Description *</label>
                <textarea name="description" id="description" rows="3" required class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="problem_solved" class="block text-sm font-medium text-gray-300 mb-2">Problem Solved *</label>
                <textarea name="problem_solved" id="problem_solved" rows="4" required class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">{{ old('problem_solved') }}</textarea>
                @error('problem_solved')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="solution" class="block text-sm font-medium text-gray-300 mb-2">Solution *</label>
                <textarea name="solution" id="solution" rows="4" required class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">{{ old('solution') }}</textarea>
                @error('solution')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-300 mb-2">Image URL</label>
                    <input type="url" name="image_url" id="image_url" value="{{ old('image_url') }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    @error('image_url')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="website" class="block text-sm font-medium text-gray-300 mb-2">Website URL</label>
                    <input type="url" name="website" id="website" value="{{ old('website') }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    @error('website')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    Create Project
                </button>
                <a href="{{ route('admin.projects.index') }}" class="px-6 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition-colors">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
