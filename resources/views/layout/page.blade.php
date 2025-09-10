<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nadhrah Intern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">

    <div x-data="{ sidebarOpen: false }" class="relative min-h-screen">
        
        <!-- Top Navigation Bar (Always Visible) -->
        <div class="fixed top-0 left-0 right-0 bg-white shadow-md z-40 h-16">
            <div class="flex items-center justify-between h-full px-4">
                <!-- Left side: Logo/Brand and Mobile Menu Button -->
                <div class="flex items-center space-x-4">
                    <!-- Mobile menu button -->
                    <button 
                        @click="sidebarOpen = !sidebarOpen"
                        class="lg:hidden p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    
                    <!-- Brand/Logo -->
                    <div class="font-bold text-xl text-gray-800">
                        Nadhrah Intern
                    </div>
                </div>

                <!-- Center: Main Navigation (Desktop) -->
                <nav class="hidden lg:flex items-center space-x-6">
                    <a href="/page/utama" class="px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors">
                        <h1>Utama</h1>
                    </a>
                    <a href="/page/mengenai" class="px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors">
                        <h1>Mengenai Kami</h1>
                    </a>
                    <a href="/page/hubungi" class="px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors">
                        <h1>Hubungi</h1>
                    </a>
                    <a href="{{ route('users.index') }}" class="px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors">
                        <h1>Users</h1>
                    </a>
                </nav>

                <!-- Right side: User menu or additional actions -->
                <div class="flex items-center space-x-4">
                    <button class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Left Sidebar -->
        <div 
            class="fixed top-16 left-0 z-30 w-64 h-full bg-white shadow-lg transform transition-transform duration-300 ease-in-out lg:translate-x-0"
            :class="{ '-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen }"
            x-cloak
        >
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-800">Menu</h2>
                <!-- Close button for mobile -->
                <button 
                    @click="sidebarOpen = false"
                    class="lg:hidden p-1 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="flex-1 p-4 space-y-2">
                <div class="space-y-1">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Main</h3>
                    <a href="/page/utama" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-blue-600 hover:bg-blue-50 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v4M16 5v4"></path>
                        </svg>
                        Utama
                    </a>
                    <a href="/page/mengenai" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-blue-600 hover:bg-blue-50 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Mengenai Kami
                    </a>
                    <a href="/page/hubungi" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-blue-600 hover:bg-blue-50 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Hubungi
                    </a>
                </div>

                <div class="pt-4 space-y-1">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Management</h3>
                    <a href="{{ route('users.index') }}" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-blue-600 hover:bg-blue-50 group">

                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                        Users
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-blue-600 hover:bg-blue-50 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Settings
                    </a>
                </div>
            </nav>
        </div>

        <!-- Overlay for mobile when sidebar is open -->
        <div 
            x-show="sidebarOpen" 
            @click="sidebarOpen = false"
            class="fixed inset-0 bg-black bg-opacity-40 z-20 lg:hidden"
            x-cloak
        ></div>

        <!-- Main Content Area -->
        <div class="pt-16 lg:pl-64">
            <div class="min-h-screen">
                <!-- Page Content -->
                <div class="max-w-6xl mx-auto px-4 py-6">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</body>
</html>