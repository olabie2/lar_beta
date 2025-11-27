<x-layout>
    <div class="bg-gray-900 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
                    <p class="text-gray-300 mb-4">Welcome back, {{ Auth::user()->name }}!</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Stat Card 1 -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-2">Total Users</h3>
                            <p class="text-3xl font-bold text-indigo-400">{{ \App\Models\User::count() }}</p>
                        </div>

                        <!-- Stat Card 2 -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-2">Total Projects</h3>
                            <p class="text-3xl font-bold text-purple-400">{{ \App\Models\Project::count() }}</p>
                        </div>

                        <!-- Stat Card 3 -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-2">System Status</h3>
                            <p class="text-3xl font-bold text-green-400">Online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
