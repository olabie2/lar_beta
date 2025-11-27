<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-gray-800 to-gray-900 border-r border-gray-700 flex flex-col">
            <!-- Logo/Brand -->
            <div class="p-6 border-b border-gray-700">
                <h1 class="text-2xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                    Admin Panel
                </h1>
                <p class="text-xs text-gray-400 mt-1">{{ Auth::user()->name }}</p>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-indigo-400 group-hover:text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="font-medium">Dashboard</span>
                </a>

                <!-- Projects Section -->
                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Projects</p>
                </div>
                <a href="{{ route('admin.projects.create') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-green-400 group-hover:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span class="font-medium">Add Project</span>
                </a>
                <a href="{{ route('admin.projects.index') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="font-medium">Manage Projects</span>
                </a>

                <!-- Careers Section -->
                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Careers</p>
                </div>
                <a href="{{ route('admin.careers.create') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-green-400 group-hover:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span class="font-medium">Add Career</span>
                </a>
                <a href="{{ route('admin.careers.index') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span class="font-medium">Manage Careers</span>
                </a>

                <!-- Events Section -->
                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Events</p>
                </div>
                <a href="{{ route('admin.events.create') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-green-400 group-hover:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span class="font-medium">Add Event</span>
                </a>
                <a href="{{ route('admin.events.index') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-purple-400 group-hover:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="font-medium">Manage Events</span>
                </a>

                <!-- Applications Section -->
                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Applications</p>
                </div>
                <a href="{{ route('admin.applications.index') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-yellow-400 group-hover:text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="font-medium">Job Applications</span>
                    @if(\App\Models\JobApplication::count() > 0)
                        <span class="ml-auto bg-yellow-500/20 text-yellow-400 text-xs font-bold px-2 py-1 rounded-full">{{ \App\Models\JobApplication::count() }}</span>
                    @endif
                </a>
                <a href="{{ route('admin.demos.index') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white rounded-lg transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-3 text-pink-400 group-hover:text-pink-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                    </svg>
                    <span class="font-medium">Demo Requests</span>
                    @if(\App\Models\DemoRequest::count() > 0)
                        <span class="ml-auto bg-pink-500/20 text-pink-400 text-xs font-bold px-2 py-1 rounded-full">{{ \App\Models\DemoRequest::count() }}</span>
                    @endif
                </a>
            </nav>

            <!-- Sign Out Button -->
            <div class="p-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center px-4 py-3 bg-red-600/10 text-red-400 hover:bg-red-600/20 hover:text-red-300 rounded-lg transition-all duration-200 group border border-red-600/20">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span class="font-medium">Sign Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-gray-900">
            <div class="p-8">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-white mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h1>
                    <p class="text-gray-400">Here's what's happening with your platform today.</p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Users -->
                    <div class="bg-gradient-to-br from-indigo-500/10 to-indigo-600/10 border border-indigo-500/20 rounded-xl p-6 hover:scale-105 transition-transform duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-indigo-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-gray-400 text-sm font-medium mb-1">Total Users</h3>
                        <p class="text-3xl font-bold text-white">{{ \App\Models\User::count() }}</p>
                    </div>

                    <!-- Total Projects -->
                    <div class="bg-gradient-to-br from-purple-500/10 to-purple-600/10 border border-purple-500/20 rounded-xl p-6 hover:scale-105 transition-transform duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-purple-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-gray-400 text-sm font-medium mb-1">Total Projects</h3>
                        <p class="text-3xl font-bold text-white">{{ \App\Models\Project::count() }}</p>
                    </div>

                    <!-- Open Positions -->
                    <div class="bg-gradient-to-br from-green-500/10 to-green-600/10 border border-green-500/20 rounded-xl p-6 hover:scale-105 transition-transform duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-green-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-gray-400 text-sm font-medium mb-1">Open Careers</h3>
                        <p class="text-3xl font-bold text-white">{{ \App\Models\Career::count() }}</p>
                    </div>

                    <!-- Upcoming Events -->
                    <div class="bg-gradient-to-br from-yellow-500/10 to-yellow-600/10 border border-yellow-500/20 rounded-xl p-6 hover:scale-105 transition-transform duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-yellow-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-gray-400 text-sm font-medium mb-1">Company Events</h3>
                        <p class="text-3xl font-bold text-white">{{ \App\Models\CompanyEvent::count() }}</p>
                    </div>
                </div>

                <!-- Recent Activity Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Recent Applications -->
                    <div class="bg-gray-800 border border-gray-700 rounded-xl p-6">
                        <h2 class="text-xl font-bold text-white mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Recent Job Applications
                        </h2>
                        <div class="space-y-3">
                            @forelse(\App\Models\JobApplication::latest()->take(5)->get() as $application)
                                <div class="flex items-center justify-between p-3 bg-gray-700/50 rounded-lg hover:bg-gray-700 transition-colors">
                                    <div>
                                        <p class="text-white font-medium">{{ $application->first_name }} {{ $application->last_name }}</p>
                                        <p class="text-gray-400 text-sm">{{ $application->email }}</p>
                                    </div>
                                    <span class="text-gray-500 text-xs">{{ $application->created_at->diffForHumans() }}</span>
                                </div>
                            @empty
                                <p class="text-gray-500 text-center py-4">No applications yet</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Recent Demo Requests -->
                    <div class="bg-gray-800 border border-gray-700 rounded-xl p-6">
                        <h2 class="text-xl font-bold text-white mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                            </svg>
                            Recent Demo Requests
                        </h2>
                        <div class="space-y-3">
                            @forelse(\App\Models\DemoRequest::latest()->take(5)->get() as $demo)
                                <div class="flex items-center justify-between p-3 bg-gray-700/50 rounded-lg hover:bg-gray-700 transition-colors">
                                    <div>
                                        <p class="text-white font-medium">{{ $demo->full_name }}</p>
                                        <p class="text-gray-400 text-sm">{{ $demo->company }} - {{ $demo->service }}</p>
                                    </div>
                                    <span class="text-gray-500 text-xs">{{ $demo->created_at->diffForHumans() }}</span>
                                </div>
                            @empty
                                <p class="text-gray-500 text-center py-4">No demo requests yet</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
